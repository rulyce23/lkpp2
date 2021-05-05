<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	
	}

	public function index()
	{
		$data['title'] = 'Cek Resi';
		$data['breadcrumb'] ='Cek Resi';
		$this->load->view('index', $data);
	}
	
	
		
}
