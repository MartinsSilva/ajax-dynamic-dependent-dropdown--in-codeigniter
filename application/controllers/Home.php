<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Post');
	}

	public function index()
	{
		$data['categories'] = $this->Post->getCategories();
		$this->load->view('index', $data);
	}

	public function listarPais()
	{
		if($this->input->post('categoryID')) {
			echo $this->Post->getPost($this->input->post('categoryID'));
		}
	}
}
