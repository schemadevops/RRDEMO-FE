<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('login_view');
	}

	public function login_aksi()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://141.136.47.149:3003/auth/login',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => 'email=' . $email . '&password=' . $password,
			CURLOPT_HTTPHEADER => array(
				'Content-Type: application/x-www-form-urlencoded'
			),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		$hasil = json_decode($response);
		if ($hasil->message == "email / password salah") {
			echo json_encode(array("status" => FALSE));
		} else {
			$newdata = array(
				'access_token'  => $hasil->access_token,
				'user_id'  => $hasil->user->id,
				'username'  => $hasil->user->username,
				'name'  => $hasil->user->name,
				'role'  => $hasil->user->role,
				'login' => true
			);

			$this->session->set_userdata($newdata);
			echo json_encode(array("status" => TRUE));
		}
	}
}
