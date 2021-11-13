<?php 
ob_start();
  ?>
  <style type="text/css">
  	.tabel td {
  		text-align: center;
  		margin: auto;
  	}
  </style>
<div style="text-align: center;">
<img src="/home/pmbacid1/public_html/assets/main/images/Logo2.png" width="200">

<h1 style="margin-bottom: 5px;"><u>PENGUMUMAN</u></h1>
<h3 style="margin-top: 0;margin-bottom: 40px;">Nomor : 111/AMIKOMPWT/DAKK.3/08/VI/2021</h3>

<h3 style="margin-bottom: 0px;font-weight: 400;">PANITIA PENERIMAAN MAHASISWA BARU</h3>
<h3 style="margin-top: 0;margin-bottom: 0px;font-weight: 400;">UNIVERSITAS AMIKOM PURWOKERTO</h3>
<h3 style="margin-top: 0;font-weight: 400;margin-bottom: 32px;">TAHUN 2021</h3>

<h3 style="margin-bottom: 0px;">TENTANG</h3>
<h3 style="margin-top: 0;margin-bottom: 32px;">PESERTA YANG DINYATAKAN LOLOS SELEKSI</h3>

<p style="font-size: 16px;margin-bottom: 0px;font-weight: 400;">Berdasarkan keputusan Panitia Penerimaan Mahasiswa Baru dengan ini</p>
<h3 style="margin-bottom: 0px;margin-top: 0;">MENYATAKAN</h3>
<p style="font-size: 16px;margin-top: 0;">Bahwa:</p>

<?php
$tgl=$this->mkonversi->TglIndonesia(date('d-m-Y'));
$gel=$this->model_crud->selectData('data_gelombang',array('kode'=>$biodata['gelombang']))->row_array();
$tgl_tes=$this->mkonversi->TglIndonesia($biodata['TGL_TES']);
$pilihan1=$this->model_crud->selectData('department',array('kd_dept'=>$biodata['pilihan1']))->row_array(); 
$pilihan2=$this->model_crud->selectData('department',array('kd_dept'=>$biodata['pilihan2']))->row_array();
$jur_lulus=$this->model_crud->selectData('department',array('kd_dept'=>$biodata['JUR_LULUS']))->row_array();
$dokumen=$this->model_crud->selectData('dokumen_pmb',array('nodaf'=>$biodata['nodaf'],'jenis_dokumen'=>'foto'))->row_array(); 
 ?>

<h3 style="margin-bottom: 0px;font-weight: 400;">Nama : <?=$biodata['nama']?></h3>
<h3 style="margin-bottom: 0px;margin-top: 0;font-weight: 400;">Nomor Daftar : <?=$biodata['nodaf']?></h3>
<h3 style="margin-top: 0;font-weight: 400;margin-bottom: 32px;">Program Studi : <?=$jur_lulus['NAMA_DEPT']?></h3>

<p style="font-size: 16px;margin-bottom: 0px;margin-top: 0;">Dinyatakan</p>
<h1 style="margin-top: 0;margin-bottom: 32px;"><u>DITERIMA</u></h1>

<p style="font-size: 16px;margin-top: 0;text-align: center;">Sebagai Mahasiswa Baru Universitas Amikom Purwokerto Tahun Akademik <?=$gel['thn_akademik']?><br/>
Demikian pengumuman ini disampaikan untuk dapat dipergunakan sebagaimana mestinya.
</p>

<p style="font-size: 16px;margin-bottom: 0px;margin-top: 0;">Ketua PMB</p>
<p style="font-size: 16px;margin-bottom: 0px;margin-top: 0;">Universitas Amikom Purwokerto</p>

<img src="/home/pmbacid1/public_html/assets/main/images/ttd_pakwawan.png" width="90" style="padding-left: -40px;padding-right:-15px;margin-bottom:15px;">
<img src="/home/pmbacid1/public_html/assets/main/images/stempel_amikompwt.png" width="140" height="125" style="padding-left: -180px;margin-bottom:0;">
<h3 style="margin-top: -10px;margin-bottom: 0px;"><u>Akto Hariawan, S.Kom., M.Si</u></h3>
<p style="font-size: 16px;margin-top: 0;">NIK. 2010.09.1.011</p>


</div>