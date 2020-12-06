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

	public function setsession(){
		if($this->session->userdata('status') != 1){
			$this->session->set_flashdata('error', 'Session anda telah berakhir, silahkan login kembali!');
			redirect(base_url('login/index'));
		} 
	}
	
	public function index()
	{	
		$this->setsession();
		$datasession['tb_user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		$this->template->load('templates/admin/template', 'admin/dashboard', $datasession);
		
	}

	public function dashboard()
	{	
		$this->template->load('templates/admin/template', 'admin/dashboard');
		
	}


	public function dataguru()
	{
		$this->setsession();
		$data['guru'] = $this->enhamodel->getDirGuru();
		$this->template->load('templates/admin/template', 'admin/form_dirguru' , $data);
	}	

	public function inputguru(){
		$this->setsession();
			$nip = $this->input->post('nip');
			$nama = $this->input->post('nama_guru');
			$mapel = $this->input->post('mapel_ampu');
			$uploadfoto = $_FILES['foto_guru']['name'];
			if($uploadfoto == ''){
				$nip = $this->input->post('nip');
			$nama = $this->input->post('nama_guru');
			$mapel = $this->input->post('mapel_ampu');
				
			}else{
				$config['upload_path'] = 'assets/landing/img/fotoguru'; 
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('foto_guru')) {
					$this->session->set_flashdata('error', 'Silahkan upload foto!');
					redirect('adminpanel/dataguru');
					// echo "Upload gagal!"; die(); //do alert here
				} else{
					$uploadfoto['foto_guru']= $this->upload->data('file_name');
				}
			}

			$data = array(
				'nip' => $nip,
				'nama_guru' => $nama,
				'mapel_ampu' => $mapel,
				'foto_guru'	=> $uploadfoto
			);

			
			$this->enhamodel->inputdataGuru($data, 'tb_guru');
			$this->session->set_flashdata('message', 'Data guru berhasil ditambahkan');
			redirect('adminpanel/dataguru');
		

	}

	public function editguru(){
		$this->setsession();
		$id = $this->input->post('edit_id');
        $config['upload_path']= 'assets/landing/img/fotoguru';
        $config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';
		$this->load->library('upload', $config);
        if(!$this->upload->do_upload('foto_guru')){
		// 	$item = $this->enhamodel->get($data['id'])->row();
		// 	if ($item->image != null) {
		// 	$target_file = 'assets/landing/img/fotoguru'.$item->image;
		// 	unlink($target_file);
		// }
			$nip = $this->input->post('nip');
			$nama = $this->input->post('nama_guru');
			$mapel = $this->input->post('mapel_ampu');

			$data = array(
				'nip' => $nip,
				'nama_guru' => $nama,
				'mapel_ampu' => $mapel,
				
			);
	
			$this->enhamodel->prosesEditGuru($data, $id);
			$this->session->set_flashdata('message', 'Data guru berhasil di ubah');
			redirect('adminpanel/dataguru');
        }else{
				$nip = $this->input->post('editnip');
				$nama = $this->input->post('editnamaguru');
				$mapel = $this->input->post('editmapelampu');
				$foto = $_FILES['editfotoguru']['name'];
                $foto = $this->upload->data('file_name');
        }
        
        $data = array(
			'nip' => $nip,
			'nama_guru' => $nama,
			'mapel_ampu' => $mapel,
			
		);

		if ($data['foto_guru'] != null) {
			# code...
			$data['foto_guru'] = $foto['foto_guru'];
		}
		

		$where = array('id_guru' => $id);

		$this->enhamodel->prosesEditGuru($data, $id, $where);
		$this->session->set_flashdata('message', 'Data guru berhasil di ubah');
		redirect('adminpanel/dataguru');
	   
	}


	public function deleteguru($id){
		$this->setsession();
		$item['guru'] = $this->enhamodel->selectdeleteGuru($id);
		if ($item['foto_guru']  != '') {
			$target_file = 'assets/landing/img/fotoguru'.$item['foto_guru'];
			unlink($target_file);
			echo var_dump($target_file);
		}else{
		$this->enhamodel->selectdeleteGuru($id);
		$this->session->set_flashdata('message', 'Data guru berhasil di hapus');
		redirect('adminpanel/dataguru');}
	}



	public function gallery(){
		$this->setsession();
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