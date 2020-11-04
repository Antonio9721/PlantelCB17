<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class orientacion1 extends CI_Controller {
     
    public function index() 
    {
        $this->load->view('layout/navar4');
        $this->load->view('layout/cursos/primero/matematicas1');
        $this->load->view('layout/footer');
       
       
    }
}