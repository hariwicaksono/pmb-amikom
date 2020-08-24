<?php
class Mmhsbaru extends CI_Model
{

	function getMhsBaru($ThnPmb='',$KdGelombang='',$searchkey='',$tglawal='',$tglakhir=''){
		$this->db->select('nodaf,nama,nem,c.gelombang,d.gelombang as nama_gel,pilihan1,de.KODE_KELAS as PIL1, pilihan2, df.KODE_KELAS as PIL2,ket_lulus, tgldaftar,TGL_TES ');
		$this->db->from('calonsiswa c');
		$this->db->join('data_gelombang d','c.gelombang=d.kode');
		$this->db->join('jurusan de','c.pilihan1=de.KD_JUR');
		$this->db->join('jurusan df','c.pilihan2=df.KD_JUR');
		
		if(!empty($ThnPmb)){
			$this->db->where('c.thn_akademik',$ThnPmb);	
		}
		if(!empty($KdGelombang)){
			$this->db->where('c.gelombang',$KdGelombang);	
		}
		
		if(!empty($searchkey)){
			$this->db->where("c.nama like '%".$searchkey."%' or c.nodaf like '%".$searchkey."%'");			
		}
		
		if(!empty($tglawal) && !empty($tglakhir)){
			$this->db->where("c.tgldaftar between '".date('Y-m-d',strtotime($tglawal))."' and '".date('Y-m-d',strtotime($tglakhir))."' ");
		}

		$this->db->where('syarat2','Sudah');	
					
		$hasil=$this->db->get();			
		return $hasil->result_array();
	}	
	
		function getMhsBaruLengkap($nodaf=''){
		$this->db->select('*,convert(varchar(10),tgldaftar,105) as tglpendaftaran,convert(varchar(10),TGL_TES,105) as tglujian,d.NAMA_DEPT as NAMAPIL1,e.NAMA_DEPT as NAMAPIL2,NamaKab,NamaProp,NAMA_RELASI,dg.gelombang,c.gelombang as kodegelombang');
		$this->db->from('calonsiswa c');
		$this->db->join('department d','c.pilihan1=d.KD_DEPT');
		$this->db->join('department e','c.pilihan2=e.KD_DEPT');
		$this->db->join('kabupaten k','c.kabupaten=k.kdKab');
		$this->db->join('data_gelombang dg','c.gelombang=dg.kode');
		$this->db->join('propinsi p','c.propinsi=p.kdProp');
		$this->db->join('RELASI_MHS r','c.ID_RELASI=r.ID_RELASI');
		$this->db->where('nodaf',$nodaf);
		$hasil=$this->db->get();
		//print($this->db->last_query());
		return $hasil->result_array();
	}
	
			
}
