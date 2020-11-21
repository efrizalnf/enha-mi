<?php
class Enhamodel extends CI_Model{
    public function getDirGuru(){
       return $this->db->get('tb_guru')->result_array();
    }
    public function getInformasi(){
        return $this->db->get('tb_info')->result_array();
    }
    public function getFile(){
        return $this->db->get('tb_files')->result_array();
    }

    // Inputt
    public function inputdataGuru($data){
        $this->db->insert('tb_guru', $data);
    }
}