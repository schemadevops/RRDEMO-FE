<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slik extends CI_Controller
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
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/form/slik',
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

		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('slik/report_proces', $data);
	}

	public function form_report()
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/form/slik',
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

		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('slik/form_report', $data);
	}

	public function backup_restore()
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/form/slik',
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

		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('slik/backup_restore', $data);
	}


	public function form_report_isi_a01()
	{
		$tgl_seacrh = $this->session->tgl_periode;

		if ($tgl_seacrh != "") {
			$curl = curl_init();

			curl_setopt_array($curl, array(
				CURLOPT_URL => 'http://141.136.47.149:3003/slik/forma01/getbydate',
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
				CURLOPT_URL => 'http://141.136.47.149:3003/slik/forma01',
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
			'nama_form'		=> 'Form A01 Collateral Data'
		);
		$this->session->set_userdata($newdata);

		$data['header'] = "SLIK - Form A01 Collateral Data";

		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('slik/form_report_isi_a01', $data);
	}
	public function form_report_isi_f01()
	{
		$tgl_seacrh = $this->session->tgl_periode;

		if ($tgl_seacrh != "") {
			$curl = curl_init();

			curl_setopt_array($curl, array(
				CURLOPT_URL => 'http://141.136.47.149:3003/slik/formf01/getbydate',
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
				CURLOPT_URL => 'http://141.136.47.149:3003/slik/formf01',
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
			'kode_form'		=> 'F01',
			'nama_form'		=> 'Form F01 Loan Data'
		);
		$this->session->set_userdata($newdata);

		$data['header'] = "SLIK - Form F01 Loan Data";

		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('slik/form_report_isi_f01', $data);
	}

	public function form_report_isi_d01()
	{
		$tgl_seacrh = $this->session->tgl_periode;

		if ($tgl_seacrh != "") {
			$curl = curl_init();

			curl_setopt_array($curl, array(
				CURLOPT_URL => 'http://141.136.47.149:3003/slik/formd01/getbydate',
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
				CURLOPT_URL => 'http://141.136.47.149:3003/slik/formd01',
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
			'kode_form'		=> 'D01',
			'nama_form'		=> 'Form D01 Individual Customer Data'
		);
		$this->session->set_userdata($newdata);
		$data['header'] = "SLIK - Form D01 Individual Customer Data";

		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('slik/form_report_isi_d01', $data);
	}
	public function form_report_isi_d02()
	{
		$tgl_seacrh = $this->session->tgl_periode;

		if ($tgl_seacrh != "") {
			$curl = curl_init();

			curl_setopt_array($curl, array(
				CURLOPT_URL => 'http://141.136.47.149:3003/slik/formd02/getbydate',
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
				CURLOPT_URL => 'http://141.136.47.149:3003/slik/formd02',
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
			'kode_form'		=> 'D02',
			'nama_form'		=> 'Form D02 Non Individual Customer Data'
		);
		$this->session->set_userdata($newdata);
		$data['header'] = "SLIK - Form D02 Non Individual Customer Data";

		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('slik/form_report_isi_d02', $data);
	}
	public function form_report_isi_k01()
	{
		$tgl_seacrh = $this->session->tgl_periode;

		if ($tgl_seacrh != "") {
			$curl = curl_init();

			curl_setopt_array($curl, array(
				CURLOPT_URL => 'http://141.136.47.149:3003/slik/formk01/getbydate',
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
				CURLOPT_URL => 'http://141.136.47.149:3003/slik/formk01',
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
			'kode_form'		=> 'K01',
			'nama_form'		=> 'Form K01 Non Individual Customers Financial Report Data'
		);
		$this->session->set_userdata($newdata);
		$data['header'] = "SLIK - Form K01 Non Individual Customer's Financial Report Data";

		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('slik/form_report_isi_k01', $data);
	}
	public function form_report_isi_m01()
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/slik/formm01',
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
		$data['header'] = "SLIK - Form M01 Key Management Data (non Individual Customer)";


		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('slik/form_report_isi_m01', $data);
	}

	public function form_report_edit_a01($id)
	{
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
		$data['judul'] = "SLIK - Form A01 Collateral Data";
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('slik/form_report_edit_a01', $data);
	}

	public function form_report_edit_f01($id)
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/slik/formf01/' . $id,
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
		$data['judul'] = "SLIK - Form F01 Loan Data";
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('slik/form_report_edit_f01', $data);
	}

	public function form_report_edit_d01($id)
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/slik/formd01/' . $id,
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
		$data['judul'] = "SLIK - Form D01 Individual Customer Data";
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('slik/form_report_edit_d01', $data);
	}

	public function form_report_edit_d02($id)
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/slik/formd02/' . $id,
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
		$data['judul'] = "SLIK - Form D02 Non Individual Customer Data";
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('slik/form_report_edit_d02', $data);
	}

	public function form_report_edit_k01($id)
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/slik/formk01/' . $id,
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
		$data['judul'] = "SLIK - Form K01 Non Individual Customer's Financial Report Data";

		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('slik/form_report_edit_k01', $data);
	}

	public function form_report_edit_m01($id)
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/slik/formm01/' . $id,
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
		$data['judul'] = "SLIK - Form M01 Key Management Data (non Individual Customer)";

		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('slik/form_report_edit_m01', $data);
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

	public function ajax_edit_f01()
	{
		$id = $this->input->post('id_f01');
		$flag_detail = $this->input->post('flag_detail');
		$no_rekening = $this->input->post('no_rekening');
		$cif = $this->input->post('cif');
		$sifat = $this->input->post('sifat');
		$jenis_kredit = $this->input->post('jenis_kredit');
		$skim = $this->input->post('skim');
		$no_pk_awal = $this->input->post('no_pk_awal');
		$tgl_pk_awal = $this->input->post('tgl_pk_awal');
		$no_pk_akhir = $this->input->post('no_pk_akhir');
		$tgl_pk_akhir = $this->input->post('tgl_pk_akhir');
		$baru_panjang = $this->input->post('baru_panjang');
		$tgl_awal_kredit = $this->input->post('tgl_awal_kredit');
		$tgl_mulai = $this->input->post('tgl_mulai');
		$tgl_jatuh_tempo = $this->input->post('tgl_jatuh_tempo');
		$kategory = $this->input->post('kategory');
		$jenis_pengguna = $this->input->post('jenis_pengguna');
		$orientasi = $this->input->post('orientasi');
		$sektor_ekonomi = $this->input->post('sektor_ekonomi');
		$dati = $this->input->post('dati');
		$nilai_proyek = $this->input->post('nilai_proyek');
		$mata_uang = $this->input->post('mata_uang');
		$suku_bunga = $this->input->post('suku_bunga');
		$sifat_suku_bunga = $this->input->post('sifat_suku_bunga');
		$kredit_pemerintah = $this->input->post('kredit_pemerintah');
		$takeover = $this->input->post('takeover');
		$sumber_dana = $this->input->post('sumber_dana');
		$plafon_awal = $this->input->post('plafon_awal');
		$plafon = $this->input->post('plafon');
		$realisasi = $this->input->post('realisasi');
		$denda = $this->input->post('denda');
		$baki_debet = $this->input->post('baki_debet');
		$orginal_amount = $this->input->post('orginal_amount');
		$kolektibilitas = $this->input->post('kolektibilitas');
		$tgl_macet = $this->input->post('tgl_macet');
		$sebab_macet = $this->input->post('sebab_macet');
		$tunggak_pokok = $this->input->post('tunggak_pokok');
		$tunggak_bunga = $this->input->post('tunggak_bunga');
		$frekuensi_tunggak = $this->input->post('frekuensi_tunggak');
		$frekuensi_restruktur = $this->input->post('frekuensi_restruktur');
		$tgl_restruktur = $this->input->post('tgl_restruktur');
		$tgl_restruktur_akhir = $this->input->post('tgl_restruktur_akhir');
		$kd_cara_restruktur = $this->input->post('kd_cara_restruktur');
		$kondisi = $this->input->post('kondisi');
		$tgl_kondisi = $this->input->post('tgl_kondisi');
		$keterangan = $this->input->post('keterangan');
		$cabang = $this->input->post('cabang');
		$stts_operasi = $this->input->post('stts_operasi');
		$alasan_edit = $this->input->post('alasan_edit');
		$jml_hari_tunggak = $this->input->post('jml_hari_tunggak');

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/slik/formf01/' . $id,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'PUT',
			CURLOPT_POSTFIELDS => 'flag_detail=' . $flag_detail . '&no_rekening=' . $no_rekening . '&cif=' . $cif . '&sifat=' . $sifat . '&jenis_kredit=' . $jenis_kredit . '&skim=' . $skim . '&no_pk_awal=' . $no_pk_awal . '&tgl_pk_awal=' . $tgl_pk_awal . '&no_pk_akhir=' . $no_pk_akhir . '&tgl_pk_akhir=' . $tgl_pk_akhir . '&baru_panjang=' . $baru_panjang . '&tgl_awal_kredit=' . $tgl_awal_kredit . '&tgl_mulai=' . $tgl_mulai . '&tgl_jatuh_tempo=' . $tgl_jatuh_tempo . '&kategory=' . $kategory . '&jenis_pengguna=' . $jenis_pengguna . '&orientasi=' . $orientasi . '&sektor_ekonomi=' . $sektor_ekonomi . '&dati=' . $dati . '&nilai_proyek=' . $nilai_proyek . '&mata_uang=' . $mata_uang . '&suku_bunga=' . $suku_bunga . '&sifat_suku_bunga=' . $sifat_suku_bunga . '&kredit_pemerintah=' . $kredit_pemerintah . '&takeover=' . $takeover . '&sumber_dana=' . $sumber_dana . '&plafon_awal=' . $plafon_awal . '&plafon=' . $plafon . '&realisasi=' . $realisasi . '&denda=' . $denda . '&baki_debet=' . $baki_debet . '&orginal_amount=' . $orginal_amount . '&kolektibilitas=' . $kolektibilitas . '&tgl_macet=' . $tgl_macet . '&sebab_macet=' . $sebab_macet . '&tunggak_pokok=' . $tunggak_pokok . '&tunggak_bunga=' . $tunggak_bunga . '&frekuensi_tunggak=' . $frekuensi_tunggak . '&frekuensi_restruktur=' . $frekuensi_restruktur . '&tgl_restruktur=' . $tgl_restruktur . '&tgl_restruktur_akhir=' . $tgl_restruktur . '&kd_cara_restruktur=' . $kd_cara_restruktur . '&kondisi=' . $kondisi . '&tgl_kondisi=' . $tgl_kondisi . '&keterangan=' . $keterangan . '&cabang=' . $cabang . '&stts_operasi=' . $stts_operasi . '&alasan=' . $alasan_edit . '&jml_hari_tunggak=' . $jml_hari_tunggak,
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

	public function ajax_edit_d01()
	{
		$id = $this->input->post('id_d01');
		$flag_detail = $this->input->post('flag_detail');
		$cif = $this->input->post('cif');
		$jenis_identitas = $this->input->post('jenis_identitas');
		$no_passport = $this->input->post('no_passport');
		$nm_identitas = $this->input->post('nm_identitas');
		$nm_lengkap = $this->input->post('nm_lengkap');
		$stts_debitur = $this->input->post('stts_debitur');
		$kelamin = $this->input->post('kelamin');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$no_npwp = $this->input->post('no_npwp');
		$alamat = $this->input->post('alamat');
		$kelurahan = $this->input->post('kelurahan');
		$kecamatan = $this->input->post('kecamatan');
		$dati = $this->input->post('dati');
		$kode_pos = $this->input->post('kode_pos');
		$telp = $this->input->post('telp');
		$no_hp = $this->input->post('no_hp');
		$email = $this->input->post('email');
		$kd_negara = $this->input->post('kd_negara');
		$pekerjaan = $this->input->post('pekerjaan');
		$tempat_kerja = $this->input->post('tempat_kerja');
		$bidang_usaha = $this->input->post('bidang_usaha');
		$alamat_kerja = $this->input->post('alamat_kerja');
		$penghasilan = $this->input->post('penghasilan');
		$kd_sumber = $this->input->post('kd_sumber');
		$jml_tanggungan = $this->input->post('jml_tanggungan');
		$hub_ljk = $this->input->post('hub_ljk');
		$gol_debitur = $this->input->post('gol_debitur');
		$stts_kawin = $this->input->post('stts_kawin');
		$no_passport_pasangan = $this->input->post('no_passport_pasangan');
		$nm_pasangan = $this->input->post('nm_pasangan');
		$tgl_lahir_pasangan = $this->input->post('tgl_lahir_pasangan');
		$pisah_harta = $this->input->post('pisah_harta');
		$langgar_bmpk = $this->input->post('langgar_bmpk');
		$lampau_bmpk = $this->input->post('lampau_bmpk');
		$ibu_kandung = $this->input->post('ibu_kandung');
		$cabang = $this->input->post('cabang');
		$operation = $this->input->post('operation');
		$alasan_edit = $this->input->post('alasan_edit');


		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/slik/formd01/' . $id,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'PUT',
			CURLOPT_POSTFIELDS => 'flag_detail=' . $flag_detail . '&cif=' . $cif . '&jenis_identitas=' . $jenis_identitas . '&no_passport=' . $no_passport . '&nm_identitas=' . $nm_identitas . '&nm_lengkap=' . $nm_lengkap . '&stts_debitur=' . $stts_debitur . '&kelamin=' . $kelamin . '&tempat_lahir=' . $tempat_lahir . '&tgl_lahir=' . $tgl_lahir . '&no_npwp=' . $no_npwp . '&alamat=' . $alamat . '&kelurahan=' . $kelurahan . '&kecamatan=' . $kecamatan . '&dati=' . $dati . '&kode_pos=' . $kode_pos . '&telp=' . $telp . '&no_hp=' . $no_hp . '&email=' . $email . '&kd_negara=' . $kd_negara . '&pekerjaan=' . $pekerjaan . '&tempat_kerja=' . $tempat_kerja . '&bidang_usaha=' . $bidang_usaha . '&alamat_kerja=' . $alamat_kerja . '&penghasilan=' . $penghasilan . '&kd_sumber=' . $kd_sumber . '&jml_tanggungan=' . $jml_tanggungan . '&hub_ljk=' . $hub_ljk . '&gol_debitur=' . $gol_debitur . '&stts_kawin=' . $stts_kawin . '&no_passport_pasangan=' . $no_passport_pasangan . '&nm_pasangan=' . $nm_pasangan . '&tgl_lahir_pasangan=' . $tgl_lahir_pasangan . '&pisah_harta=' . $pisah_harta . '&langgar_bmpk=' . $langgar_bmpk . '&lampau_bmpk=' . $lampau_bmpk . '&ibu_kandung=' . $ibu_kandung . '&cabang=' . $cabang . '&operation=' . $operation . '&alasan=' . $alasan_edit,
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

	public function ajax_edit_d02()
	{
		$id = $this->input->post('id_d02');
		$flag_detail = $this->input->post('flag_detail');
		$cif = $this->input->post('cif');
		$id_bdn_usaha = $this->input->post('id_bdn_usaha');
		$nm_bdn_usaha = $this->input->post('nm_bdn_usaha');
		$jenis_bdn_usaha = $this->input->post('jenis_bdn_usaha');
		$tempat_pendirian = $this->input->post('tempat_pendirian');
		$no_akte_awal = $this->input->post('no_akte_awal');
		$tgl_akte_awal = $this->input->post('tgl_akte_awal');
		$no_akte_akhir = $this->input->post('no_akte_akhir');
		$tgl_akte_akhir = $this->input->post('tgl_akte_akhir');
		$telp = $this->input->post('telp');
		$no_hp = $this->input->post('no_hp');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$kelurahan = $this->input->post('kelurahan');
		$kecamatan = $this->input->post('kecamatan');
		$dati = $this->input->post('dati');
		$kode_pos = $this->input->post('kode_pos');
		$kd_negara = $this->input->post('kd_negara');
		$kd_bidang_usaha = $this->input->post('kd_bidang_usaha');
		$hub_ljk = $this->input->post('hub_ljk');
		$langgar_bmpk = $this->input->post('langgar_bmpk');
		$lampau_bmpk = $this->input->post('lampau_bmpk');
		$go_public = $this->input->post('go_public');
		$gol_debitur = $this->input->post('gol_debitur');
		$peringkat = $this->input->post('peringkat');
		$pemeringkat = $this->input->post('pemeringkat');
		$tgl_pemeringkat = $this->input->post('tgl_pemeringkat');
		$group_debitur = $this->input->post('group_debitur');
		$cabang = $this->input->post('cabang');
		$operation = $this->input->post('operation');
		$alasan_edit = $this->input->post('alasan_edit');


		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/slik/formd02/' . $id,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'PUT',
			CURLOPT_POSTFIELDS => 'flag_detail=' . $flag_detail . '&cif=' . $cif . '&id_bdn_usaha=' . $id_bdn_usaha . '&nm_bdn_usaha=' . $nm_bdn_usaha . '&jenis_bdn_usaha=' . $jenis_bdn_usaha . '&tempat_pendirian=' . $tempat_pendirian . '&no_akte_awal=' . $no_akte_awal . '&tgl_akte_awal=' . $tgl_akte_awal . '&no_akte_akhir=' . $no_akte_akhir . '&tgl_akte_akhir=' . $tgl_akte_akhir . '&telp=' . $telp . '&no_hp=' . $no_hp . '&email=' . $email . '&alamat=' . $alamat . '&kelurahan=' . $kelurahan . '&kecamatan=' . $kecamatan . '&dati=' . $dati . '&kd_pos=' . $kode_pos . '&kd_negara=' . $kd_negara . '&kd_bidang_usaha=' . $kd_bidang_usaha . '&hub_ljk=' . $hub_ljk . '&langgar_bmpk=' . $langgar_bmpk . '&lampu_bmpk=' . $lampau_bmpk . '&go_public=' . $go_public . '&gol_debitur=' . $gol_debitur . '&peringkat=' . $peringkat . '&pemeringkat=' . $pemeringkat . '&tgl_pemeringkat=' . $tgl_pemeringkat . '&group_debitur=' . $group_debitur . '&cabang=' . $cabang . '&operation=' . $operation . '&alasan=' . $alasan_edit,
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

	public function ajax_edit_k01()
	{
		$id = $this->input->post('id_k01');
		$flag_detail = $this->input->post('flag_detail');
		$cif = $this->input->post('cif');
		$periode_laporan = $this->input->post('periode_laporan');
		$aset = $this->input->post('aset');
		$aset_lancar = $this->input->post('aset_lancar');
		$aset_kas = $this->input->post('aset_kas');
		$aset_biaya = $this->input->post('aset_biaya');
		$aset_investasi = $this->input->post('aset_investasi');
		$aset_lain = $this->input->post('aset_lain');
		$aset_tidak_lancar = $this->input->post('aset_tidak_lancar');
		$aset_biaya_tidak_lancar = $this->input->post('aset_biaya_tidak_lancar');
		$aset_inves_tidak_lancar = $this->input->post('aset_inves_tidak_lancar');
		$aset_lain_tidak_lancar = $this->input->post('aset_lain_tidak_lancar');
		$liabilitas = $this->input->post('liabilitas');
		$liabilitas_jk_pendek = $this->input->post('liabilitas_jk_pendek');
		$pinjaman_jk_pendek = $this->input->post('pinjaman_jk_pendek');
		$utang_usaha_jk_pendek = $this->input->post('utang_usaha_jk_pendek');
		$liabilitas_lain_jk_pendek = $this->input->post('liabilitas_lain_jk_pendek');
		$liabilitas_jk_panjang = $this->input->post('liabilitas_jk_panjang');
		$pinjaman_jk_panjang = $this->input->post('pinjaman_jk_panjang');
		$utang_usaha_jk_panjang = $this->input->post('utang_usaha_jk_panjang');
		$liabilitas_lain_jk_panjang = $this->input->post('liabilitas_lain_jk_panjang');
		$ekuitas = $this->input->post('ekuitas');
		$pendapatan_ops = $this->input->post('pendapatan_ops');
		$pendapatan_pk_ops = $this->input->post('pendapatan_pk_ops');
		$biaya_ops = $this->input->post('biaya_ops');
		$pendapatan_nonops = $this->input->post('pendapatan_nonops');
		$biaya_nonops = $this->input->post('biaya_nonops');
		$laba_rugi_sbl_pajak = $this->input->post('laba_rugi_sbl_pajak');
		$laba_rugi_jalan = $this->input->post('laba_rugi_jalan');
		$cabang = $this->input->post('cabang');
		$operation = $this->input->post('operation');
		$alasan_edit = $this->input->post('alasan_edit');

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/slik/formk01/' . $id,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'PUT',
			CURLOPT_POSTFIELDS => 'flag_detail=' . $flag_detail . '&cif=' . $cif . '&periode_laporan=' . $periode_laporan . '&aset=' . $aset . '&aset_lancar=' . $aset_lancar . '&aset_kas=' . $aset_kas . '&aset_biaya=' . $aset_biaya . '&aset_investasi=' . $aset_investasi . '&aset_lain=' . $aset_lain . '&aset_tidak_lancar=' . $aset_tidak_lancar . '&aset_biaya_tidak_lancar=' . $aset_biaya_tidak_lancar . '&aset_inves_tidak_lancar=' . $aset_inves_tidak_lancar . '&aset_lain_tidak_lancar=' . $aset_lain_tidak_lancar . '&liabilitas=' . $liabilitas . '&liabilitas_jk_pendek=' . $liabilitas_jk_pendek . '&pinjaman_jk_pendek=' . $pinjaman_jk_pendek . '&utang_usaha_jk_pendek=' . $utang_usaha_jk_pendek . '&liabilitas_lain_jk_pendek=' . $liabilitas_lain_jk_pendek . '&liabilitas_jk_panjang=' . $liabilitas_jk_panjang . '&pinjaman_jk_panjang=' . $pinjaman_jk_panjang . '&utang_usaha_jk_panjang=' . $utang_usaha_jk_panjang . '&liabilitias_lain_jk_panjang=' . $liabilitas_lain_jk_panjang . '&ekuitas=' . $ekuitas . '&pendapatan_ops=' . $pendapatan_ops . '&pendapatan_pk_ops=' . $pendapatan_pk_ops . '&biaya_ops=' . $biaya_ops . '&pendapatan_nonops=' . $pendapatan_nonops . '&laba_rugi_sbl_pajak=' . $laba_rugi_sbl_pajak . '&laba_rugi_jalan=' . $laba_rugi_jalan . '&cabang=' . $cabang . '&operation=' . $operation . '&alasan=' . $alasan_edit . '&biaya_nonops=' . $biaya_nonops,
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

	public function ajax_edit_m01()
	{
		$id = $this->input->post('id_m01');
		$flag_detail = $this->input->post('flag_detail');
		$no_identitas = $this->input->post('no_identitas');
		$cif = $this->input->post('cif');
		$jenis_identitas = $this->input->post('jenis_identitas');
		$nm_pengurus = $this->input->post('nm_pengurus');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$alamat = $this->input->post('alamat');
		$kelurahan = $this->input->post('kelurahan');
		$kecamatan = $this->input->post('kecamatan');
		$dati = $this->input->post('dati');
		$kd_jabatan = $this->input->post('kd_jabatan');
		$pangsa_pemilik = $this->input->post('pangsa_pemilik');
		$stts_pengurus = $this->input->post('stts_pengurus');
		$cabang = $this->input->post('cabang');
		$operation = $this->input->post('operation');
		$alasan_edit = $this->input->post('alasan_edit');

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/slik/formm01/' . $id,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'PUT',
			CURLOPT_POSTFIELDS => 'flag_detail=' . $flag_detail . '&no_identitas=' . $no_identitas . '&cif=' . $cif . '&jenis_identitas=' . $jenis_identitas . '&nm_pengurus=' . $nm_pengurus . '&jenis_kelamin=' . $jenis_kelamin . '&alamat=' . $alamat . '&kelurahan=' . $kelurahan . '&kecamatan=' . $kecamatan . '&dati=' . $dati . '&kd_jabatan=' . $kd_jabatan . '&pangsa_pemilik=' . $pangsa_pemilik . '&stts_pengurus=' . $stts_pengurus . '&cabang=' . $cabang . '&operation=' . $operation . '&alasan=' . $alasan_edit,
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
				$txtData .= implode("|", (array)$row) . "\n";
			}

			// Set the headers for file download
			header("Content-type: application/octet-stream");
			header("Content-Disposition: attachment; filename=SLIK - " . $nama_form . ".txt");

			// Output the data to the response
			echo $customHeader . $txtData;
		}
	}


	public function ajax_process()
	{
		$id = $this->input->post('formid');
		$pilih_tgl = $this->input->post('date');
		$link_path = $this->input->post('link');


		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => $link_path,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => 'formId=' . $id . '&date=' . $pilih_tgl,
			CURLOPT_HTTPHEADER => array(
				'Content-Type: application/x-www-form-urlencoded',
				'Authorization: Bearer ' . $this->session->access_token
			),
		));

		$response = curl_exec($curl);

		curl_close($curl);

		$hasil = json_decode($response);

		if ($hasil->message == "succes") {
			echo json_encode(array("status" => TRUE));
		}
	}

	public function table_m01()
	{
		if ($this->input->is_ajax_request()) {
			$tgl_seacrh = $this->session->tgl_periode;

			if ($tgl_seacrh != "") {
				$curl = curl_init();

				curl_setopt_array($curl, array(
					CURLOPT_URL => 'http://141.136.47.149:3003/slik/formm01/getbydate',
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

				$api_hasil = $hasil->data;
				$this->session->unset_userdata('tgl_periode');
			} else {
				$curl = curl_init();

				curl_setopt_array($curl, array(
					CURLOPT_URL => 'http://141.136.47.149:3003/slik/formm01',
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

				$api_hasil = $hasil->data;
			}

			$list = $api_hasil;
			$data = array();
			$no   = 0;
			foreach ($list as $rowx) {
				$no++;
				$row    = array();
				$row[]  = $no;
				$row[]  = $rowx->flag_detail;
				$row[]  = $rowx->no_identitas;
				$row[]  = $rowx->cif;
				$row[]  = $rowx->jenis_identitas;
				$row[]  = $rowx->nm_pengurus;
				$row[]  = $rowx->jenis_kelamin;
				$row[]  = $rowx->alamat;
				$row[]  = $rowx->kelurahan;
				$row[]  = $rowx->kecamatan;
				$row[]  = $rowx->dati;
				$row[]  = $rowx->kd_jabatan;
				$row[]  = $rowx->pangsa_pemilik;
				$row[]  = $rowx->stts_pengurus;
				$row[]  = $rowx->cabang;
				$row[]  = $rowx->operation;
				$row[]  = date('d-m-Y', strtotime($rowx->createdAt));

				$row[]  = '<a href="' . base_url("slik/form_report_edit_m01/" . $rowx->id) . '" class="btn rounded-pill btn-primary"><i class="bx bx-edit-alt"></i> Edit
					</a>';
				$data[] = $row;
			};
			$output = array(
				"recordsTotal"    => count($api_hasil),
				"recordsFiltered" => count($api_hasil),
				"data"            => $data,
			);
			echo json_encode($output);
		} else {
			redirect("_404", "refresh");
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

	public function ajax_backup()
	{
		$start_date =  $this->input->post('start_date');
		$end_date =  $this->input->post('end_date');
		$form_report =  $this->input->post('form_report');

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/form/slik',
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
			$api_hasil = $hasil->data;

			$isi = array();
			$error = array();
			foreach ($api_hasil as $key) {

				if ($key->id == $form_report) {
					if (count($key->log_backups) == 0) {
						$error['pesan'] = "Data ini belum dapat di backup!";
					} else {
						$error['pesan'] = "-";
						$isi['value'] = $key->value;
						$isi['link_backup'] = $key->other->path_backup;
					}
				};
			}

			if ($error['pesan'] == "Data ini belum dapat di backup!") {
				echo json_encode(array("status" => false, "isi" => $error['pesan']));
			} else {
				$curl = curl_init();

				curl_setopt_array($curl, array(
					CURLOPT_URL => $isi['link_backup'],
					CURLOPT_RETURNTRANSFER => true,
					CURLOPT_ENCODING => '',
					CURLOPT_MAXREDIRS => 10,
					CURLOPT_TIMEOUT => 0,
					CURLOPT_FOLLOWLOCATION => true,
					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
					CURLOPT_CUSTOMREQUEST => 'POST',
					CURLOPT_POSTFIELDS => 'formId=' . $form_report . '&start=' . $start_date . '&end=' . $end_date . '&value_form=' . $isi['value'],
					CURLOPT_HTTPHEADER => array(
						'Content-Type: application/x-www-form-urlencoded',
						'Authorization: Bearer ' . $this->session->access_token
					),
				));

				$responsex = curl_exec($curl);

				curl_close($curl);
				$hasil_backup = json_decode($responsex);
				if ($hasil_backup->message == "success") {
					echo json_encode(array("status" => TRUE, "isi" => $isi));
				}
			}
		}
	}

	public function view_history_backup($id)
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/historybackup/' . $id,
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
			$api_hasil = $hasil->data;
			if (count($api_hasil) == 0) {
				echo json_encode(array("status" => FALSE, "isi" => $api_hasil));
			} else {
				echo json_encode(array("status" => TRUE, "isi" => $api_hasil));
			}
		}
	}

	public function detail_history_backup($id)
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/historybackup/detail/' . $id,
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
			$api_hasil = $hasil->data;

			$xloop = array();
			foreach ($api_hasil as $key) {
				array_push($xloop, $key->data->data);
			};

			echo json_encode(array("status" => TRUE, "isi" => $xloop));
		}
	}

	public function ambil_data_backup()
	{
		$id = $this->input->post('id');

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/historybackup/' . $id,
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
			$o_backup = "<option value=''> Pilih Backup </pilih>";

			// $o_backup = '';
			foreach ($hasil->data as $data) {
				$o_backup .= "<option value='$data->id'>Backup ke $data->number</option>";
			};
			echo $o_backup;
		}
	}

	public function ajax_restore()
	{
		$start_date =  $this->input->post('start_date');
		$end_date =  $this->input->post('end_date');
		$form_report =  $this->input->post('form_report');
		$backup_ke =  $this->input->post('backup_ke');

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/form/slik',
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
			$api_hasil = $hasil->data;

			$isi = array();
			$error = array();
			foreach ($api_hasil as $key) {

				if ($key->id == $form_report) {
					if (count($key->log_backups) == 0) {
						$error['pesan'] = "Data ini belum dapat di backup!";
					} else {
						$error['pesan'] = "-";
						$isi['value'] = $key->value;
						$isi['link_restore'] = $key->other->path_restore;
					}
				};
			}

			if ($error['pesan'] == "Data ini belum dapat di backup!") {
				echo json_encode(array("status" => false, "isi" => $error['pesan']));
			} else {
				$curl = curl_init();

				curl_setopt_array($curl, array(
					CURLOPT_URL => $isi['link_restore'],
					CURLOPT_RETURNTRANSFER => true,
					CURLOPT_ENCODING => '',
					CURLOPT_MAXREDIRS => 10,
					CURLOPT_TIMEOUT => 0,
					CURLOPT_FOLLOWLOCATION => true,
					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
					CURLOPT_CUSTOMREQUEST => 'POST',
					CURLOPT_POSTFIELDS => 'formId=' . $form_report . '&start=' . $start_date . '&end=' . $end_date . '&id_bu=' . $backup_ke,
					CURLOPT_HTTPHEADER => array(
						'Content-Type: application/x-www-form-urlencoded',
						'Authorization: Bearer ' . $this->session->access_token
					),
				));

				$responsex = curl_exec($curl);

				curl_close($curl);
				$hasil_backup = json_decode($responsex);
				if ($hasil_backup->message == "success") {
					echo json_encode(array("status" => TRUE, "isi" => $isi));
				}
			}
		}
	}

	public function view_history_restore($id)
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/historyrestore/' . $id,
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
			$api_hasil = $hasil->data;
			if (count($api_hasil) == 0) {
				echo json_encode(array("status" => FALSE, "isi" => $api_hasil));
			} else {
				echo json_encode(array("status" => TRUE, "isi" => $api_hasil));
			}
		}
	}

	public function detail_history_restore($id)
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/historybackup/detail/' . $id,
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
			$api_hasil = $hasil->data;

			$y = date('Y');
			$m = date('m');
			$kode_form = $id;
			$nama_form = "SLIK - Restore";
			// Create a custom header (modify as per your requirement)
			$customHeader = "H|0103|601044|" . $y . "|" . $m . "|" . $kode_form . "|11112|11112\n";

			// Convert data to a tab-separated text format
			$txtData = '';
			foreach ($api_hasil as $row) {
				$xx = $row->data->data;

				unset($xx->createdAt);
				unset($xx->updatedAt);
				$txtData .= implode("|", (array)$xx) . "\n";
			}

			// Set the headers for file download
			header("Content-type: application/octet-stream");
			header("Content-Disposition: attachment; filename=SLIK - " . $nama_form . ".txt");

			// Output the data to the response
			echo $customHeader . $txtData;
		}
	}

	public function ajax_backup_all()
	{
		$start_date =  $this->input->post('start_date');
		$end_date =  $this->input->post('end_date');
		$modul =  $this->input->post('modul');

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/backup/all',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => 'type_form=' . $modul . '&start_date=' . $start_date . '&end_date=' . $end_date,
			CURLOPT_HTTPHEADER => array(
				'Content-Type: application/x-www-form-urlencoded',
				'Authorization: Bearer ' . $this->session->access_token
			),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		$hasil = json_decode($response);
		if ($hasil->message == "success") {
			echo json_encode(array("status" => TRUE, "isi" => $hasil));
		} else {
			echo json_encode(array("status" => FALSE, "isi" => "Sepertinya ada yang error!!!"));
		}
	}

	public function ajax_restore_all()
	{
		$start_date =  $this->input->post('start_date');
		$end_date =  $this->input->post('end_date');
		$modul =  $this->input->post('modul');

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/restore/all',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => 'type_form=' . $modul . '&start_date=' . $start_date . '&end_date=' . $end_date,
			CURLOPT_HTTPHEADER => array(
				'Content-Type: application/x-www-form-urlencoded',
				'Authorization: Bearer ' . $this->session->access_token
			),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		$hasil = json_decode($response);
		if ($hasil->message == "success") {
			echo json_encode(array("status" => TRUE, "isi" => $hasil));
		} else {
			echo json_encode(array("status" => FALSE, "isi" => "Sepertinya ada yang error!!!"));
		}
	}
}
