<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminpanel extends CI_Controller {
	

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');	
		$this->load->model('enhamodel');
	}

	
	public function index()
	{	
		if($this->session->userdata('status') != 1){
			redirect(base_url('login/index'));
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
		$id = $this->input->post('id');
			$nip = $this->input->post('nip');
			$nama = $this->input->post('nama_guru');
			$mapel = $this->input->post('mapel_ampu');
			$uploadfoto = $_FILES['foto_guru'];
			if($uploadfoto == ''){
				$this->session->set_flashdata('error', 'Data tidak boleh kosong!');
				redirect('adminpanel/dataguru');
				
			}else{
				$config['upload_path'] = 'assets/landing/img/fotoguru'; 
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('foto_guru')) {
					$this->session->set_flashdata('error', 'Silahkan upload foto!');
					redirect('adminpanel/dataguru');
					// echo "Upload gagal!"; die(); //do alert here
				} else{
					$uploadfoto = $this->upload->data('file_name');
				}
			}

			$data = array(
				'id'     => $id,
				'nip' => $nip,
				'nama_guru' => $nama,
				'mapel_ampu' => $mapel,
				'foto_guru'	=> $uploadfoto
			);

			
			$this->enhamodel->inputdataGuru($data, 'tb_guru');
			$this->session->set_flashdata('message', 'Data guru berhasil ditambahkan');
			redirect('adminpanel/dataguru');
		
		
	}

	public function editguru($id){
		$id = $this->input->post('id');
		$nip = $this->input->post('nip');
		$nama_guru = $this->input->post('nama_guru');
		$mapel_ampu = $this->input->post('mapel_ampu');
		$uploadfoto = $_FILES['foto_guru'];

		if ($uploadfoto = '') {
			
		}else{
			$config['upload_path'] = 'assets/landing/img/fotoguru';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('foto_guru')){
				$this->session->set_flashdata('error', 'Silahkan upload foto!');
				redirect('adminpanel/dataguru');
			}else{
				$uploadfoto = $this->upload->data('file_name');
			}
		}

		$data = array('nip' => $nip,
						'nama_guru' => $nama_guru,
						'mapel_ampu' => $mapel_ampu,
						'foto_guru' => $uploadfoto
	);

	$this->enhamodel->editDataGuru($id, $data);
	$this->session->set_flashdata('success', 'Data guru berhasil di edit');
	redirect('adminpanel/dataguru');

	}


	public function deleteguru($id){
		$this->enhamodel->selectdeleteGuru($id);
		redirect('adminpanel/dataguru');
	}



	public function gallery(){
		// $this->load->model('enhamodel');
		// $data['gallery'] = $this->enhamodel->inputFotogallery();
		$this->template->load('templates/admin/template', 'admin/gallery');
	}
	
	public function inputgallery(){
		$namakegiatan = $this->input->post('nama_kegiatan');
		$fotokegiatan = $_FILES['foto_kegiatan'];
		// var_dump($fotokegiatan);
		for ($i=1; $i <=5 ; $i++) { 
		if($fotokegiatan = ''){
			
		}else{
			$config['upload_path'] = 'assets/landing/img';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			 $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
			$this->load->library('upload', $config);
				if (!$this->upload->do_upload('foto_kegiatan')) {
					$this->session->set_flashdata('error', 'Upload Gagal, Silahkan Masukan Foto!');
					// return redirect('adminpanel/dataguru');
					// echo "Upload gagal!"; die(); //do alert here
				} else{
					$fotokegiatan = $this->upload->data('file_name');
				}
		}
	}
		$data = array(
				'nama_kegiatan' => $namakegiatan,
				'foto_kegiatan' => $fotokegiatan
			);

			$this->enhamodel->inputFotogallery($data, 'tb_gallery');
			redirect('adminpanel/inputgallery');

		$this->template->load('templates/admin/template', 'admin/gallery');
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