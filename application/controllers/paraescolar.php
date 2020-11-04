<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class paraescolar extends CI_Controller {
     
    public function index() 
    {
        $this->load->view('layout/navar');
        $this->load->view('layout/paraescolar');
        $this->load->view('layout/footer');
       
       
    }
}