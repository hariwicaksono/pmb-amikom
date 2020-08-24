<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function cek_admin()
	{
		$sql = "SELECT * FROM tbl_admin WHERE EMAIL=$email AND PASSWORD='$password' ";
		return $this->db->query($sql);
	}


	public function login($email, $password)
	{
		$this->db->where('EMAIL', $email);
		$this->db->where('PASSWORD', $password);
		$query = $this->db->get('tbl_admin');
		return $query->num_rows();

	}
	public function data_login($email, $password)
	{
		$this->db->where('EMAIL', $email);
		$this->db->where('PASSWORD', $password);
		return $this->db->get('tbl_admin')->row();
	}

	function getData($tabel="",$field="",$where="",$id=""){
            $data = array();
            if (empty($field)) {
                $this->db->select("*");
            } else {
                $this->db->select($field);
            }
            $this->db->from($tabel);
            if (!empty($where)) {
                $this->db->where($where, $id);
            }
            $hasil = $this->db->get();
            
            if($hasil->num_rows() > 0){
                return $hasil->row_array();
            }
        }

     function cekData($tablename="",$where=""){
	    	$cek = $this->db->query("SELECT * FROM ".$tablename." ".$where); 
	    	return $cek->num_rows();
	  }

}

/* End of file model_login.php */
/* Location: ./application/models/model_login.php */