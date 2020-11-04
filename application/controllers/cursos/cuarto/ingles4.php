<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class ingles4 extends CI_Controller {
     
    public function index() 
    {
        $this->load->view('layout/navar4');
        $this->load->view('layout/cursos/cuarto/ingles4');
        $this->load->view('layout/footer');
       
       
    }
}