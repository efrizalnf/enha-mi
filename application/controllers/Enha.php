<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enha extends CI_Controller {

    public function index(){
         $this->load->view('home');
    }

    public function dirguru(){
    $this->load->view('templates/landing/header_default');
    $this->load->view('dirguru');
    $this->load->view('templates/landing/footer_default');
    }   

	public function error_page()
	{
		$this->load->view('maintenance');
	}
}