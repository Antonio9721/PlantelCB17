<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class maestros extends CI_Controller {
     
    public function index() 
    {
        $this->load->view('layout/navar');
        $this->load->view('layout/maestros');
        //$this->load->view('layout/footer');
       
       
    }
}