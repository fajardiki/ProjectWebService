<?php

class Desa_model extends CI_Model {

    public function getDesa(){
        return $this->db->get('warga')->result_array();
    }

    public function getPengumuman(){
        return $this->db->get('pengumuman')->result_array();
    }

    public function postPermohonan($data) {
        return $this->db->query("INSERT INTO permohonan VALUES ('$nik','','','','$foto_kk','$foto_ktp','$keperluan','$kode_surat','','Diajukan')");

        
    }
    // public function getDesa(){
    //     $sql = $this->db->query("SELECT*FROM warga");
    //     return $sql->result_array();
    // }
}