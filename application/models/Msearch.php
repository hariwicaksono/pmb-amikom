<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Msearch extends CI_Model
{
    function __construct(){
        
        parent::__construct();
        
    }

    function search($query){
        $this->db->from('calonsiswa');
		$this->db->like('nodaf', $query, 'after');
        $this->db->or_like('nama', $query, 'after');
        $this->db->limit(100);
		$q = $this->db->get();
		return $q->result_array();
    }

}