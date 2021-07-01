<?php 

class Mjumlah extends CI_Model {

    public function count_akun()
	{
    return $this->db->count_all('registrasi_pmb');
    }

    public function count_calonsiswa()
	{
    return $this->db->count_all('calonsiswa');
    }

    public function count_tahunlalu($tahun_lalu)
	{
    $this->db->where('THN_AKADEMIK',$tahun_lalu);
    return $this->db->count_all_results('calonsiswa');
    }

    public function count_beasiswa($tahun_lalu)
	{
    $this->db->where('THN_AKADEMIK',$tahun_lalu);
    $this->db->where('syarat2','Sudah');
    $this->db->where('ket_lulus','Lulus');
    $this->db->where('status_registrasi','Bidikmisi');
    return $this->db->count_all_results('calonsiswa');
    }

    public function count_dosen()
	{
    $this->db->where('status_mengajar','1');
    //$this->db->where('tampil_diweb','1');
    return $this->db->count_all_results('DOSEN');
    }


}