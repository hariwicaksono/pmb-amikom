<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Msoal extends MY_Model{

	protected $_table = 'tbl_soal';

	function get_soal(){
		$this->db->select('*');
		$this->db->from('tbl_soal');
		$this->db->limit(50);
		$this->db->order_by('id_soal', 'random'); 
		$hasil=$this->db->get();
		return $hasil->result_array();
	}

	function count_all(){
		$this->db->select('*');
		$this->db->from('tbl_soal');
		$this->db->limit(50);
		$hasil=$this->db->get();
		return $hasil->num_rows();
	}

}
?>
