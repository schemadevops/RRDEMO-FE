<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Obox extends CI_Controller
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
		$this->load->view('obox/report_proces');
	}

	public function form_report()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('obox/form_report');
	}

	public function backup_restore()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('obox/backup_restore');
	}

	public function form_report_isi_cr006()
	{
		$tgl_seacrh = $this->session->tgl_periode;

		if ($tgl_seacrh != "") {
			$curl = curl_init();

			curl_setopt_array($curl, array(
				CURLOPT_URL => 'http://141.136.47.149:3003/obox/formcr006/getbydate',
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
				CURLOPT_URL => 'http://141.136.47.149:3003/obox/formcr006',
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
			'kode_form'		=> 'A01',
			'nama_form'		=> 'Form CR006 - Debitur Baru Plafon Terbesar'
		);
		$this->session->set_userdata($newdata);

		$data['header'] = "OBOX - Form CR006 - Debitur Baru Plafon Terbesar";
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('obox/form_report_isi_cr006', $data);
	}

	public function form_report_edit_cr006($id)
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/obox/formcr006/' . $id,
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
		$data['header'] = "OBOX - Form CR006 - Debitur Baru Plafon Terbesar";
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('obox/form_report_edit_cr006', $data);
	}

	public function ajax_edit_cr006()
	{
		$id_cr006 = $this->input->post('id_cr006');
		$sandi_kantor = $this->input->post('sandi_kantor');
		$cif = $this->input->post('cif');
		$nama_debitur = $this->input->post('nama_debitur');
		$no_identitas = $this->input->post('no_identitas');
		$kd_kelompok_kredit = $this->input->post('kd_kelompok_kredit');
		$no_rekening = $this->input->post('no_rekening');
		$jenis_kredit = $this->input->post('jenis_kredit');
		$tgl_mulai = $this->input->post('tgl_mulai');
		$tgl_jatuh_tempo = $this->input->post('tgl_jatuh_tempo');
		$jenis_debitur = $this->input->post('jenis_debitur');
		$sektor_ekonomi = $this->input->post('sektor_ekonomi');
		$ketegori_usaha = $this->input->post('ketegori_usaha');
		$persen_suku_bunga = $this->input->post('persen_suku_bunga');
		$perhitungan_suku_bunga = $this->input->post('perhitungan_suku_bunga');
		$plafon_awal = $this->input->post('plafon_awal');
		$plafon_efektif = $this->input->post('plafon_efektif');
		$baki_debet = $this->input->post('baki_debet');
		$jenis_agunan = $this->input->post('jenis_agunan');
		$nilai_agunan = $this->input->post('nilai_agunan');

		$alasan_edit = $this->input->post('alasan_edit');

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/obox/formcr006/' . $id_cr006,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'PUT',
			CURLOPT_POSTFIELDS => 'sandi_kantor=' . $sandi_kantor . '&nama_debitur=' . $nama_debitur . '&cif=' . $cif . '&no_identitas=' . $no_identitas . '&kd_kelompok_kredit=' . $kd_kelompok_kredit . '&no_rekening=' . $no_rekening . '&jenis_kredit=' . $jenis_kredit . '&tgl_mulai=' . $tgl_mulai . '&tgl_jatuh_tempo=' . $tgl_jatuh_tempo . '&jenis_debitur=' . $jenis_debitur . '&sektor_ekonomi=' . $sektor_ekonomi . '&ketegori_usaha=' . $ketegori_usaha . '&persen_suku_bunga=' . $persen_suku_bunga . '&perhitungan_suku_bunga=' . $perhitungan_suku_bunga . '&plafon_awal=' . $plafon_awal . '&plafon_efektif=' . $plafon_efektif . '&baki_debet=' . $baki_debet . '&jenis_agunan=' . $jenis_agunan . '&nilai_agunan=' . $nilai_agunan . '&alasan=' . $alasan_edit,
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





	public function form_report_isi_cr007()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('obox/form_report_isi_cr007');
	}
	public function form_report_isi_cr008()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('obox/form_report_isi_cr008');
	}
	public function form_report_isi_cr009()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('obox/form_report_isi_cr009');
	}
	public function form_report_isi_lq003()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('obox/form_report_isi_lq003');
	}
	public function form_report_isi_lq004()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('obox/form_report_isi_lq004');
	}
	public function form_report_isi_lq005()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('obox/form_report_isi_lq005');
	}
	public function form_report_isi_lq006()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('obox/form_report_isi_lq006');
	}
	public function form_report_isi_op001()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('obox/form_report_isi_op001');
	}
	public function form_report_isi_op002()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('obox/form_report_isi_op002');
	}
	public function form_report_isi_op003()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('obox/form_report_isi_op003');
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


	public function exportDataToTxt()
	{
		$hasil = $this->session->data_export_txt;
		if ($hasil) {

			$y = date('Y');
			$m = date('m');
			$date = date('d-m-Y');
			$kode_form = $this->session->kode_form;
			$nama_form = $this->session->nama_form;
			// Create a custom header (modify as per your requirement)
			$customHeader = "H|0103|601044|" . $y . "|" . $date . "|" . $kode_form . "|11112|11112\n";

			// Convert data to a tab-separated text format
			$txtData = '';
			foreach ($hasil as $row) {
				unset($row->createdAt);
				unset($row->updatedAt);
				$txtData .= "D01|" . implode("|", (array)$row) . "\n";
			}

			// Set the headers for file download
			header("Content-type: application/octet-stream");
			header("Content-Disposition: attachment; filename=OBOX - " . $nama_form . ".txt");

			// Output the data to the response
			echo $customHeader . $txtData;
		}
	}
}
