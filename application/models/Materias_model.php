<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Materias_model extends CI_Model{
	function __construct(){
          parent:: __construct();
     }

     public function getMaterias(){
          $query = $this->db->get('materias');
          return $query->result();
     }
     public function insertMaterias($data){
          $this->db->insert('materias',$data);
          return true;
     }
     public function delete($idMateria){
          $this->db->where('idMateria',$idMateria);
          $this->db->delete('materias');
     }
     public function get_one_Materias($idMateria){
          $query = $this->db->get_where('materias',array('idMateria'=>$idMateria));
          return $query->result();
     }
     public function update($idMateria,$datos){
          $this->db->where('idMateria',$idMateria);
          return $this->db->update('materias',$datos);
     }
}