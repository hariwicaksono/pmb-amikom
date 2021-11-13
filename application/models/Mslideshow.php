<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mslideshow extends CI_Model{

	function get_all(){
		$query=$this->db->select('*')
				->from('slideshow_pmb')
				->where('aktif',1)
				->order_by('urutan','ASC')
				->get();
		
		return $query;
	}


}
?>
