<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Expediente_model extends CI_Model{
	function __construct(){
          parent:: __construct();
     }

     public function getExpediente(){
          $query = $this->db->get('expediente');
          return $query->result();
     }
     public function insertExpediente($data){
          $this->db->insert('expediente',$data);
          return true;
     }
     public function delete($idExpe){
          $this->db->where('idExpe',$idExpe);
          $this->db->delete('expediente');
     }
     public function get_one_Expediente($idExpe){
          $query = $this->db->get_where('expediente',array('idExpe'=>$idExpe));
          return $query->result();
     }
     public function update($idExpe,$datos){
          $this->db->where('idExpe',$idExpe);
          return $this->db->update('expediente',$datos);
     }
}