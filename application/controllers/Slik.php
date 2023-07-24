<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slik extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function report_proces()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('slik/report_proces');
	}

	public function form_report()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('slik/form_report');
	}

	public function backup_restore()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('slik/backup_restore');
	}


	public function form_report_isi_a01()
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/slik/forma01',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
			CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MiwibmFtZSI6ImppbXkiLCJ1c2VybmFtZSI6ImplbXMiLCJlbWFpbCI6ImppbXlAZ21haWwuY29tIiwiaWF0IjoxNjg5ODYyOTk3fQ.g2Fqa2U2RhaI2yJTSDVZFNtt33YBmNmaOux4G477lSU'
			),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		$hasil = json_decode($response);
		if ($hasil->message == "success") {
			$data['api_hasil'] = $hasil->data;
		}
		$data['header'] = "SLIK - Form A01 Collateral Data";

		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('slik/form_report_isi_a01', $data);
	}
	public function form_report_isi_f01()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('slik/form_report_isi_f01');
	}
	public function form_report_isi_d01()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('slik/form_report_isi_d01');
	}
	public function form_report_isi_d02()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('slik/form_report_isi_d02');
	}
	public function form_report_isi_k01()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('slik/form_report_isi_k01');
	}
	public function form_report_isi_m01()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('slik/form_report_isi_m01');
	}

	public function form_report_edit_a01($id)
	{
		$this->load->library('session');

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/slik/forma01/' . $id,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
			CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MiwibmFtZSI6ImppbXkiLCJ1c2VybmFtZSI6ImplbXMiLCJlbWFpbCI6ImppbXlAZ21haWwuY29tIiwiaWF0IjoxNjg5ODYyOTk3fQ.g2Fqa2U2RhaI2yJTSDVZFNtt33YBmNmaOux4G477lSU'
			),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		$hasil = json_decode($response);
		if ($hasil->message == "success") {
			$data['api_hasil'] = $hasil->data;
			$data['api_log_data'] = $hasil->logData;
			$newdata = array(
				'tabel'  => $hasil->logData,
			);

			$this->session->set_userdata($newdata);
		}
		$data['judul'] = "SLIK - Form A01 Collateral Data";
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('slik/form_report_edit_a01', $data);
	}

	public function ajax_edit_a01()
	{
		$id = $this->input->post('id_a01');
		$flag_detail = $this->input->post('flag_detail');
		$register_agunan = $this->input->post('register_agunan');
		$rekening = $this->input->post('rekening');
		$cif = $this->input->post('cif');
		$segment_fasilitas = $this->input->post('segment_fasilitas');
		$stts_agunan = $this->input->post('stts_agunan');
		$jenis_agunan = $this->input->post('jenis_agunan');
		$peringkat = $this->input->post('peringkat');
		$pemeringkat = $this->input->post('pemeringkat');
		$jenis_ikat = $this->input->post('jenis_ikat');
		$tgl_ikat = $this->input->post('tgl_ikat');
		$pemilik_agunan = $this->input->post('pemilik_agunan');
		$bukti_milik = $this->input->post('bukti_milik');
		$alamat_agunan = $this->input->post('alamat_agunan');
		$data_agunan = $this->input->post('data_agunan');
		$nilai_agunan_njop = $this->input->post('nilai_agunan_njop');
		$nilai_agunan_bank = $this->input->post('nilai_agunan_bank');
		$tgl_penilaian_bank = $this->input->post('tgl_penilaian_bank');
		$nilai_agunan = $this->input->post('nilai_agunan');
		$nama_penilai = $this->input->post('nama_penilai');
		$tgl_penilai = $this->input->post('tgl_penilai');
		$stts_paripasu = $this->input->post('stts_paripasu');
		$paripasu = $this->input->post('paripasu');
		$stts_kredit_join = $this->input->post('stts_kredit_join');
		$asuransi = $this->input->post('asuransi');
		$keterangan = $this->input->post('keterangan');
		$cabang = $this->input->post('cabang');
		$operation_stastus = $this->input->post('operation_stastus');
		$alasan_edit = $this->input->post('alasan_edit');

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/slik/forma01/' . $id,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'PUT',
			CURLOPT_POSTFIELDS => 'flag_detail=' . $flag_detail . '&register_agunan=' . $register_agunan . '&rekening=' . $rekening . '&cif=' . $cif . '&segment_fasilitas=' . $segment_fasilitas . '&stts_agunan=' . $stts_agunan . '&jenis_agunan=' . $jenis_agunan . '&peringkat=' . $peringkat . '&pemeringkat=' . $pemeringkat . '&jenis_ikat=' . $jenis_ikat . '&tgl_ikat=' . $tgl_ikat . '&pemilik_agunan=' . $pemilik_agunan . '&bukti_milik=' . $bukti_milik . '&alamat_agunan=' . $alamat_agunan . '&data_agunan=' . $data_agunan . '&nilai_agunan_njop=' . $nilai_agunan_njop . '&nilai_agunan_bank=' . $nilai_agunan_bank . '&tgl_penilaian_bank=' . $tgl_penilaian_bank . '&nilai_agunan=' . $nilai_agunan . '&nama_penilai=' . $nama_penilai . '&tgl_penilai=' . $tgl_penilai . '&stts_paripasu=' . $stts_paripasu . '&paripasu=' . $paripasu . '&stts_kredit_join=' . $stts_kredit_join . '&asuransi=' . $asuransi . '&keterangan=' . $keterangan . '&cabang=' . $cabang . '&operation_stastus=' . $operation_stastus . '&alasan=' . $alasan_edit,
			CURLOPT_HTTPHEADER => array(
				'Content-Type: application/x-www-form-urlencoded',
				'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOjEsIm5hbWVVc2VyIjoiamlteSIsInVzZXJuYW1lVXNlciI6ImppbXkiLCJlbWFpbFVzZXIiOiJqaW15QGdtYWlsLmNvbSIsImlhdCI6MTY5MDE5MjE3NX0.Hic1DiLc6ll7m7iu2yzZXgpDs4NrTiEXe4MKQ3_-gs4'
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

	public function tabel_log_a01()
	{
		$tabel = $this->session->tabel;
		$data['api_tabel_log'] = $tabel;
		$no = 0;
		$html = array();
		foreach ($tabel as $key) {
			$no++;
			$html = "
			<tr>
				<td>" . $no . "</td>
				<td>" . $key->createdAt . "</td>
				<td>
				";
			foreach ($key->field->fieldLog as $row) {
				$html .= $row->field . "</td><td>";
			};
			foreach ($key->val_before->editBefore as $bf) {
				$bff = (array)$bf;
				$bfff = implode(" ", $bff);
				$html .= $bfff . "</td><td>";
			};

			$html .= "</tr>";
		};
		$data['html'] = $html;
		echo json_encode(array("status" => TRUE, "data" => $data));
	}
}
