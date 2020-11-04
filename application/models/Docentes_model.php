<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Docentes_model extends CI_Model{
	function __construct(){
          parent:: __construct();
     }

     public function getDocentes(){
          $query = $this->db->get('docentes');
          return $query->result();
     }
     public function insertDocentes($data){
          $this->db->insert('docentes',$data);
          return true;
     }
     public function delete($idDocente){
          $this->db->where('idDocente',$idDocente);
          $this->db->delete('docentes');
     }
     public function get_one_Docentes($idDocente){
          $query = $this->db->get_where('docentes',array('idDocente'=>$idDocente));
          return $query->result();
     }
     public function update($idDocente,$datos){
          $this->db->where('idDocente',$idDocente);
          return $this->db->update('docentes',$datos);
     }
}