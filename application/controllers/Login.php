<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');	
		
	}


	public function index()
	{	
		$data['profile'] = $this->enhamodel->getProfile();
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/login', $data);
		} else {
			// validasi sukses login
			$this->login();
		}
	}

	private function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user= $this->db->get_where('tb_user', ['username' => $username])->row_array();
		if($username == $user['username']){
			if(password_verify($password, $user['password'])){
				$data = [
					'username' => $user['username'],
					'nama' => $user['nama'],
					'status' => $user['status']
				];

				$this->session->set_userdata($data);
				redirect('adminpanel/dashboard');
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
				redirect('login');
			}
		}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username tidak terdaftar!</div>');
				redirect('login');
		}
	}

	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('status');
		// $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda Telah Logout!</div>');
		redirect('login');
	}
}