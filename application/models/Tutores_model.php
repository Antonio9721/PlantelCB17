<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Tutores_model extends CI_Model{
	function __construct(){
          parent:: __construct();
     }

     public function getTutores(){
          $query = $this->db->get('tutores');
          return $query->result();
     }
     public function insertTutores($data){
          $this->db->insert('tutores',$data);
          return true;
     }
     public function delete($idTutor){
          $this->db->where('idTutor',$idTutor);
          $this->db->delete('tutores');
     }
     public function get_one_Tutores($idTutor){
          $query = $this->db->get_where('tutores',array('idTutor'=>$idTutor));
          return $query->result();
     }
     public function update($idTutor,$datos){
          $this->db->where('idTutor',$idTutor);
          return $this->db->update('tutores',$datos);
     }
}