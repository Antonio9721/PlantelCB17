<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Danza_model extends CI_Model{
	function __construct(){
          parent:: __construct();
     }

     public function getDanza(){
          $query = $this->db->get('danza');
          return $query->result();
     }
     public function insertDanza($data){
          $this->db->insert('danza',$data);
          return true;
     }
     public function delete($idDanza){
          $this->db->where('idDanza',$idDanza);
          $this->db->delete('danza');
     }
     public function get_one_Danza($idDanza){
          $query = $this->db->get_where('danza',array('idDanza'=>$idDanza));
          return $query->result();
     }
     public function update($idDanza,$datos){
          $this->db->where('idDanza',$idDanza);
          return $this->db->update('danza',$datos);
     }
}