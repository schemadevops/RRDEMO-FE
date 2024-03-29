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
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/form/obox',
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
		$this->load->view('obox/report_proces', $data);
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
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/form/obox',
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
		$this->load->view('obox/backup_restore', $data);
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
			CURLOPT_POSTFIELDS => 'type_form=obox&date=' . $date_all,
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
		$tgl_seacrh = $this->session->tgl_periode;

		if ($tgl_seacrh != "") {
			$curl = curl_init();

			curl_setopt_array($curl, array(
				CURLOPT_URL => 'http://141.136.47.149:3003/obox/formcr007/getbydate',
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
				CURLOPT_URL => 'http://141.136.47.149:3003/obox/formcr007',
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
			'nama_form'		=> 'Form CR007 - Debitur Top-Up Plafon Terbesar'
		);
		$this->session->set_userdata($newdata);

		$data['header'] = "Form CR007 - Debitur Top-Up Plafon Terbesar";

		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('obox/form_report_isi_cr007', $data);
	}

	public function form_report_edit_cr007($id)
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/obox/formcr007/' . $id,
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
		$data['header'] = "Form CR007 - Debitur Top-Up Plafon Terbesar";
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('obox/form_report_edit_cr007', $data);
	}

	public function ajax_edit_cr007()
	{
		$id_cr007 = $this->input->post('id_cr007');
		$flag_detail = $this->input->post('flag_detail');
		$kd_cabang = $this->input->post('kd_cabang');
		$nm_debitur = $this->input->post('nm_debitur');
		$no_cif = $this->input->post('no_cif');
		$no_ktp = $this->input->post('no_ktp');
		$tipe_pinjaman = $this->input->post('tipe_pinjaman');
		$no_rek_pinjaman = $this->input->post('no_rek_pinjaman');
		$tipe_nasabah = $this->input->post('tipe_nasabah');
		$tgl_top_up = $this->input->post('tgl_top_up');
		$nilai_sebelum_topup = $this->input->post('nilai_sebelum_topup');
		$nilai_setelah_topup = $this->input->post('nilai_setelah_topup');
		$selisih_antara_plafon = $this->input->post('selisih_antara_plafon');
		$outstanding_sebelum_topup = $this->input->post('outstanding_sebelum_topup');
		$outstanding_setelah_topup = $this->input->post('outstanding_setelah_topup');
		$selisih_outstanding = $this->input->post('selisih_outstanding');
		$jumlah_rek_sebelum_topup = $this->input->post('jumlah_rek_sebelum_topup');
		$jumlah_rek_setelah_topup = $this->input->post('jumlah_rek_setelah_topup');

		$alasan_edit = $this->input->post('alasan_edit');

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/obox/formcr007/' . $id_cr007,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'PUT',
			CURLOPT_POSTFIELDS => 'flag_detail=' . $flag_detail . '&kd_cabang=' . $kd_cabang . '&nm_debitur=' . $nm_debitur . '&no_cif=' . $no_cif . '&no_ktp=' . $no_ktp . '&tipe_pinjaman=' . $tipe_pinjaman . '&no_rek_pinjaman=' . $no_rek_pinjaman . '&tipe_nasabah=' . $tipe_nasabah . '&tgl_top_up=' . $tgl_top_up . '&nilai_sebelum_topup=' . $nilai_sebelum_topup . '&nilai_setelah_topup=' . $nilai_setelah_topup . '&selisih_antara_plafon=' . $selisih_antara_plafon . '&outstanding_sebelum_topup=' . $outstanding_sebelum_topup . '&outstanding_setelah_topup=' . $outstanding_setelah_topup . '&selisih_outstanding=' . $selisih_outstanding . '&jumlah_rek_sebelum_topup=' . $jumlah_rek_sebelum_topup . '&jumlah_rek_setelah_topup=' . $jumlah_rek_setelah_topup . '&alasan=' . $alasan_edit,
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

	public function ajax_backup()
	{
		$start_date =  $this->input->post('start_date');
		$end_date =  $this->input->post('end_date');
		$form_report =  $this->input->post('form_report');

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/form/obox',
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
			CURLOPT_URL => 'http://141.136.47.149:3003/form/obox',
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
