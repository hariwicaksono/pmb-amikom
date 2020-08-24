<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function add_admin()
	{
		$a = $this->input->post('nama_depan');
		$b = $this->input->post('nama_belakang');
		$c = $this->input->post('email');
		$d = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
		$e = $this->input->post('level');
		$object = array(
			'NAMA_DEPAN' => $a,
			'NAMA_BELAKANG' => $b,
			'EMAIL' => $c,
			'PASSWORD' => $d,
			'LEVEL' => $e
			
			);
		return $this->db->insert('tbl_admin', $object);
	}

	public function add_subject()
	{
		$a = $this->input->post('nama_subjek');
		$object = array
		(
			'SUBJECT_NAME' => $a
		);
		return $this->db->insert('subject_area', $object);
	}

	public function show_admin()
	{
		return $this->db->get('tbl_admin');
	}

	public function del_admin($param)
	{
		return $this->db->delete('tbl_admin', array('ID_ADMIN' => $param));
	}

	function cekData($tablename="",$where="")
	{
	    	$cek = $this->db->query("SELECT * FROM ".$tablename." ".$where); 
	    	return $cek->num_rows();
	}

	public function show_group()
	{
		return $this->db->query('select * from group_class ORDER BY GROUP_CLASS_ID DESC ');
	
	}

	public function show_free_user()
	{
		return $this->db->query('select * from pengguna WHERE ISPREMIUM=0 ORDER BY PENGGUNA_ID DESC ');
	}

	public function show_premium_user()
	{
		return $this->db->query('select * from pengguna WHERE ISPREMIUM=1 ORDER BY PENGGUNA_ID DESC ');
	}

	public function show_classroom()
	{
		return $this->db->query('select * from classroom ORDER BY CLASSROOM_ID DESC ');	
	}

	public function show_premium_member()
	{
		return $this->db->query('select * from pengguna ORDER BY PENGGUNA_ID DESC ');
	}

	public function upgrade_premium()
	{

		return $this->db->query('UPDATE pengguna SET ISPREMIUM=1 WHERE PENGGUNA_ID='.$this->uri->segment(4));
	}

	public function status_report()
	{
		return $this->db->query('SELECT a.PENGGUNA_ID, a.NAMA_DEPAN, a.NAMA_TENGAH, a.NAMA_BELAKANG, b.REPORT_STATUS_ID, b.STATUS_ID, b.PENGGUNA_ID, b.TANGGAL_PENGADUAN, b.JAM_PENGADUAN, c.STATUS_ID, c.STATUS
		FROM pengguna a, status_report b, status_update c WHERE a.PENGGUNA_ID = b.PENGGUNA_ID AND b.STATUS_ID = c.STATUS_ID ORDER BY REPORT_STATUS_ID DESC');
	}

	public function del_subject()
	{
		return $this->db->query('DELETE FROM subject_area WHERE SUBJECT_ID='.$this->uri->segment(4));
	}

	public function del_status_report()
	{
		return $this->db->query('DELETE FROM status_report WHERE REPORT_STATUS_ID='.$this->uri->segment(4));
	}

	public function add_institusi()
	{
		$a = $this->input->post('kategori');
		$b = $this->input->post('nama_institusi');
		$c = $this->input->post('alamat_institusi');
		$d = $this->input->post('kota');
		$e = $this->input->post('negara');
		$f = $this->input->post('kode_pos');
		$g = $this->input->post('website');
		$object = array(
			'KATEGORI' => $a,
			'NAMA_INSTITUSI' => $b,
			'ALAMAT_INSTITUSI' => $c,
			'KOTA' => $d,
			'NEGARA' => $e,
			'KODE_POS' => $f,
			'WEBSITE_INSTITUSI' =>$g
			);
		return $this->db->insert('institusi_pendidikan', $object);
	}

	public function del_institusi()
	{
		return $this->db->query('DELETE FROM institusi_pendidikan WHERE INSTITUSI_ID='.$this->uri->segment(4));
	}

	public function show_status()
	{
		return $this->db->query('SELECT a.PENGGUNA_ID, a.NAMA_DEPAN, a.NAMA_TENGAH, a.NAMA_BELAKANG, b.STATUS_ID, b.PENGGUNA_ID, b.STATUS, b.TANGGAL_STATUS, b.JAM_STATUS
		FROM pengguna a, status_update b WHERE a.PENGGUNA_ID= b.PENGGUNA_ID AND b.PENGGUNA_ID='.$this->uri->segment(4));
	}

	public function hapus_status()
	{
		return $this->db->query('DELETE FROM status_update WHERE STATUS_ID='.$this->uri->segment(4));
	}

        public function tampil_event()
	{
		return $this->db->query('SELECT * FROM classroom_event');
	}

	public function lihat_event()
	{
		return $this->db->query('SELECT * FROM classroom_event WHERE CLASSROOM_EVENT_ID='.$this->uri->segment(4));
	}

	public function del_entertainment()
	{
		return $this->db->query('DELETE FROM entertainment_game WHERE ID_ENTERTAINMENT='.$this->uri->segment(4));
	}

	public function add_entertainment_games()
	{

        $this->load->model('Model_crud');
        // $this->pathgambar= realpath(APPPATH . '../files/pic_gameroom');

		$a= $this->input->post('nama_games');
		$b= $this->input->post('link');

			$object['GAMBAR'] = $this->Model_crud->uploadGambar("gambar","files/pic_gameroom");
			$object['NAMA'] = $a;
		    $object['LINK'] = $b;

		return $this->db->insert('entertainment_game', $object);

	}



}

/* End of file model_admin.php */
/* Location: ./application/models/model_admin.php */	