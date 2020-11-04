<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class hismexico2 extends CI_Controller {
     
    public function index() 
    {
        $this->load->view('layout/navar4');
        $this->load->view('layout/cursos/cuarto/hismexico2');
        $this->load->view('layout/footer');
       
       
    }
}