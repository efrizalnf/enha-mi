<?php
class Enhamodel extends CI_Model{
    private $tbguru = 'tb_guru';
    private $tbgallery = 'tb_gallery';
    private $tbinfo = 'tb_info';
    private $tbfiles = 'tb_files';

    public function getDirGuru(){
       return $this->db->get($this->tbguru)->result_array();
    //    return $this->db->get_where($this->tbguru)->result_array();
    }
    public function getInformasi(){
        return $this->db->get($this->tbinfo)->result_array();
    }
    public function getFile(){
        return $this->db->get($this->tbfiles)->result_array();
    }

    // Inputt
    public function inputdataGuru($data){
        $this->db->insert($this->tbguru, $data);
    }

    public function inputFotogallery($data){
        $this->db->insert($this->tbgallery, $data);
    }
    

// Edit
    public function editDataGuru($id){
    $this->db->get_where($this->tbguru, array('id' => $id));
    return TRUE;
    }

//    delete
    public function selectdeleteGuru($id){
      return $this->db->delete($this->tbguru, array('id' => $id));
    }

}