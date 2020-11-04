<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Cardex_model extends CI_Model{
	function __construct(){
          parent:: __construct();
     }

     public function getCardex(){
          $query = $this->db->get('cardex');
          return $query->result();
     }
     public function insertCardex($data){
          $this->db->insert('cardex',$data);
          return true;
     }
     public function delete($idCardex){
          $this->db->where('idCardex',$idCardex);
          $this->db->delete('cardex');
     }
     public function get_one_Cardex($idCardex){
          $query = $this->db->get_where('cardex',array('idCardex'=>$idCardex));
          return $query->result();
     }
     public function update($idCardex,$datos){
          $this->db->where('idCardex',$idCardex);
          return $this->db->update('cardex',$datos);
     }
}