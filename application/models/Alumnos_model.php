<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Alumnos_model extends CI_Model{
	function __construct(){
          parent:: __construct();
     }

     public function getAlumnos(){
          $query = $this->db->get('alumnos');
          return $query->result();
     }
     public function insertAlumnos($data){
          $this->db->insert('alumnos',$data);
          return true;
     }
     public function delete($idAlumno){
          $this->db->where('idAlumno',$idAlumno);
          $this->db->delete('alumnos');
     }
     public function get_one_Alumnos($idAlumno){
          $query = $this->db->get_where('alumnos',array('idAlumno'=>$idAlumno));
          return $query->result();
     }
     public function update($idAlumno,$datos){
          $this->db->where('idAlumno',$idAlumno);
          return $this->db->update('alumnos',$datos);
     }
}