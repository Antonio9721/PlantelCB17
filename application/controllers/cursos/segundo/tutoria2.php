<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class tutoria2 extends CI_Controller {
     
    public function index() 
    {
        $this->load->view('layout/navar4');
        $this->load->view('layout/cursos/segundo/tutoria2');
        $this->load->view('layout/footer');
       
       
    }
}