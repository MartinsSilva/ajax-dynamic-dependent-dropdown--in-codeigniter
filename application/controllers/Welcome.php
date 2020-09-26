<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Welcomes');
	}

	public function index()
	{
		$data['country'] = $this->Welcomes->fetch_country();
		$this->load->view('welcome_message', $data);
	}

	public function fetch_state()
	{
		if($this->input->post('country_id')) {
			echo $this->Welcomes->fetch_state($this->input->post('country_id'));
		}
	}

	public function fetch_city()
	{
		if($this->input->post('state_id')) {
			echo $this->Welcomes->fetch_city($this->input->post('state_id'));
		}
	}
}
