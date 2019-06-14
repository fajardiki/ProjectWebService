<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class C_login extends REST_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Desa_model', 'desa');
	}

	public function index_post() {

		$username = $this->input->post("username");
		$password = $this->input->post("password");

		$desa = $this->desa->getLogin($username, $password);
		// $nikname = $this->desa->getnikname($username, $password);
		foreach ($desa as $n) {
			$nik = $n['nik'];
			$nama = $n['nama'];
		}

		if ($desa) {
			$result['login'] = array([
				'nama' => $nama,
				'username' => $username
				]);
			$result['success'] = "1";
			$result['message'] = "success";
			echo json_encode($result);
		} else {
			$result['success'] = "0";
			$result['message'] = "error";
			echo json_encode($result);
		}
	}
}
