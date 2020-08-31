<div class="card">

    <div class="card-body">

        <?php
        if ($biodata['syarat2']=='Belum') $status='Belum diproses'; elseif ($biodata['syarat2']=='Sudah') $status="Diterima"; elseif ($biodata['syarat2']=='Tidak diterima') $status="Belum Diterima";
        else $status=$biodata['syarat2'];
        $gel=$this->model_crud->selectData('data_gelombang',array('kode'=>$biodata['gelombang']))->row_array();
        $tgldaftar=$this->mkonversi->TglIndonesia(date('d-m-Y',strtotime($biodata['tgldaftar']))); 
		 ?>
		 
		 <div class="card">
		 <div class="card-body mb-0">
		 <?php if (empty($biodata)) { ?>
			<div class="text-center my-1">
				<img class="img-fluid" src="<?php echo base_url('assets/main/images/');?>/notfound.png" alt="" width="350">
				<h3>Anda Belum Melakukan Pendaftaran</h3>
				<hr class="mb-3 mt-1" />
                <a class="btn btn-primary" href="<?=base_url()?>main_user/profil?act=det" alt="">Formulir Daftar</a>
            </div>
			

		 <?php } else { ?>
		 <h4 class="card-title">Status Pendaftaran</h4>
        	<table id="example" class="table mb-2">
				<tbody>
					<tr>
						<td>NODAF</td>
						<td class="text-right" style="font-weight: 600"><?=$biodata['nodaf']?></td>
					</tr>
					<tr>
						<td>NAMA</td>
						<td class="text-right" style="font-weight: 600"><?=$biodata['nama']?></td>
					</tr>
					<tr>
						<td>GELOMBANG</td>
						<td class="text-right" style="font-weight: 600"><?=$gel['gelombang']?></td>
					</tr>
					<tr>
						<td>TANGGAL DAFTAR</td>
						<td class="text-right" style="font-weight: 600"><?=$tgldaftar?></td>
					</tr>
					<tr>
						<td>STATUS</td>
						<td class="text-right" style="font-weight: 600"><?=$status?></td>
					</tr>
					<tr>
						<td>CETAK</td>
						<td class="text-right" style="font-weight: 600">
						<?php if (($biodata['syarat2']=='Sudah') and $biodata['TGL_TES']!='' ) { ?>
						<a class="btn btn-info" href="<?=base_url()?>download/kartu" target="_blank()"><i class="fa fa-print"></i> Cetak Kartu</a>
						<?php } ?>
						</td>
					</tr>

				</tbody>
			</table>

			<div class="alert alert-info"> 
			<small><strong>Catatan:</strong>
			<br />
			Tombol cetak akan muncul ketika status berubah menjadi "DITERIMA". Status akan diterima setelah Anda melengkapi form pengisian yang tersedia. Silahkan cek website secara berkala untuk mengetahui perubahan status persyaratan diterima.</small>
			</div>
			<?php } ?>
			</div>
			</div>
			
			

    </div>
 </div>