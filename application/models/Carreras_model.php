<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Carreras_model extends CI_Model{
	function __construct(){
          parent:: __construct();
     }

     public function getCarreras(){
          $query = $this->db->get('carreras');
          return $query->result();
     }
     public function insertCarreras($data){
          $this->db->insert('carreras',$data);
          return true;
     }
     public function delete($idCarrera){
          $this->db->where('idCarrera',$idCarrera);
          $this->db->delete('carreras');
     }
     public function get_one_Carreras($idCarrera){
          $query = $this->db->get_where('carreras',array('idCarrera'=>$idCarrera));
          return $query->result();
     }
     public function update($idCarrera,$datos){
          $this->db->where('idCarrera',$idCarrera);
          return $this->db->update('carreras',$datos);
     }
}