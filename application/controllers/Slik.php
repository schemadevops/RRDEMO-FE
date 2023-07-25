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
				'Authorization: Bearer ' . $this->session->access_token
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
		$data['header'] = "SLIK - Form F01 Loan Data";

		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('slik/form_report_isi_f01', $data);
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
				'Authorization: Bearer ' . $this->session->access_token
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
	public function form_report_edit_f01($id)
	{
		$this->load->library('session');

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
			$newdata = array(
				'tabel'  => $hasil->logData,
			);

			$this->session->set_userdata($newdata);
		}
		$data['judul'] = "SLIK - Form F01 Loan Data";
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('slik/form_report_edit_f01', $data);
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

	public function exportDataToTxt_a01()
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
			$api_hasil = $hasil->data;

			$y = date('Y');
			$m = date('m');
			// Create a custom header (modify as per your requirement)
			$customHeader = "H|0103|601044|" . $y . "|" . $m . "|A01|11112|11112\n";

			// Convert data to a tab-separated text format
			$txtData = '';
			foreach ($api_hasil as $row) {
				$txtData .= implode("|", (array)$row) . "\n";
			}

			// Set the headers for file download
			header("Content-type: application/octet-stream");
			header("Content-Disposition: attachment; filename=SLIK - Form A01 Collateral Data.txt");

			// Output the data to the response
			echo $customHeader . $txtData;
		}
	}

	public function exportDataToTxt_f01()
	{
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
				'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MiwibmFtZSI6ImppbXkiLCJ1c2VybmFtZSI6ImplbXMiLCJlbWFpbCI6ImppbXlAZ21haWwuY29tIiwiaWF0IjoxNjg5ODYyOTk3fQ.g2Fqa2U2RhaI2yJTSDVZFNtt33YBmNmaOux4G477lSU'
			),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		$hasil = json_decode($response);
		if ($hasil->message == "success") {
			$api_hasil = $hasil->data;

			$y = date('Y');
			$m = date('m');
			// Create a custom header (modify as per your requirement)
			$customHeader = "H|0103|601044|" . $y . "|" . $m . "|F01|11112|11112\n";

			// Convert data to a tab-separated text format
			$txtData = '';
			foreach ($api_hasil as $row) {
				$txtData .= implode("|", (array)$row) . "\n";
			}

			// Set the headers for file download
			header("Content-type: application/octet-stream");
			header("Content-Disposition: attachment; filename=SLIK - Form F01 Loan Data.txt");

			// Output the data to the response
			echo $customHeader . $txtData;
		}
	}
}
