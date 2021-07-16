<?php 
$pilihan1=$this->model_crud->selectData('department',array('kd_dept'=>$biodata['pilihan1']))->row_array(); 
$pilihan2=$this->model_crud->selectData('department',array('kd_dept'=>$biodata['pilihan2']))->row_array();
$pilihan3=$this->model_crud->selectData('department',array('kd_dept'=>$biodata['pilihan3']))->row_array();
$jur_lulus=$this->model_crud->selectData('department',array('kd_dept'=>$biodata['JUR_LULUS']))->row_array();
?>
<div class="card">

    <div class="card-body">

        <?php
        if ($biodata['syarat2']=='Belum') $status='Belum diproses'; elseif ($biodata['syarat2']=='Sudah' && $biodata['ket_lulus']=='Lulus' && $biodata['JUR_LULUS']!='') $status="Diterima"; elseif ($biodata['syarat2']=='Sudah' && $biodata['ket_lulus']=='Tidak' || $biodata['JUR_LULUS']!='') $status="Belum Diterima"; elseif ($biodata['syarat2']=='Sudah' && $biodata['ket_lulus']=='' || $biodata['JUR_LULUS']!='') $status="Belum Diterima"; elseif ($biodata['syarat2']=='Tidak diterima') $status="Tidak Diterima";
        else $status=$biodata['syarat2'];
		if ($biodata['status_registrasi']=='Hanya Daftar') $status_reg='Reguler'; elseif ($biodata['status_registrasi']=='Angsur') $status_reg="Reguler"; elseif ($biodata['status_registrasi']=='Lunas') $status_reg="Reguler";
        else $status_reg=$biodata['status_registrasi'];
        $gel=$this->model_crud->selectData('data_gelombang',array('kode'=>$biodata['gelombang']))->row_array();
        $tgldaftar=$this->mkonversi->TglIndonesia(date('d-m-Y',strtotime($biodata['tgldaftar']))); 
		 ?>
		 
		 <div class="card shadow-sm">
		 <h5 class="card-header py-2">Pendaftaran <span class="font-weight-bolder"><?=$status_reg?></span></h5>
		 <div class="card-body mb-0">
		 <?php if (empty($biodata)) { ?>
			<div class="text-center my-1">
				<img class="img-fluid" src="<?php echo base_url('assets/main/images/');?>notfound.png" alt="" width="350">
				<h4>Anda Belum Melakukan Pendaftaran</h4>
				<hr class="mb-3 mt-1" />
                <a class="btn btn-primary" href="<?=base_url()?>main_user/profil?act=det" alt="">Formulir Daftar</a>
            </div>
			
		 <?php } else { ?>
        	<table id="example" class="table table-sm mb-2">
				<tbody>
					<tr>
						<td>NODAF</td>
						<td style="font-weight: 600"><?=$biodata['nodaf']?></td>
					</tr>
					<?php if (($biodata['status_registrasi']=='KIP-Kuliah') || ($biodata['status_registrasi']=='KIP-Kuliah2')) { ?>
					<tr>
						<td>NO.KIPK</td>
						<td style="font-weight: 600"><?=$biodata['no_kipk']?></td>
					</tr>
					<?php } ?>
					<tr>
						<td>NAMA LENGKAP</td>
						<td style="font-weight: 600"><?=$biodata['nama']?></td>
					</tr>
					<tr>
						<td>PILIHAN</td>
						<td style="font-weight: 600">1.<?=$pilihan1['NAMA_DEPT']?> / 2.<?=$pilihan2['NAMA_DEPT']?> / 3.<?=$pilihan3['NAMA_DEPT']?></td>
					</tr>
					<tr>
						<td>GELOMBANG / TGL DAFTAR</td>
						<td style="font-weight: 600"><?=$gel['gelombang']?> / <?=$tgldaftar?></td>
					</tr>
					<tr>
						<td>JUR LULUS</td>
						<td style="font-weight: 600"><?php echo (isset($jur_lulus) ? $jur_lulus['NAMA_DEPT'] : "-"); ?></td>
					</tr>
					<!--<tr>
						<td>STATUS</td>
						<td style="font-weight: 600"><?//=$status?> <?php //if (($biodata['ket_lulus']=='Lulus') && ($biodata['JUR_LULUS']!='')) { ?><i class="fa fa-check-circle" aria-hidden="true" style="color: #0d6efd;" data-toggle="tooltip" title="Verified"></i><?php //} ?></td>
					</tr>-->
				</tbody>
			</table>
			<h5>Status</h5>
			<div class="card py-0 mb-2">
				<div class="row d-flex justify-content-center">
					<div class="col-12">
						<ul id="progressbar" class="text-center">
							<li class="<?php if (!empty($biodata)) echo "activ";?> step0"></li>
							<li class="<?php if ($biodata['syarat1']=='Lengkap') echo "activ";?> step0"></li>
							<li class="<?php if ($biodata['syarat2']=='Sudah') echo "activ";?> step0"></li>
							<li class="<?php if (($biodata['ket_lulus']=='Lulus') && ($biodata['JUR_LULUS']!='')) echo "activ";?> step0"></li>
						</ul>
					</div>
				</div>
				<div class="row justify-content-between top">
					<div class="row d-flex icon-content"> <i class="icon fa fa-clipboard fa-lg" aria-hidden="true"></i>
						<div class="d-flex flex-column">
							<p class="font-weight-bold">Daftar</p>
						</div>
					</div>
					<div class="row d-flex icon-content"> <i class="icon fa fa-file-pdf-o fa-lg" aria-hidden="true"></i>
						<div class="d-flex flex-column">
							<p class="font-weight-bold">Dokumen</p>
						</div>
					</div>
					<div class="row d-flex icon-content"> <i class="icon fa fa-check-square-o fa-lg" aria-hidden="true"></i>
						<div class="d-flex flex-column">
							<p class="font-weight-bold">Diterima</p>
						</div>
					</div>
					<div class="row d-flex icon-content"> <i class="icon fa fa-check-circle fa-lg" aria-hidden="true"></i>
						<div class="d-flex flex-column">
							<p class="font-weight-bold">Final</p>
						</div>
					</div>
				</div>
			</div>
			<h5>Cetak</h5>
			<div class="row mb-3">
			<div class="col">
				<?php if (($biodata['syarat2']=='Sudah') && $biodata['TGL_TES']!='' ) { ?>
					<a href="<?=base_url()?>download/kartu" target="_blank()">
					<div class="card text-white bg-info text-center">
  						<div class="card-body">
						<i class="fa fa-print fa-2x"></i><br/>
						Kartu Pendaftaran
						</div>
					</div>
					</a>
				<?php } ?>
			</div>
			<div class="col">
				<?php if (($biodata['syarat1']=='Lengkap') && $biodata['syarat2']=='Sudah' ) { ?><!--<?php //if (($biodata['ket_lulus']=='Lulus') and $biodata['JUR_LULUS']!='' ) { ?>-->
					<a href="<?=base_url()?>download/surat_lolos_seleksi" target="_blank()">
					<div class="card text-white bg-success text-center">
  						<div class="card-body">
						<i class="fa fa-print fa-2x"></i><br/>
						Surat Ket.Lolos
					</div>
					</div>
					</a>
				<?php } ?>
			</div>

			</div>

			<div class="alert alert-info"> 
			<strong><i class="fa fa-exclamation-triangle"></i> Catatan:</strong>
			<small>
			<ul class="pl-3">
			<li>Tombol <b>Cetak</b> akan muncul ketika status berubah menjadi "DITERIMA". Status akan diterima setelah Anda melengkapi form pengisian yang tersedia. Silahkan cek website secara berkala untuk mengetahui perubahan status persyaratan diterima.</li>
			</ul>
			</small>
			</div>
			<?php } ?>
			</div>
			</div>

    </div>
 </div>