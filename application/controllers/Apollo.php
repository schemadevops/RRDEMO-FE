<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Apollo extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->login == false) {
			redirect('login');
		};
	}
	public function report_process()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/report_process');
	}

	public function form_report()
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/form/apolo',
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
		$this->load->view('apollo/form_report', $data);
	}
	public function mapping_gl()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/mapping_gl');
	}
	public function data_report()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/data_report');
	}

	public function backup_restore()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/backup_restore');
	}

	public function form_report_isi_0000()
	{
		$tgl_seacrh = $this->session->tgl_periode;

		if ($tgl_seacrh != "") {
			$curl = curl_init();

			curl_setopt_array($curl, array(
				CURLOPT_URL => 'http://141.136.47.149:3003/apolo/form0000/getbydate',
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
				CURLOPT_URL => 'http://141.136.47.149:3003/apolo/form0000',
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
			'kode_form'		=> '00.00',
			'nama_form'		=> 'Form 00.00 BPR Main Informasi'
		);
		$this->session->set_userdata($newdata);

		$data['api_hasil'] = $hasil;

		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_00', $data);
	}

	public function form_report_edit_00($id)
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/apolo/form0000/' . $id,
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

		$data['header'] = "Apolo Form 00.00 - BPR Main Informasi";

		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_edit_00', $data);
	}

	public function ajax_edit_0000()
	{
		$id_0000 = $this->input->post('id_0000');
		$nama_bpr = $this->input->post('nama_bpr');
		$alamat_bpr = $this->input->post('alamat_bpr');
		$kabupaten_kota = $this->input->post('kabupaten_kota');
		$wilayah_kerja_ojk = $this->input->post('wilayah_kerja_ojk');
		$telp_bpr = $this->input->post('telp_bpr');
		$email_bpr = $this->input->post('email_bpr');
		$web_bpr = $this->input->post('web_bpr');
		$npwp_bpr = $this->input->post('npwp_bpr');
		$nama_pj = $this->input->post('nama_pj');
		$devisi_pj = $this->input->post('devisi_pj');
		$telp_pj = $this->input->post('telp_pj');
		$email_pj = $this->input->post('email_pj');
		$nominal_dev = $this->input->post('nominal_dev');
		$tahun_dev = $this->input->post('tahun_dev');
		$bonus_th_dev = $this->input->post('bonus_th_dev');
		$nama_kantor_aud = $this->input->post('nama_kantor_aud');
		$nama_user_aud = $this->input->post('nama_user_aud');
		$pemeriksaan_ke_aud = $this->input->post('pemeriksaan_ke_aud');
		$nominal_perlembar_sahan = $this->input->post('nominal_perlembar_sahan');
		$izin_pva = $this->input->post('izin_pva');
		$tgl_pva = $this->input->post('tgl_pva');
		$ebank_pva = $this->input->post('ebank_pva');
		$jumlah_pva = $this->input->post('jumlah_pva');
		$pemilik_saham1 = $this->input->post('pemilik_saham1');
		$pemilik_saham2 = $this->input->post('pemilik_saham2');
		$pemilik_saham3 = $this->input->post('pemilik_saham3');
		$alasan_edit = $this->input->post('alasan_edit');

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/apolo/form0000/' . $id_0000,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'PUT',
			CURLOPT_POSTFIELDS => 'include_text=Y&bpr_name=' . $nama_bpr . '&bpr_alamat=' . $alamat_bpr . '&bpr_kabupaten_kota=' . $kabupaten_kota . '&wilayah_kerja_ojk=' . $wilayah_kerja_ojk . '&bpr_tlp=' . $telp_bpr . '&bpr_email=' . $email_bpr . '&bpr_web=' . $web_bpr . '&bpr_npwp=' . $npwp_bpr . '&penanggung_jawab_name=' . $nama_pj . '&penanggung_jawab_devisi=' . $devisi_pj . '&penanggung_jawab_telp=' . $telp_pj . '&penanggung_jawab_email=' . $email_pj . '&deviden_nominal=' . $nominal_dev . '&deviden_tahun_rups_rat=' . $tahun_dev . '&deviden_bonus_tahunan=' . $bonus_th_dev . '&audit_laporan_nama_kantor=' . $nama_kantor_aud . '&audit_laporan_nama_user=' . $nama_user_aud . '&audit_laporan_pemeriksaan_ke=' . $pemeriksaan_ke_aud . '&audit_laporan_lembar_saham=' . $nominal_perlembar_sahan . '&pva_izin=' . $izin_pva . '&pva_tanggal_izin=' . $tgl_pva . '&pva_layanan_perbankan=' . $ebank_pva . '&pva_pemelik_saham=' . $pemilik_saham1 . '&alasan=' . $alasan_edit,
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


	public function form_report_isi_0001()
	{
		$tgl_seacrh = $this->session->tgl_periode;

		if ($tgl_seacrh != "") {
			$curl = curl_init();

			curl_setopt_array($curl, array(
				CURLOPT_URL => 'http://141.136.47.149:3003/apolo/form0001/getbydate',
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
				CURLOPT_URL => 'http://141.136.47.149:3003/apolo/form0001',
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
			'kode_form'		=> '00.01',
			'nama_form'		=> 'Form 00.01 BRP Ownership Data'
		);
		$this->session->set_userdata($newdata);

		$data['api_hasil'] = $hasil;
		$data['header'] = 'Form 00.01 BRP Ownership Data';

		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_01', $data);
	}
	public function form_report_edit_01($id)
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/apolo/form0001/' . $id,
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

		$data['header'] = "Apolo Form 00.01 - BPR Ownership Data";
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_edit_01', $data);
	}

	public function ajax_edit_0001()
	{
		$id_0001 = $this->input->post('id_0001');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$jenis = $this->input->post('jenis');
		$no_identitas = $this->input->post('no_identitas');
		$psp = $this->input->post('psp');
		$jml_nominal = $this->input->post('jml_nominal');
		$persentase_kep = $this->input->post('persentase_kep');
		$alasan_edit = $this->input->post('alasan_edit');

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/apolo/form0001/' . $id_0001,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'PUT',
			CURLOPT_POSTFIELDS => 'nama=' . $nama . '&alamat=' . $alamat . '&jenis=' . $jenis . '&no_indentitas=' . $no_identitas . '&psp=' . $psp . '&jumlah_nominal=' . $jml_nominal . '&persentase_kepemilikan=' . $persentase_kep . '&alasan=' . $alasan_edit,
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


	public function form_report_isi_0002()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_02');
	}
	public function form_report_isi_0003()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_03');
	}
	public function form_report_isi_0004()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_04');
	}

	public function form_report_isi_0005()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_05');
	}
	public function form_report_isi_0006()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_06');
	}
	public function form_report_isi_0007()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_07');
	}
	public function form_report_isi_0008()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_08');
	}
	public function form_report_isi_0009()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_09');
	}
	public function form_report_isi_0010()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_10');
	}
	public function form_report_isi_0011()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_11');
	}
	public function form_report_isi_0012()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_12');
	}
	public function form_report_isi_0014()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_14');
	}
	public function form_report_isi_0015()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_15');
	}
	public function form_report_isi_0100()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_100');
	}
	public function form_report_isi_0101()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_101');
	}
	public function form_report_isi_0300()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_300');
	}
	public function form_report_isi_0400()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_400');
	}
	public function form_report_isi_0500()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_500');
	}
	public function form_report_isi_0600()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_600');
	}
	public function form_report_isi_0601()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_601');
	}
	public function form_report_isi_0700()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_700');
	}
	public function form_report_isi_0800()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_800');
	}
	public function form_report_isi_0900()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_900');
	}
	public function form_report_isi_0901()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_901');
	}
	public function form_report_isi_1000()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_1000');
	}
	public function form_report_isi_1100()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_1100');
	}
	public function form_report_isi_1200()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_1200');
	}
	public function form_report_isi_1300()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_1300');
	}
	public function form_report_isi_1400()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_1400');
	}
	public function form_report_isi_1401()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_1401');
	}
	public function form_report_isi_1500()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_1500');
	}



	public function form_report_edit_02()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_edit_02');
	}
	public function form_report_edit_03()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_edit_03');
	}
	public function form_report_edit_04()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_edit_04');
	}
	public function form_report_edit_05()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_edit_05');
	}
	public function form_report_edit_06()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_edit_06');
	}
	public function form_report_edit_07()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_edit_07');
	}
	public function form_report_edit_08()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_edit_08');
	}
	public function form_report_edit_09()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_edit_09');
	}
	public function form_report_edit_10()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_edit_10');
	}
	public function form_report_edit_11()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_edit_11');
	}
	public function form_report_edit_12()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_edit_12');
	}
	public function form_report_edit_13()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_edit_13');
	}
	public function form_report_edit_14()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_edit_14');
	}
	public function form_report_edit_15()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_edit_15');
	}
	public function form_report_edit_100()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_edit_100');
	}
	public function form_report_edit_300()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_edit_300');
	}
	public function form_report_edit_400()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_edit_400');
	}
	public function form_report_edit_500()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_edit_500');
	}
	public function form_report_edit_601()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_edit_601');
	}
	public function form_report_edit_700()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_edit_700');
	}
	public function form_report_edit_800()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_edit_800');
	}
	public function form_report_edit_900()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_edit_900');
	}
	public function form_report_edit_901()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_edit_901');
	}
	public function form_report_edit_1000()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_edit_1000');
	}
	public function form_report_edit_1100()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_edit_1100');
	}
	public function form_report_edit_1200()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_edit_1200');
	}
	public function form_report_edit_1300()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_edit_1300');
	}
	public function form_report_edit_1400()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_edit_1400');
	}
	public function form_report_edit_1401()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_edit_1401');
	}
	public function form_report_edit_1500()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_edit_1500');
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

	public function exportDataToTxt_0000()
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
				if ($row->databpr) {
					// $txtData .= implode("|", (array)$row) . "\n";
					$txtData .= implode("|", (array)$row->databpr) . "\n";
					$txtData .= implode("|", (array)$row->data_penanggungjawab) . "\n";
					$txtData .= implode("|", (array)$row->data_deviden) . "\n";
					$txtData .= implode("|", (array)$row->data_audit_laporan) . "\n";
					$txtData .= implode("|", (array)$row->data_pedangan_valuta_asing) . "\n";
				}
			}

			// Set the headers for file download
			header("Content-type: application/octet-stream");
			header("Content-Disposition: attachment; filename=APOLO - " . $nama_form . ".txt");

			// Output the data to the response
			echo $customHeader . $txtData;
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
			header("Content-Disposition: attachment; filename=APOLO - " . $nama_form . ".txt");

			// Output the data to the response
			echo $customHeader . $txtData;
		}
	}
}
