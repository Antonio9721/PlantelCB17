<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class capacitacion extends CI_Controller {
     
    public function index() 
    {
        $this->load->view('layout/navar');
        $this->load->view('layout/capacitacion');
        $this->load->view('layout/footer');
       
       
    }
}