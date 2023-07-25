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
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('obox/form_report_isi_cr006');
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
}
