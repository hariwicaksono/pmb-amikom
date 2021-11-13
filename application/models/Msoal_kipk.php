<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msoal_kipk extends CI_Model{

	function get_soal(){
		$this->db->select('*');
		$this->db->from('tbl_soal_kipk');
		$this->db->limit(115);
		$this->db->order_by('id_soal', 'ASC'); 
		$hasil=$this->db->get();
		return $hasil->result_array();
	}

	function count_all(){
		$this->db->select('*');
		$this->db->from('tbl_soal_kipk');
		//$this->db->limit(50);
		$hasil=$this->db->get();
		return $hasil->num_rows();
	}

}
?>
