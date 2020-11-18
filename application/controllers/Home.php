<?php

class Home extends CI_Controller {

    public function index(){
        //  $this->load->view('welcome_message');
        $this->load->view('templates/landing/loader');
        $this->load->view('templates/landing/header_home');
        $this->load->view('templates/landing/container_home');
        $this->load->view('templates/landing/footer');
    }
}