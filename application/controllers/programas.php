<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class programas extends CI_Controller {
     
    public function index() 
    {
        $this->load->view('layout/navar');
        $this->load->view('layout/programas');
        //$this->load->view('layout/footer');
       
       
       
    }
}