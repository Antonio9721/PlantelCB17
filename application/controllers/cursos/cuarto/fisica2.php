<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class fisica2 extends CI_Controller {
     
    public function index() 
    {
        $this->load->view('layout/navar4');
        $this->load->view('layout/cursos/cuarto/fisica2');
        $this->load->view('layout/footer');
       
       
    }
}