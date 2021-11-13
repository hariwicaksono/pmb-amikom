<?php
class Mberita extends CI_Model{
function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
function tampilberita($limit = 10, $offset = 0){
		$this->db->order_by('tanggal','desc');
    return $this->db->get('berita', $limit, $offset);
}
function count_all(){
		return $this->db->count_all('berita');
}

}
?>
