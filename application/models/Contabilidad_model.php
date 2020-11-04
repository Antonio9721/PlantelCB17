<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Contabilidad_model extends CI_Model{
	function __construct(){
          parent:: __construct();
     }

     public function getContabilidad(){
          $query = $this->db->get('contabilidad');
          return $query->result();
     }
     public function insertContabilidad($data){
          $this->db->insert('contabilidad',$data);
          return true;
     }
     public function delete($idConta){
          $this->db->where('idConta',$idConta);
          $this->db->delete('contabilidad');
     }
     public function get_one_Contabilidad($idConta){
          $query = $this->db->get_where('contabilidad',array('idConta'=>$idConta));
          return $query->result();
     }
     public function update($idConta,$datos){
          $this->db->where('idConta',$idConta);
          return $this->db->update('contabilidad',$datos);
     }
}