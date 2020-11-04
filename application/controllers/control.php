<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class control extends CI_Controller {
     
    public function index() 
    {
        $this->load->view('layout/navar4');
        $this->load->view('layout/control');
        $this->load->view('layout/footer');
       
       
    }
}