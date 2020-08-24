<?php
class Mmenupmb extends CI_Model{

function list_menu_pmb(){
$menucs=array(
'page/Alur_pendaftaran'=>'Alur Pendaftaran',
'page/Jenis_Pendaftaran'=>'Jenis Pendaftaran',
'page/Prosedur_Pendaftaran'=>'Prosedur Pendaftaran',
'page/Prosedur_Registrasi'=>'Prosedur Registrasi',
'page/Kegiatan_Pra_Kuliah_Mahasiswa_Baru'=>'Kegiatan Pra Kuliah Mahasiswa Baru',
'page/Tata_Tertib_Penerimaan_Mahasiswa_Baru'=>'Tata Tertib Penerimaan Mahasiswa Baru',
'page/Beasiswa'=>'Beasiswa'

);
return $menucs;
}
function list_menu_reg(){
$menucs=array(
'page/datamhs'=>'Daftar Calon Mahasiswa',
'page/registrasi'=>'Registrasi'
);
return $menucs;
}

function list_menu_kulum(){
$menucs=array(
'page/Tentang_Kuliah_Umum'=>'Tentang Kuliah Umum',
'page/Jadwal_Kuliah_Umum'=>'Jadwal Kuliah Umum'
);
return $menucs;
}
function list_menu_psu(){
$menucs=array(
'page/Tentang_PSU'=>'Tentang PSU',
'page/Jadwal_PSU'=>'Jadwal PSU'
);
return $menucs;
}
function list_menu_download_center(){
$menucs=array(
'page/download/brosur'=>'Brosur',
'page/download/rincian_biaya'=>'Rincian Biaya',
'page/download/PSU'=>'Contoh Co Card PSU'
);
return $menucs;
}
function get_judul_tupoksi($id_tupoksi){
return $this->db->get_where('tupoksi',array('id_tupoksi'=>$id_tupoksi))->result_array();
}
function get_jadwal_kulum($th_pmb){
$this->db->select('*');
$this->db->from('JADWAL_PSU');
$this->db->join('data_gelombang','KODE_GELOMBANG=kode');
$this->db->where ('thn_akademik',$th_pmb);
return $this->db->get()->result();
}
function get_jadwal_PSU($th_pmb){
$this->db->select('*');
$this->db->from('JADWAL_PSU_NEW');
$this->db->join('data_gelombang','ANGKATAN_PSU=kode');
$this->db->where ('thn_akademik',$th_pmb);
return $this->db->get()->result();
}
function get_peserta_PSU($ID_JADWALPSU=1){
$this->db->select('NODAF,NAMA,JK,SEKOLAH,MULAI_PSU,END_PSU,RUANG');
$this->db->from('calonsiswa as a');
$this->db->join('JADWAL_PSU_NEW as b','a.ID_JADWALPSU=b.ID_JADWALPSU');
$this->db->where ('a.ID_JADWALPSU',$ID_JADWALPSU);
return $this->db->get()->result();
}
}
