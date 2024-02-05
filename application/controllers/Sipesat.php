<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sipesat extends CI_Controller
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
			CURLOPT_URL => 'http://141.136.47.149:3003/form/sipesat',
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
		$this->load->view('sipesat/report_proces', $data);
	}

	public function form_report()
	{

		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('sipesat/form_report');
	}

	public function backup_restore()
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/form/sipesat',
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
		$this->load->view('sipesat/backup_restore', $data);
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

		if ($hasil->message == "success") {
			echo json_encode(array("status" => TRUE));
		}
	}

	public function ajax_process_all()
	{
		$date_all = $this->input->post('date_all');

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/proccess/all',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => 'type_form=sipesat&date=' . $date_all,
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

	public function form_report_isi()
	{
		$tgl_seacrh = $this->session->tgl_periode;

		if ($tgl_seacrh != "") {
			$curl = curl_init();

			curl_setopt_array($curl, array(
				CURLOPT_URL => 'http://141.136.47.149:3003/sipesat/getbydate',
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
				CURLOPT_URL => 'http://141.136.47.149:3003/sipesat',
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
			'kode_form'		=> 'SIPESAT',
			'nama_form'		=> 'Form SIPESAT'
		);
		$this->session->set_userdata($newdata);

		$data['api_hasil'] = $hasil;
		$data['header'] = 'Form Sistem Informasi Pengguna Jasa Terpadu';
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('sipesat/form_report_isi', $data);
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

	public function form_report_edit($id)
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/sipesat/' . $id,
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

		$data['header'] = "Form Sistem Informasi Pengguna Jasa Terpadu";

		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('sipesat/form_report_edit', $data);
	}

	public function ajax_edit()
	{
		$id = $this->input->post('id');
		$id_pjk = $this->input->post('id_pjk');
		$tipe_nasabah = $this->input->post('tipe_nasabah');
		$nama_nasabah = $this->input->post('nama_nasabah');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$alamat = $this->input->post('alamat');
		$no_identitas = $this->input->post('no_identitas');
		$identitas_lainnya = $this->input->post('identitas_lainnya');
		$npwp = $this->input->post('npwp');
		$no_cif = $this->input->post('no_cif');
		$alasan_edit = $this->input->post('alasan_edit');

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/sipesat/' . $id,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'PUT',
			CURLOPT_POSTFIELDS => 'id_pjk=' . $id_pjk . '&tipe_nasabah=' . $tipe_nasabah . '&nama_nasabah=' . $nama_nasabah . '&tempat_lahir=' . $tempat_lahir . '&tgl_lahir=' . $tgl_lahir . '&alamat=' . $alamat . '&no_identitas=' . $no_identitas . '&identitas_lainnya=' . $identitas_lainnya . '&no_cif=' . $no_cif . '&npwp=' . $npwp . '&alasan=' . $alasan_edit,
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

	public function ajax_backup()
	{
		$start_date =  $this->input->post('start_date');
		$end_date =  $this->input->post('end_date');
		$form_report =  $this->input->post('form_report');

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/form/sipesat',
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
			CURLOPT_URL => 'http://141.136.47.149:3003/form/sipesat',
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
}
