<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class semestre5 extends CI_Controller {
     
    public function index() 
    {
        $this->load->view('layout/navar4');
        $this->load->view('layout/modulos/semestre5');
        $this->load->view('layout/footer');
       
       
    }
}