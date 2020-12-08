<?php
class Enhamodel extends CI_Model{
    private $tbguru = 'tb_guru';
    private $tbgallery = 'tb_gallery';
    private $tbinfo = 'tb_info';
    private $tbfiles = 'tb_files';


    /* Get Data */
    public function getDirGuru()
    {
        return $this->db->get($this->tbguru)->result_array();
    }

    public function getGuruById($id)
    {
        return $this->db->get_where($this->tbguru, ['id_guru' => $id])->row_array();
    }

    public function getGallery()
    {
        return $this->db->get($this->tbgallery)->result_array();
    }

    public function getGalleryById($id)
    {
        return $this->db->get_where($this->tbgallery, ['id_gallery' => $id])->row_array();
    }

    public function getInfo()
    {
        return $this->db->get($this->tbinfo)->result_array();
    }

    public function getInfoById($id)
    {
        return $this->db->get_where($this->tbinfo, ['id_info' => $id])->row_array();
    }

    /* Inputt */
    public function inputdataGuru($data)
    {
        $this->db->insert($this->tbguru, $data);
    }

    public function inputFotogallery($data)
    {
        $this->db->insert($this->tbgallery, $data);
    }

    public function inputDataInfo($data)
    {
        $this->db->insert($this->tbinfo, $data);
    }
    

/* Edit */
    public function updatedataguru($data, $id)
    {
        $this->db->where('id_guru', $id);
        $this->db->update('tb_guru', $data,  ['id_guru' => $id]);
        return true;
    }

    public function updatedatainfo($data, $id)
    {
        $this->db->where('id_info', $id);
        $this->db->update('tb_info', $data,  ['id_info' => $id]);
        return TRUE;
    }

 /*   delete */
    public function selectdeleteGuru($id)
    {
        return $this->db->delete($this->tbguru, ['id_guru' => $id]);
    }

    public function selectdeleteGallery($id)
    {
        return $this->db->delete($this->tbgallery, ['id_gallery' => $id]);
    }

    public function selectdeleteInfo($id)
    {
        return $this->db->delete($this->tbinfo, ['id_info' => $id]);
    }
}