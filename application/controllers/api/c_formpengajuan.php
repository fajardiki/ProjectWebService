<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class C_formpengajuan extends REST_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Desa_model', 'desa');
	}

	public function index_post() {

		$nik = $this->input->post("nik");
		$keperluan = $this->input->post("keperluan");
		$ksurat = $this->input->post("kodesurat");
		$kk = $this->input->post("kk");
		$ktp = $this->input->post("ktp");

		$this->desa->set_pengajuan($nik,$keperluan,$ksurat,$kk,$ktp);

		echo "YESS";
	}
}
