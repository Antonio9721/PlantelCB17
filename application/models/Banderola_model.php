<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Banderola_model extends CI_Model{
	function __construct(){
          parent:: __construct();
     }

     public function getBanderola(){
          $query = $this->db->get('banderola');
          return $query->result();
     }
     public function insertBanderola($data){
          $this->db->insert('banderola',$data);
          return true;
     }
     public function delete($idBanderola){
          $this->db->where('idBanderola',$idB+);
          $this->db->delete('banderola');
     }
     public function get_one_Banderola($idBanderola){
          $query = $this->db->get_where('banderola',array('idBanderola'=>$idBanderola));
          return $query->result();
     }
     public function update($idBanderola,$datos){
          $this->db->where('idBanderola',$idBanderola);
          return $this->db->update('banderola',$datos);
     }
}