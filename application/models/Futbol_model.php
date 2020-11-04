<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Futbol_model extends CI_Model{
	function __construct(){
          parent:: __construct();
     }

     public function getFutbol(){
          $query = $this->db->get('futbol');
          return $query->result();
     }
     public function insertFutbol($data){
          $this->db->insert('futbol',$data);
          return true;
     }
     public function delete($idFutbol){
          $this->db->where('idFutbol',$idFutbol);
          $this->db->delete('futbol');
     }
     public function get_one_Futbol($idFutbol){
          $query = $this->db->get_where('futbol',array('idFutbol'=>$idFutbol));
          return $query->result();
     }
     public function update($idFutbol,$datos){
          $this->db->where('idFutbol',$idFutbol);
          return $this->db->update('futbol',$datos);
     }
}