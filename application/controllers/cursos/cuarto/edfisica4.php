<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class edfisica4 extends CI_Controller {
     
    public function index() 
    {
        $this->load->view('layout/navar4');
        $this->load->view('layout/cursos/cuarto/edfisica4');
        $this->load->view('layout/footer');
       
       
    }
}