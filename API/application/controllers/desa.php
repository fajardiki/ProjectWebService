<?php

require APPPATH . '/libraries/REST_Controller.php';

class warga extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }

    // show data warga
    function index_get() {
        $nik = $this->get('nik');
        if ($nik == 'nik') {
            $warga = $this->db->get('warga')->result();
        } else {
            $this->db->where('nik', $nik);
            $warga = $this->db->get('warga')->result();
        }
        $this->response($warga, 200);
    }

    // insert new data to mahasiswa
    function index_post() {
        $data = array(
                    'nkk'           => $this->post('nkk'),
                    'nik'          => $this->post('nik'),
                    'nama'    => $this->post('nama'),
                    'tempat_lahir'        => $this->post('tempat_lahir'),
                    'tanggal_lahir'    => $this->post('tanggal_lahir'),
                    'umur'    => $this->post('umur'), 
                    'jenis_kelamin'    => $this->post('jenis_kelamin'), 
                    'pendidikan'    => $this->post('pendidikan'),
                    'perkawinan'    => $this->post('perkawinan'),
                    'agama'    => $this->post('agama'),
                    'pekerjaan'    => $this->post('pekerjaan'),
                    'username'    => $this->post('username'),
                    'password'    => $this->post('password'));
        $insert = $this->db->insert('warga', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    // update data mahasiswa
    function index_put() {
        $nim = $this->put('nkk');
        $data = array(
                    'nkk'       => $this->put('nkk'),
                    'nik'      => $this->put('nik'),
                    'nama'=> $this->put('nama'),
                    'tempat_lahir'    => $this->put('tempat_lahir'),
                    'tanggal_lahir'       => $this->put('tanggal_lahir'),
                    'umur'       => $this->put('umur'),
                    'jenis_kelamin'       => $this->put('jenis_kelamin'),
                    'pendidikan'       => $this->put('pendidikan'),  
                    'perkawinan'       => $this->put('perkawinan'),
                    'agama'       => $this->put('agama'),
                    'pekerjaan'       => $this->put('pekerjaan'),
                    'username'       => $this->put('username'),
                    'password'       => $this->put('password'));
        $this->db->where('nkk', $nkk);
        $update = $this->db->update('warga', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    // delete mahasiswa
    function index_delete() {
        $nkk = $this->delete('nkk');
        $this->db->where('nkk', $nim);
        $delete = $this->db->delete('warga');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

}