<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Aspirantes_model extends CI_Model{
	function __construct(){
          parent:: __construct();
     }

     public function getAspirantes(){
          $query = $this->db->get('aspirantes');
          return $query->result();
     }
     public function insertAspirantes($data){
          $this->db->insert('aspirantes',$data);
          return true;
     }
     public function delete($idAspirante){
          $this->db->where('idAspirante',$idAspirante);
          $this->db->delete('aspirantes');
     }
     public function get_one_Aspirantes($idAspirante){
          $query = $this->db->get_where('aspirantes',array('idAspirante'=>$idAspirante));
          return $query->result();
     }
     public function update($idAspirante,$datos){
          $this->db->where('idAspirante',$idAspirante);
          return $this->db->update('aspirantes',$datos);
     }
}