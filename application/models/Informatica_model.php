<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Informatica_model extends CI_Model{
	function __construct(){
          parent:: __construct();
     }

     public function getInformatica(){
          $query = $this->db->get('informatica');
          return $query->result();
     }
     public function insertInformatica($data){
          $this->db->insert('informatica',$data);
          return true;
     }
     public function delete($idInfor){
          $this->db->where('idInfor',$idInfor);
          $this->db->delete('informatica');
     }
     public function get_one_Informatica($idInfor){
          $query = $this->db->get_where('informatica',array('idInfor'=>$idInfor));
          return $query->result();
     }
     public function update($idInfor,$datos){
          $this->db->where('idInfor',$idInfor);
          return $this->db->update('informatica',$datos);
     }
}