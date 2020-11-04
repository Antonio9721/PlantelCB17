<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Karate_model extends CI_Model{
	function __construct(){
          parent:: __construct();
     }

     public function getKarate(){
          $query = $this->db->get('karate');
          return $query->result();
     }
     public function insertKarate($data){
          $this->db->insert('karate',$data);
          return true;
     }
     public function delete($idKarate){
          $this->db->where('idKarate',$idKarate);
          $this->db->delete('karate');
     }
     public function get_one_Karate($idKarate){
          $query = $this->db->get_where('karate',array('idKarate'=>$idKarate));
          return $query->result();
     }
     public function update($idKarate,$datos){
          $this->db->where('idKarate',$idKarate);
          return $this->db->update('karate',$datos);
     }
}