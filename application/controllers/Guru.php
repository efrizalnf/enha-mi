<?php


class Guru extends CI_Controller
{
public function detail(){
    // $this->load->view('templates/landing/loader');
    $this->load->view('templates/landing/header_default');
    $this->load->view('dirguru');
    $this->load->view('templates/landing/footer_default');
}    
}