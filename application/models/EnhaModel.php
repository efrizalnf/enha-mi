<?php
class EnhaModel extends CI_Model{
    public function getDirGuru(){
       return $this->db->get('tb_guru')->result_array();
    }
    public function getInformasi(){
        return $this->db->get('tb_info')->result_array();
    }
}