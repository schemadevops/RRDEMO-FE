<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Apollo extends CI_Controller
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
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('apollo/form_report_isi_00');
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
}
