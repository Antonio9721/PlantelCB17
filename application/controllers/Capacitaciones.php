<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/navar');
		$this->load->view('layout/carreras');
		$this->load->view('layour/footer');
	
	}
}