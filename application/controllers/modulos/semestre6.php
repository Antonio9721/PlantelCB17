<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class semestre6 extends CI_Controller {
     
    public function index() 
    {
        $this->load->view('layout/navar4');
        $this->load->view('layout/modulos/semestre6');
        $this->load->view('layout/footer');
       
       
    }
}