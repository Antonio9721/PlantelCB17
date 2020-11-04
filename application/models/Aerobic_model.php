<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Aerobic_model extends CI_Model{
	function __construct(){
          parent:: __construct();
     }

     public function getAerobic(){
          $query = $this->db->get('aerobic');
          return $query->result();
     }
     public function insertAerobic($data){
          $this->db->insert('aerobic',$data);
          return true;
     }
     public function delete($idAerobic){
          $this->db->where('idAerobic',$idAerobic);
          $this->db->delete('aerobic');
     }
     public function get_one_Aerobic($idAerobic){
          $query = $this->db->get_where('aerobic',array('idAerobic'=>$idAerobic));
          return $query->result();
     }
     public function update($idAerobic,$datos){
          $this->db->where('idAerobic',$idAerobic);
          return $this->db->update('aerobic',$datos);
     }
}