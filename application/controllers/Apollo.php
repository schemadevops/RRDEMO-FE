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
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report');
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

	public function form_report_isi_00()
	{

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
				'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MiwibmFtZSI6ImppbXkiLCJ1c2VybmFtZSI6ImplbXMiLCJlbWFpbCI6ImppbXlAZ21haWwuY29tIiwiaWF0IjoxNjg5ODYyOTk3fQ.g2Fqa2U2RhaI2yJTSDVZFNtt33YBmNmaOux4G477lSU'
			),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		$hasil = json_decode($response);

		$data['api_hasil'] = $hasil;

		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_00', $data);
	}

	public function form_report_isi_01()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_01');
	}
	public function form_report_isi_02()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_02');
	}
	public function form_report_isi_03()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_03');
	}
	public function form_report_isi_04()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_04');
	}

	public function form_report_isi_05()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_05');
	}
	public function form_report_isi_06()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_06');
	}
	public function form_report_isi_07()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_07');
	}
	public function form_report_isi_08()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_08');
	}
	public function form_report_isi_09()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_09');
	}
	public function form_report_isi_10()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_10');
	}
	public function form_report_isi_11()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_11');
	}
	public function form_report_isi_12()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_12');
	}
	public function form_report_isi_14()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_14');
	}
	public function form_report_isi_15()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_15');
	}
	public function form_report_isi_100()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_100');
	}
	public function form_report_isi_101()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_101');
	}
	public function form_report_isi_300()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_300');
	}
	public function form_report_isi_400()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_400');
	}
	public function form_report_isi_500()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_500');
	}
	public function form_report_isi_600()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_600');
	}
	public function form_report_isi_601()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_601');
	}
	public function form_report_isi_700()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_700');
	}
	public function form_report_isi_800()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_800');
	}
	public function form_report_isi_900()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_900');
	}
	public function form_report_isi_901()
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

	public function form_report_edit_00()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_edit_00');
	}
	public function form_report_edit_01()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_edit_01');
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

	public function detail_form_00($id)
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
				'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MiwibmFtZSI6ImppbXkiLCJ1c2VybmFtZSI6ImplbXMiLCJlbWFpbCI6ImppbXlAZ21haWwuY29tIiwiaWF0IjoxNjg5ODYyOTk3fQ.g2Fqa2U2RhaI2yJTSDVZFNtt33YBmNmaOux4G477lSU'
			),
		));

		$response = curl_exec($curl);

		curl_close($curl);

		$hasil = json_decode($response);
		echo json_encode(array("status" => TRUE, "data" => $hasil));
	}
}
