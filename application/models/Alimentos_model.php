<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Alimentos_model extends CI_Model{
	function __construct(){
          parent:: __construct();
     }

     public function getAlimentos(){
          $query = $this->db->get('alimentos');
          return $query->result();
     }
     public function insertAlimentos($data){
          $this->db->insert('alimentos',$data);
          return true;
     }
     public function delete($idAlim){
          $this->db->where('idAlim',$idAlim);
          $this->db->delete('alimentos');
     }
     public function get_one_Alimentos($idAlim){
          $query = $this->db->get_where('alimentos',array('idAlim'=>$idAlim));
          return $query->result();
     }
     public function update($idAlim,$datos){
          $this->db->where('idAlim',$idAlim);
          return $this->db->update('alimentos',$datos);
     }
}