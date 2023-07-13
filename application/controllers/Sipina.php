<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sipina extends CI_Controller
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
		$this->load->view('sipina/report_proces');
	}

	public function form_report()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('sipina/form_report');
	}

	public function backup_restore()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('sipina/backup_restore');
	}


	public function form_report_isi()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/navbar');
		$this->load->view('sipina/form_report_isi');
	}
}
