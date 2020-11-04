<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Volibol_model extends CI_Model{
	function __construct(){
          parent:: __construct();
     }

     public function getVolibol(){
          $query = $this->db->get('volibol');
          return $query->result();
     }
     public function insertVolibol($data){
          $this->db->insert('volibol',$data);
          return true;
     }
     public function delete($idVoli){
          $this->db->where('idVoli',$idVoli);
          $this->db->delete('volibol');
     }
     public function get_one_Volibol($idVoli){
          $query = $this->db->get_where('volibol',array('idVoli'=>$idVoli));
          return $query->result();
     }
     public function update($idVoli,$datos){
          $this->db->where('idVoli',$idVoli);
          return $this->db->update('volibol',$datos);
     }
}