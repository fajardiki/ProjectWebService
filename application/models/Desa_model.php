<?php

class Desa_model extends CI_Model {

    public function getDesa(){
        return $this->db->get('warga')->result_array();
    }

    public function getPengumuman(){
        return $this->db->get('pengumuman')->result_array();
    }

    public function getPermohonan(){
        $this->db->select('*');
        $this->db->from('permohonan');
        $this->db->join('warga','permohonan.nik = warga.nik','inner');
        $this->db->join('surat','permohonan.kode_surat = surat.kode_surat','inner');
        $this->db->where("warga.username", '1234567' );
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getLogin($username, $password){
        $periksa = $this->db->get_where('warga',array('username'=>$username, 'password'=>$password));

        return $periksa->result();
    }

    public function set_pengajuan($nik, $keperluan, $ksurat, $kk, $ktp){
        $insert = $this->db->query("INSERT INTO permohonan VALUES('$nik','','','','$kk','$ktp','$keperluan','$ksurat','admin','Diajukan')");

        if ($insert->num_rows()>0) {
                return 1;
            } else {
                return 0;
            }
    }

    // public function getDesa(){
    //     $sql = $this->db->query("SELECT*FROM warga");
    //     return $sql->result_array();
    // }
}