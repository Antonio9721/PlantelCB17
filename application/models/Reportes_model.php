<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Reportes_model extends CI_Model{
	function __construct(){
          parent:: __construct();
     }

     public function getReportes(){
          $query = $this->db->get('reportes');
          return $query->result();
     }
     public function insertReportes($data){
          $this->db->insert('reportes',$data);
          return true;
     }
     public function delete($idReporte){
          $this->db->where('idReporte',$idReporte);
          $this->db->delete('reportes');
     }
     public function get_one_Reportes($idReporte){
          $query = $this->db->get_where('reportes',array('idReporte'=>$idReporte));
          return $query->result();
     }
     public function update($idReporte,$datos){
          $this->db->where('idReporte',$idReporte);
          return $this->db->update('reportes',$datos);
     }
}