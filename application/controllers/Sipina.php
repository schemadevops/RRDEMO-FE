<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sipina extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->login == false) {
			redirect('login');
		};
	}

	public function report_proces()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('sipina/report_proces');
	}

	public function form_report()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('sipina/form_report');
	}

	public function backup_restore()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('sipina/backup_restore');
	}


	public function form_report_isi()
	{
		$tgl_seacrh = $this->session->tgl_periode;

		if ($tgl_seacrh != "") {
			$curl = curl_init();

			curl_setopt_array($curl, array(
				CURLOPT_URL => 'http://141.136.47.149:3003/sipina/getbydate',
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => '',
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => 'POST',
				CURLOPT_POSTFIELDS => 'tanggal=' . $tgl_seacrh,
				CURLOPT_HTTPHEADER => array(
					'Content-Type: application/x-www-form-urlencoded',
					'Authorization: Bearer ' . $this->session->access_token
				),
			));

			$response = curl_exec($curl);

			curl_close($curl);
			$hasil = json_decode($response);
			if ($hasil->message == "success") {
				$data['api_hasil'] = $hasil->data;
			}
			$this->session->unset_userdata('tgl_periode');
		} else {
			$curl = curl_init();

			curl_setopt_array($curl, array(
				CURLOPT_URL => 'http://141.136.47.149:3003/sipina',
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => '',
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => 'GET',
				CURLOPT_HTTPHEADER => array(
					'Authorization: Bearer ' . $this->session->access_token
				),
			));

			$response = curl_exec($curl);

			curl_close($curl);
			$hasil = json_decode($response);
			if ($hasil->message == "success") {
				$data['api_hasil'] = $hasil->data;
			}
		};

		$newdata = array(
			'data_export_txt'  => $data['api_hasil'],
			'kode_form'		=> 'SIPINA',
			'nama_form'		=> 'Form SIPINA'
		);
		$this->session->set_userdata($newdata);

		$data['api_hasil'] = $hasil;
		$data['header'] = 'Form Sistem Penyampaian Informasi Nasabah Asing';
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('sipina/form_report_isi', $data);
	}

	public function exportDataToTxt()
	{
		$hasil = $this->session->data_export_txt;

		if ($hasil) {

			$y = date('Y');
			$m = date('m');
			$kode_form = $this->session->kode_form;
			$nama_form = $this->session->nama_form;
			// Create a custom header (modify as per your requirement)
			$customHeader = "H|0103|601044|" . $y . "|" . $m . "|" . $kode_form . "|11112|11112\n";

			// Convert data to a tab-separated text format
			$txtData = '';

			foreach ($hasil as $row) {
				unset($row->createdAt);
				unset($row->updatedAt);
				$txtData .= "D01|" . implode("|", (array)$row) . "\n";
			}

			// Set the headers for file download
			header("Content-type: application/octet-stream");
			header("Content-Disposition: attachment; filename=" . $nama_form . ".txt");

			// Output the data to the response
			echo $customHeader . $txtData;
		}
	}

	public function ajax_periode()
	{
		$tgl = $this->input->post('periode_date');

		$newdata = array(
			'tgl_periode'  => $tgl,
		);

		$this->session->set_userdata($newdata);

		echo json_encode(array("status" => TRUE));
	}

	public function form_report_edit($id)
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/sipina/' . $id,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
			CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer ' . $this->session->access_token
			),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		$hasil = json_decode($response);
		if ($hasil->message == "success") {
			$data['api_hasil'] = $hasil->data;
			$data['api_log_data'] = $hasil->logData;
		}

		$data['header'] = "Form Sistem Penyampaian Informasi Nasabah Asing";

		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('sipina/form_report_edit', $data);
	}

	public function ajax_edit()
	{
		$id = $this->input->post('id');
		$kd_identitas = $this->input->post('kd_identitas');
		$no_cif = $this->input->post('no_cif');
		$no_rekening = $this->input->post('no_rekening');
		$stts_rekening = $this->input->post('stts_rekening');
		$kategori_usaha = $this->input->post('kategori_usaha');
		$kd_negara = $this->input->post('kd_negara');
		$kebangsaan = $this->input->post('kebangsaan');
		$kd_currency_rekening = $this->input->post('kd_currency_rekening');
		$saldo_rekening = $this->input->post('saldo_rekening');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$npwp = $this->input->post('npwp');
		$tin_country = $this->input->post('tin_country');
		$jenis_no_identitas_pajak = $this->input->post('jenis_no_identitas_pajak');
		$nama_depan_pemegang_rek = $this->input->post('nama_depan_pemegang_rek');
		$nama_tengah_pemegang_rek = $this->input->post('nama_tengah_pemegang_rek');
		$nama_belakang_pemegang_rek = $this->input->post('nama_belakang_pemegang_rek');
		$kd_alamat = $this->input->post('kd_alamat');
		$kd_negara_pemegang_rek = $this->input->post('kd_negara_pemegang_rek');
		$alamat_asal = $this->input->post('alamat_asal');
		$sumber_pemasukan = $this->input->post('sumber_pemasukan');
		$kd_mata_uang_rek_pemegang = $this->input->post('kd_mata_uang_rek_pemegang');
		$jml_penghasilan = $this->input->post('jml_penghasilan');
		$alasan_edit = $this->input->post('alasan_edit');

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/sipina/' . $id,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'PUT',
			CURLOPT_POSTFIELDS => 'kd_identitas=' . $kd_identitas . '&no_cif=' . $no_cif . '&no_rekening=' . $no_rekening . '&stts_rekening=' . $stts_rekening . '&kategori_usaha=' . $kategori_usaha . '&kd_negara=' . $kd_negara . '&kebangsaan=' . $kebangsaan . '&kd_currency_rekening=' . $kd_currency_rekening . '&saldo_rekening=' . $saldo_rekening . '&npwp=' . $npwp . '&tin_country=' . $tin_country . '&jenis_no_identitas_pajak=' . $jenis_no_identitas_pajak . '&nama_depan_pemegang_rek=' . $nama_depan_pemegang_rek . '&nama_tengah_pemegang_rek=' . $nama_tengah_pemegang_rek . '&nama_belakang_pemegang_rek=' . $nama_belakang_pemegang_rek . '&kd_alamat=' . $kd_alamat . '&kd_negara_pemegang_rek=' . $kd_negara_pemegang_rek . '&alamat_asal=' . $alamat_asal . '&kd_mata_uang_rek_pemegang=' . $kd_mata_uang_rek_pemegang . '&jml_penghasilan=' . $jml_penghasilan . '&alasan=' . $alasan_edit,
			CURLOPT_HTTPHEADER => array(
				'Content-Type: application/x-www-form-urlencoded',
				'Authorization: Bearer ' . $this->session->access_token
			),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		$hasil = json_decode($response);

		if ($hasil->message == "success") {
			$data['api_hasil'] = $hasil->data;
			echo json_encode(array("status" => TRUE, "data" => $data));
		}
	}
}
