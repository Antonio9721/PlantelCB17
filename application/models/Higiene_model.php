<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Higiene_model extends CI_Model{
	function __construct(){
          parent:: __construct();
     }

     public function getHigiene(){
          $query = $this->db->get('higiene');
          return $query->result();
     }
     public function insertHigiene($data){
          $this->db->insert('higiene',$data);
          return true;
     }
     public function delete($idHigiene){
          $this->db->where('idHigiene',$idHigiene);
          $this->db->delete('higiene');
     }
     public function get_one_Higiene($idHigiene){
          $query = $this->db->get_where('higiene',array('idHigiene'=>$idHigiene));
          return $query->result();
     }
     public function update($idHigiene,$datos){
          $this->db->where('idHigiene',$idHigiene);
          return $this->db->update('higiene',$datos);
     }
}