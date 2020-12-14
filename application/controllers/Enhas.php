<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enhas extends CI_Controller {
public function __construct(){
    parent::__construct();
    $this->load->model('enhamodel');
}

    public function index(){
        $data['gallery'] = $this->enhamodel->getGallery();
        $data['cover'] = $this->enhamodel->getCoverNext();
        $data['coverfirst'] = $this->enhamodel->getCoverFirst();
        $data['runtext'] = $this->enhamodel->getRunTextHome();
        $data['profile'] = $this->enhamodel->getProfile();
        // $this->load->library('googlemaps');
        //     $config=array();
        //     $config['center']="37.4419, -122.1419";
        //     $config['zoom']=17;
        //     $config['map_height']="400px";
        // $this->googlemaps->initialize($config);
        //     $marker=array();
        //     $marker['position']="37.4419, -122.1419";
        // $this->googlemaps->add_marker($marker);
        // $data['map']=$this->googlemaps->create_map();
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