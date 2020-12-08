<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enhas extends CI_Controller {
public function __construct(){
    parent::__construct();
    $this->load->model('enhamodel');
}


    public function index(){
        $data['gallery'] = $this->enhamodel->getGallery();
         $this->load->view('landing/home', $data);
    }

    public function dirguru(){
        $data['guru'] = $this->enhamodel->getDirGuru();
        $this->load->view('templates/landing/header_default');
        $this->load->view('landing/dirguru', $data);
        $this->load->view('templates/landing/footer_default');
    } 

    

    public function informasi(){
        $data['informasi'] = $this->enhamodel->getInfo();
        $this->load->view('templates/landing/header_default');
        $this->load->view('landing/informasi', $data);
        $this->load->view('templates/landing/footer_default');
    }

    public function download(){
        $data['download'] = $this->enhamodel->getFile();
        $this->load->view('templates/landing/header_default');
        $this->load->view('landing/download', $data);
        $this->load->view('templates/landing/footer_default');
    }
}