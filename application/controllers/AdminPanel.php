<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminpanel extends CI_Controller {
	

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');	

	}

	public function index()
	{	
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/login');
		} else {
			// validasi sukses login
			$this->_login();
		}
	}

	private function _login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		 $user = $this->db->get_where('tb_user', ['username' => $username])->row_array();
		 $pass = $this->db->get_where('tb_user', ['password' => $password])->row_array();
		// var_dump($user); die;


		if($user){
			if($password == $pass['password']){
				$data = [
					'username' => $user['username'],
					'nama' => $user['nama'],
					'status' => $user['status']
				];

				$this->session->set_userdata($data);
				redirect('adminpanel/dashboard');
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
			redirect('adminpanel/index');
			}
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username tidak terdaftar!</div>');
			redirect('adminpanel/index');
		}
	}

	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('status');

		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda Telah Logout!</div>');
			redirect('adminpanel/index');
	}

	public function dashboard()
	{	
		if($this->session->userdata('status') != 1){
			redirect(base_url('adminpanel/index'));
		}else{
		$data['tb_user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		$this->template->load('templates/admin/template', 'admin/dashboard', $data);
	}
	}


	public function dataguru()
	{
		$this->load->model('enhamodel');
		$data['guru'] = $this->enhamodel->getDirGuru();
		$this->template->load('templates/admin/template', 'admin/form_dirguru' , $data);
	}	

	public function inputguru(){
			$nip = $this->input->post('nip');
			$nama = $this->input->post('nama_guru');
			$mapel = $this->input->post('mapel_ampu');
			$uploadfoto = $_FILES['foto_guru'];
			if($uploadfoto = ''){
				// $this->session->set_flashdata('error', 'Upload Gagal, Silahkan Masukan Foto!');
				
			}else{
				$config['upload_path'] = 'assets/landing/img/fotoguru'; 
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('foto_guru')) {
					$this->session->set_flashdata('error', 'Upload Gagal, Silahkan Masukan Foto!');
					// return redirect('adminpanel/dataguru');
					// echo "Upload gagal!"; die(); //do alert here
				} else{
					$uploadfoto = $this->upload->data('file_name');
				}
			}

			$data = array(
				'nip' => $nip,
				'nama_guru' => $nama,
				'mapel_ampu' => $mapel,
				'foto_guru'	=> $uploadfoto
			);

			$this->enhamodel->inputdataGuru($data, 'tb_guru');
			redirect('adminpanel/dataguru');
		
	}

	

	public function tables()
	{
		$this->template->load('templates/admin/template', 'admin/tables');
	}

	public function charts()
	{
		$this->template->load('templates/admin/template', 'admin/charts');
	}

   
}