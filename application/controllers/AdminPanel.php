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

	// public function editguru($id){
	// 	// $this->setsession();
	// 	// $id = $this->input->post('edit_id');
    //     // $config['upload_path']= 'assets/landing/img/fotoguru';
    //     // $config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';
	// 	// $this->load->library('upload', $config);
    //     // if(!$this->upload->do_upload('foto_guru')){
	// 	// // 	$item = $this->enhamodel->get($data['id'])->row();
	// 	// // 	if ($item->image != null) {
	// 	// // 	$target_file = 'assets/landing/img/fotoguru'.$item->image;
	// 	// // 	unlink($target_file);
	// 	// // }
	// 	// 	$nip = $this->input->post('nip');
	// 	// 	$nama = $this->input->post('nama_guru');
	// 	// 	$mapel = $this->input->post('mapel_ampu');

	// 	// 	$data = array(
	// 	// 		'nip' => $nip,
	// 	// 		'nama_guru' => $nama,
	// 	// 		'mapel_ampu' => $mapel,
				
	// 	// 	);
	
	// 	// 	$this->enhamodel->prosesEditGuru($data, $id);
	// 	// 	$this->session->set_flashdata('message', 'Data guru berhasil di ubah');
	// 	// 	redirect('adminpanel/dataguru');
    //     // }else{
	// 	// 		$nip = $this->input->post('editnip');
	// 	// 		$nama = $this->input->post('editnamaguru');
	// 	// 		$mapel = $this->input->post('editmapelampu');
	// 	// 		$foto = $_FILES['editfotoguru']['name'];
    //     //         $foto = $this->upload->data('file_name');
    //     // }
        
    //     // $data = array(
	// 	// 	'nip' => $nip,
	// 	// 	'nama_guru' => $nama,
	// 	// 	'mapel_ampu' => $mapel,
			
	// 	// );

	// 	// if ($data['foto_guru'] != null) {
	// 	// 	# code...
	// 	// 	$data['foto_guru'] = $foto['foto_guru'];
	// 	// }
		

	// 	// $where = array('id_guru' => $id);
	// 	$data['guru'] = $this->enhamodel->getGuruById($id);
	// 	$this->template->load('templates/admin/template', 'admin/edit_guru', $data);
	// 	// $this->enhamodel->prosesEditGuru($data, $id, $where);
	// 	// $this->session->set_flashdata('message', 'Data guru berhasil di ubah');
	// 	// redirect('adminpanel/dataguru');
	   
	// }

	public function editguru(){
		$this->setsession();
		// post di isi variable name di input
		$id = $this->input->post('edit_id');
		
		$nip = $this->input->post('editnip');
		$nama = $this->input->post('editnamaguru');
		$mapel = $this->input->post('editmapelampu');
		$foto = $_FILES['editfotoguru'];
        $config['upload_path']= 'assets/landing/img/fotoguru';
		$config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';
		
		// do_upload di isi name variable di form input
		// if ($foto == null){}
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('editfotoguru')) {
			$data = array(
				'nip' => $nip,
				'nama_guru' => $nama,
				'mapel_ampu' => $mapel
			);
	
			$this->enhamodel->updatedataguru($data, $id);
			$this->session->set_flashdata('message', 'Data guru berhasil di ubah');
			redirect('adminpanel/dataguru');
		}else{
		$guru['guru'] = $this->enhamodel->getGuruById($id);
		// var_dump($guru['guru']['foto_guru']);
		if ($guru['guru']['foto_guru'] != null) {
			$path = FCPATH.'assets/landing/img/fotoguru/'.$guru['guru']['foto_guru'];
			unlink($path);
		}
		// file_name menngembalikan nama file beserta extensinya
        $foto = $this->upload->data('file_name');
        
        $data = array(
			'nip' => $nip,
			'nama_guru' => $nama,
			'mapel_ampu' => $mapel,
			'foto_guru' => $foto
		);

		$this->enhamodel->updatedataguru($data, $id);
		$this->session->set_flashdata('message', 'Data guru berhasil di ubah');
		
		redirect('adminpanel/dataguru');
	}
	}


	public function deleteguru($id){
		$this->setsession();
		$guru['guru'] = $this->enhamodel->getGuruById($id);
		if ($guru['guru']['foto_guru'] != null) {
			$path = FCPATH.'assets/landing/img/fotoguru/'.$guru['guru']['foto_guru'];
			unlink($path);
		$this->enhamodel->selectdeleteGuru($id);
		$this->session->set_flashdata('message', 'Data guru berhasil di hapus');
		redirect('adminpanel/dataguru');}
	}



	public function gallery(){
		$this->setsession();
		$data['gallery'] = $this->enhamodel->getGallery();
		$this->template->load('templates/admin/template', 'admin/gallery', $data);
	}
	
	public function inputgallery(){
		$config['upload_path'] = 'assets/landing/img/gallery/';
		$config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';
		$config['encrypt_name'] = true;
		$this->load->library('upload', $config);
		$namakegiatan = $this->input->post('namakegiatan');
		$jmlfoto = count($_FILES['fotokegiatan']['name']);
		for ($i=0; $i <$jmlfoto ; $i++) { 
		if (!empty($_FILES['fotokegiatan']['name'][$i])) {
			$_FILES['file']['name'] = $_FILES['fotokegiatan']['name'][$i];
			$_FILES['file']['type'] = $_FILES['fotokegiatan']['type'][$i];
			$_FILES['file']['tmp_name'] = $_FILES['fotokegiatan']['tmp_name'][$i];
			$_FILES['file']['error'] = $_FILES['fotokegiatan']['error'][$i];
			$_FILES['file']['size'] = $_FILES['fotokegiatan']['size'][$i];
			if ($this->upload->do_upload('file')) {
				$fotokegiatan = $this->upload->data();
				$data['foto_kegiatan']= $fotokegiatan['file_name'];
				$data ['nama_kegiatan'] = $namakegiatan[$i];
				$this->enhamodel->inputFotogallery($data, 'tb_gallery');
				$this->session->set_flashdata('message', 'Foto berhasil di upload');
			}
		}	
	}
	redirect('adminpanel/gallery');
}

public function deletegallery($id){
	$this->setsession();
	$gallery['gallery'] = $this->enhamodel->getGalleryById($id);
	if ($gallery['gallery']['foto_kegiatan'] != null) {
		$path = FCPATH.'assets/landing/img/gallery/'.$gallery['gallery']['foto_kegiatan'];
		unlink($path);
	$this->enhamodel->selectdeleteGallery($id);
	$this->session->set_flashdata('message', 'Foto berhasil di hapus');
	redirect('adminpanel/gallery');}
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