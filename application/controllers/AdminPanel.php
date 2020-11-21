<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminPanel extends CI_Controller {	

	public function dashboard()
	{
		$this->template->load('templates/admin/template', 'admin/dashboard');
	}


	public function inputdirguru()
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
			if($uploadfoto =''){
				
			}else{
				$config['upload_path'] = 'assets/landing/img/fotoguru'; 
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('foto_guru')) {
					echo "Upload gagal!"; die(); //do alert here
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
			redirect('adminpanel/inputdirguru');
		
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