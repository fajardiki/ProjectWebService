<?php

class Desa_model extends CI_Model {
    public function getDesa(){
        return $this->db->get('warga')->result_array();
    }
    // public function getDesa(){
    //     $sql = $this->db->query("SELECT*FROM warga");
    //     return $sql->result_array();
    // }
}