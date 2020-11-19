<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminPanel extends CI_Controller {

    public function index()
	{
		$this->load->view('templates/admin/template');
	}

	public function template()
	{
		$this->load->view('templates/admin/template');
	}

	public function dashboard()
	{
		$this->template->load('templates/admin/template', 'dashboard');
	}

	public function forms()
	{
		$this->template->load('templates/admin/template', 'forms');
	}

	public function tables()
	{
		$this->template->load('templates/admin/template', 'tables');
	}

	public function charts()
	{
		$this->template->load('templates/admin/template', 'charts');
	}

   
}