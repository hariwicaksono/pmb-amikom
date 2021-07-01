<style>
 .table th, .table td { 
 padding-left: 10px;
 padding-right:10px;
 text-align:center;
 }
 </style>
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">Informasi</h3>
    </div>
    <div class="panel-body">
        <div class="well" style="min-height: 300px;">
        <?php
        if ($biodata['syarat2']=='Belum') $status='Belum diproses'; elseif ($biodata['syarat2']=='Sudah') $status="Diterima";
        else $status=$biodata['syarat2'];
        $gel=$this->model_crud->selectData('data_gelombang',array('kode'=>$biodata['gelombang']))->row_array();
        $tgldaftar=$this->mkonversi->TglIndonesia(date('d-m-Y',strtotime($biodata['tgldaftar']))); 
		 ?>
		 <div class="table-responsive">
        	<table id="example" class="table table-striped table-bordered" cellspacing="0"  >
				<thead>
					<tr>
						<th>NODAF</th>
						<th>NAMA</th>
						<th>GELOMBANG</th>
						<th>TANGGAL DAFTAR</th>
						<th>STATUS</th>
						<th>CETAK</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?=$biodata['nodaf']?></td>
						<td><?=$biodata['nama']?></td>
						<td><?=$gel['gelombang']?></td>
						<td><?=$tgldaftar?></td>
						<td><?=$status?></td>
						<td>
						<?php if (($biodata['syarat2']=='Sudah') and $biodata['TGL_TES']!='' ) { ?>
						<a href="<?=base_url()?>download/kartu" target="_blank()"><i class="fa fa-print"></i></a>
						<?php } ?>
						</td>
					</tr>
				</tbody>
			</table>
			</div>
			<br />
			<b>Note* :
			<br />
			Tombol cetak akan muncul ketika status berubah menjadi "DITERIMA". Status akan diterima setelah Anda melengkapi form pengisian yang tersedia. Silahkan cek website secara berkala untuk mengetahui perubahan status persyaratan diterima.</b>

        </div>
    </div>
 </div>