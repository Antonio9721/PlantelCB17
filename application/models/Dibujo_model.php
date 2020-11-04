<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Dibujo_model extends CI_Model{
	function __construct(){
          parent:: __construct();
     }

     public function getDibujo(){
          $query = $this->db->get('dibujo');
          return $query->result();
     }
     public function insertDibujo($data){
          $this->db->insert('dibujo',$data);
          return true;
     }
     public function delete($idDibujo){
          $this->db->where('idDibujo',$idDibujo);
          $this->db->delete('dibujo');
     }
     public function get_one_Dibujo($idDibujo){
          $query = $this->db->get_where('dibujo',array('idDibujo'=>$idDibujo));
          return $query->result();
     }
     public function update($idDibujo,$datos){
          $this->db->where('idDibujo',$idDibujo);
          return $this->db->update('dibujo',$datos);
     }
}