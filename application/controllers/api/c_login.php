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
		//var_dump($desa);
		if ($desa) {
			echo "1";
		} else {
			echo "0";
		}

		// if ($desa) {
		// 	$this->response([
  //                   'status' => true,
  //                   'message' => 'Data ditemukan'
  //               ], REST_Controller::HTTP_OK);
			
		// }
	}
}
