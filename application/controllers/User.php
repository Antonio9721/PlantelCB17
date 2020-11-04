<?php

/**
 * 
 */
class User extends CI_Controller
{
	
	public function _construct()
	{
		parent::__construct();
		if (!isset($_SESSION['user_logged'])) == FALSE){
			$this->session->set_flashdata('error','Logeate para ver el contenido');
			redirect("auth/login");
		}
	}

	public function profile()
	{
		if ($_SESSION['user_logged'] == FALSE){
			$this->session->set_flashdata('error','Logeate para ver el contenido');
			redirect("auth/login");
		}
		$this->load->view('layout/navar');
		$this->load->view('profile');
		$this->load->view('footer');
	}
}