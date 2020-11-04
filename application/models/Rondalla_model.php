<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Rondalla_model extends CI_Model{
	function __construct(){
          parent:: __construct();
     }

     public function getRondalla(){
          $query = $this->db->get('rondalla');
          return $query->result();
     }
     public function insertRondalla($data){
          $this->db->insert('rondalla',$data);
          return true;
     }
     public function delete($idRondalla){
          $this->db->where('idRondalla',$idRondalla);
          $this->db->delete('rondalla');
     }
     public function get_one_Rondalla($idRondalla){
          $query = $this->db->get_where('rondalla',array('idRondalla'=>$idRondalla));
          return $query->result();
     }
     public function update($idRondalla,$datos){
          $this->db->where('idRondalla',$idRondalla);
          return $this->db->update('rondalla',$datos);
     }
}