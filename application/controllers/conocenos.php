<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class conocenos extends CI_Controller {
     
    public function index() 
    {
        $this->load->view('layout/navar');
        $this->load->view('layout/conocenos');
        $this->load->view('layout/footer');
       
       
       
    }
}