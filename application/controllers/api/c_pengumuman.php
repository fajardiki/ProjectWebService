<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class C_pengumuman extends REST_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Desa_model', 'desa');
	}


	public function index_get()
	{
		$desa = $this->desa->getPengumuman();
		//var_dump($desa);
		echo json_encode($desa);

		// if ($desa) {
		// 	$this->response([
  //                   'status' => true,
  //                   'message' => 'Data ditemukan'
  //               ], REST_Controller::HTTP_OK);
			
		// }
	}
}
