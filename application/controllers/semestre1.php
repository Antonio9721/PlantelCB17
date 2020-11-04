<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class semestre1 extends CI_Controller {
     
    public function index() 
    {
        $this->load->view('layout/navar');
        $this->load->view('layout/modulos/semestre1');
        $this->load->view('layout/footer');
       
       
    }
}