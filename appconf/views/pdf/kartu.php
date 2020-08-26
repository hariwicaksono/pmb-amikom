<?php 
ob_start();
  ?>
  <style type="text/css">
  	.tabel td {
  		
  		text-align: center;
  		margin: auto;
  	}
  </style>
<div style=" border-bottom: 1px solid black;margin-bottom: 10px">
<img src="/var/www/clients/client1/web1/web/student-amikom/style/kop/kop_atas.jpg" style="width: 50%;margin-top: 10px;padding-left: 10px;margin-bottom: 5px;">
</div>
<table style="border:1px solid; padding:1px 150px 1px 150px;margin:auto;">
	<tr>
		<td><b>Telah diterima uang sebesar Rp. <?php echo $biodata['BIAYA_PENDAFTARAN']?>,- untuk biaya pendaftaran</b></td>
	</tr>
</table>
<?php
$tgl=$this->mkonversi->TglIndonesia(date('d-m-Y'));
$gel=$this->model_crud->selectData('data_gelombang',array('kode'=>$biodata['gelombang']))->row_array();
$tgl_tes=$this->mkonversi->TglIndonesia($biodata['TGL_TES']);
$pilihan1=$this->model_crud->selectData('department',array('kd_dept'=>$biodata['pilihan1']))->row_array(); 
$pilihan2=$this->model_crud->selectData('department',array('kd_dept'=>$biodata['pilihan2']))->row_array();
$dokumen=$this->model_crud->selectData('dokumen_pmb',array('nodaf'=>$biodata['nodaf'],'jenis_dokumen'=>'foto'))->row_array(); 
 ?>
<br />
<table style="font-weight: bold;">
	<tr>
		<td width="250">Gelombang</td>
		<td width="10">:</td>
		<td width="450"><?=$gel['gelombang']?></td>
	</tr>
	<tr>
		<td>Nomor Pendaftaran</td>
		<td>:</td>
		<td><?=$biodata['nodaf']?></td>
	</tr>
	<tr>
		<td>Nomor Referensi</td>
		<td>:</td>
		<td><?=$biodata['noref']?></td>
	</tr>
	<tr>
		<td>Nama Lengkap</td>
		<td>:</td>
		<td><?=$biodata['nama']?></td>
	</tr>
	<tr>
		<td>Jurusan SLTA/SMK</td>
		<td>:</td>
		<td><?=$biodata['jurusan']?></td>
	</tr>
	<tr>
		<td>Pilihan</td>
		<td>:</td>
		<td><?=$pilihan1['NAMA_DEPT_id']?></td>
	</tr>
	<tr>
		<td></td>
		<td>:</td>
		<td><?=$pilihan2['NAMA_DEPT_id']?></td>
	</tr>
	<tr>
		<td>Rata-Rata NEM/UAN</td>
		<td>:</td>
		<td><?=$biodata['nem']?></td>
	</tr>
	<tr>
		<td>Jadwal Test</td>
		<td>:</td>
		<td><?=$tgl_tes?></td>
	</tr>
	<tr>
		<td colspan="3" align="right">Purwokerto : <?=$tgl?></td>
	</tr>
</table>
<br />
<br />
<table  class="tabel" style="margin: auto;">
	<tr>
		<td width="200" align="center">Pendaftar</td>
		<td style="padding:1px 60px 1px 60px;"></td>
		<td style="padding:1px 60px 1px 60px;">Petugas Pendaftar</td>
		<td style="padding:1px 60px 1px 60px;">Pengawas Ujian</td>
	</tr>
	<tr>
		<td style="padding:1px 60px 1px 60px;"></td>
		<th>
		<?php 
			if (!empty($dokumen)) {
		?>
			<div style="border: 1px solid black;width: 100px;height:50px;"><img src="<?php echo base_url();?>/dokumen/foto/<?=$dokumen['nama_dokumen']?>" width="100"></div>
		<?php
			} else {
		?>
			<div style=" border: 1px solid black;width: 100px;height:50px;text-align: center;padding-top: 30px;"><p>3x4</p></div>
		<?php
			}
		?>
		</th>
		<td style="padding:1px 60px 1px 60px;"></td>
		<td style="padding:1px 60px 1px 60px;"></td>
	</tr>
	<tr>
		<td width="200"><i>(<?=$biodata['nama']?>)</i></td>
		<td style="padding:1px 60px 1px 60px;"></td>
		<td style="padding:1px 60px 1px 60px;"><i>(cspmb)</i></td>
		<td style="padding:1px 60px 1px 60px;"><i>(...........)</i></td>
	</tr>
</table>
<br />
<div style=" border-bottom: 2px dashed black;"></div>

