<?php
class Mgelombang extends CI_Model
{
	function getGelombang($ThaPmb,$kode_gel=''){
		$this->db->select('kode,gelombang,tgl_mulai, tgl_selesai');
		$this->db->from('data_gelombang');
		$this->db->where('thn_akademik',$ThaPmb);
		if(!empty($kode_gel)){
			$this->db->where('kode',$kode_gel);
			$hasil=$this->db->get();		
			return $hasil->row_array();
		}else{
			$hasil=$this->db->get();		
			return $hasil->result_array();
		}		
					
	}
	
	/**
	 * menampilkan hanya nama dan kode gelombang
	 * 
	 * @param object $ThaPmb
	 * @return 
	 */
	function getNmKdGel($ThaPmb){
		$this->db->select('kode,gelombang');
		$this->db->from('data_gelombang');
		$this->db->where('thn_akademik',$ThaPmb);
		$hasil=$this->db->get()->result_array();				
		return $hasil;
	}

	function cek_daftar($data=array()){
		$tamp=$this->db->get_where('data_gelombang',$data)->result_array();
		if(!empty($tamp)){
			foreach ($tamp as $key => $value) {
				$waktu_sekarang=mktime(date("H"),date("i"),date("s"),date("m"),date("d"),date("Y"));
				$waktu_awal=mktime(date("H",strtotime($value['tgl_mulai'])),date("i",strtotime($value['tgl_mulai'])),date("s",strtotime($value['tgl_mulai'])),date("m",strtotime($value['tgl_mulai'])),date("d",strtotime($value['tgl_mulai'])),date("Y",strtotime($value['tgl_mulai'])));
				$waktu_akhir=mktime(date("H",strtotime($value['tgl_selesai'])),date("i",strtotime($value['tgl_selesai'])),date("s",strtotime($value['tgl_selesai'])),date("m",strtotime($value['tgl_selesai'])),date("d",strtotime($value['tgl_selesai'])),date("Y",strtotime($value['tgl_selesai'])));
  				if($waktu_sekarang >= $waktu_awal && $waktu_sekarang <= $waktu_akhir) return $value;
			}
			
		}else {
			return "0";
		}
	}
}
?>