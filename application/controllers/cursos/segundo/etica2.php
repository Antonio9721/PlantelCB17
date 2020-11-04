<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class etica2 extends CI_Controller {
     
    public function index() 
    {
        $this->load->view('layout/navar4');
        $this->load->view('layout/cursos/segundo/etica2');
        $this->load->view('layout/footer');
       
       
    }
}