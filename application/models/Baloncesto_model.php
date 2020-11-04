<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Baloncesto_model extends CI_Model{
	function __construct(){
          parent:: __construct();
     }

     public function getBaloncesto(){
          $query = $this->db->get('baloncesto');
          return $query->result();
     }
     public function insertBaloncesto($data){
          $this->db->insert('baloncesto',$data);
          return true;
     }
     public function delete($idBalon){
          $this->db->where('idBalon',$idBalon);
          $this->db->delete('baloncesto');
     }
     public function get_one_Baloncesto($idBalon){
          $query = $this->db->get_where('baloncesto',array('idBalon'=>$idBalon));
          return $query->result();
     }
     public function update($idBalon,$datos){
          $this->db->where('idBalon',$idBalon);
          return $this->db->update('baloncesto',$datos);
     }
}