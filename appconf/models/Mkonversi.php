<?php

class Mkonversi extends CI_Model{
function TglIndonesia($tgl){
	$days=date('d',strtotime($tgl));
	$bulans=date('m',strtotime($tgl));
	$tahun=date('Y',strtotime($tgl));
	
	switch ($bulans) {
	   case "01": $bulan="Januari";break; 
	   case "02": $bulan="Februari";break; 
	   case "03": $bulan="Maret";break; 
	   case "04": $bulan="April";break; 
	   case "05": $bulan="Mei";break; 
	   case "06": $bulan="Juni";break; 
	   case "07": $bulan="Juli";break; 
	   case "08": $bulan="Agustus";break; 
	   case "09": $bulan="September";break; 
	   case "10": $bulan="Oktober";break; 
	   case "11": $bulan="November";break; 
	   case "12": $bulan="Desember";break; 
	}
	return $days." ". $bulan ." ".$tahun;
}
function HariIndonesia($tgl=""){
$array_hari = array(1=>"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
if(empty($tgl))
return $array_hari[date("N")];
else
return $array_hari[date("N",strtotime($tgl))];
}
function jam_aktif(){
$waktu_sekarang=mktime(date("H"),date("i"),date("s"),date("m"),date("d"),date("Y"));
$jamku=$this->db->get('jam');
$jaman=array();
foreach($jamku->result_array() as $rows){
$jam1an=date('Y-m-d').' '.$rows['jam1'];
$jam2an=date('Y-m-d').' '.$rows['jam2'];
  $jam1=mktime(date("H",strtotime($jam1an)),date("i",strtotime($jam1an)),date("s",strtotime($jam1an)),date("m"),date("d"),date("Y"));
  $jam2=mktime(date("H",strtotime($jam2an)),date("i",strtotime($jam2an)),date("s",strtotime($jam2an)),date("m"),date("d"),date("Y"));
  
  if($waktu_sekarang>=$jam1 && $waktu_sekarang<=$jam2) {
     $jaman[]=$rows['idJam'];
	 $jaman[]=$jam2;
	 
     return $jaman;
  
  }
}
	
}
function bulanIndonesia($tgl){
	
	$bulans=date('m',strtotime($tgl));
	
	
	switch ($bulans) {
	   case "01": $bulan="Januari";break; 
	   case "02": $bulan="Februari";break; 
	   case "03": $bulan="Maret";break; 
	   case "04": $bulan="April";break; 
	   case "05": $bulan="Mei";break; 
	   case "06": $bulan="Juni";break; 
	   case "07": $bulan="Juli";break; 
	   case "08": $bulan="Agustus";break; 
	   case "09": $bulan="September";break; 
	   case "10": $bulan="Oktober";break; 
	   case "11": $bulan="November";break; 
	   case "12": $bulan="Desember";break; 
	}
	return $bulan;
}
function BulanRomawi($tgl){
	$bulans=date('m',strtotime($tgl));
	switch ($bulans) {
	   case "01": $bulan="I";break; 
	   case "02": $bulan="II";break; 
	   case "03": $bulan="III";break; 
	   case "04": $bulan="IV";break; 
	   case "05": $bulan="V";break; 
	   case "06": $bulan="VI";break; 
	   case "07": $bulan="VII";break; 
	   case "08": $bulan="VIII";break; 
	   case "09": $bulan="IX";break; 
	   case "10": $bulan="X";break; 
	   case "11": $bulan="XI";break; 
	   case "12": $bulan="XII";break; 
	}
	return $bulan;
}
}
?>