<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Agronomia_model extends CI_Model{
	function __construct(){
          parent:: __construct();
     }

     public function getAgronomia(){
          $query = $this->db->get('agronomia');
          return $query->result();
     }
     public function insertAgronomia($data){
          $this->db->insert('agronomia',$data);
          return true;
     }
     public function delete($idAgro){
          $this->db->where('idAgro',$idAgro);
          $this->db->delete('agronomia');
     }
     public function get_one_Agronomia($idAgro){
          $query = $this->db->get_where('agronomia',array('idAgro'=>$idAgro));
          return $query->result();
     }
     public function update($idAgro,$datos){
          $this->db->where('idAgro',$idAgro);
          return $this->db->update('agronomia',$datos);
     }
}