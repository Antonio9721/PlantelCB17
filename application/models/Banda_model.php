<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Banda_model extends CI_Model{
	function __construct(){
          parent:: __construct();
     }

     public function getBanda(){
          $query = $this->db->get('banda');
          return $query->result();
     }
     public function insertBanda($data){
          $this->db->insert('banda',$data);
          return true;
     }
     public function delete($idBanda){
          $this->db->where('idBanda',$idBanda);
          $this->db->delete('banda');
     }
     public function get_one_Banda($idBanda){
          $query = $this->db->get_where('banda',array('idBanda'=>$idBanda));
          return $query->result();
     }
     public function update($idBanda,$datos){
          $this->db->where('idBanda',$idBanda);
          return $this->db->update('banda',$datos);
     }
}