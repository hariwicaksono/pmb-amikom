<?php
$pilihan1 = $this->model_crud->selectData('department', array('kd_dept' => $biodata['pilihan1']))->row_array();
$pilihan2 = $this->model_crud->selectData('department', array('kd_dept' => $biodata['pilihan2']))->row_array();
$pilihan3 = $this->model_crud->selectData('department', array('kd_dept' => $biodata['pilihan3']))->row_array();
$jur_lulus = $this->model_crud->selectData('department', array('kd_dept' => $biodata['JUR_LULUS']))->row_array();
$bayar_daftar = $this->model_crud->selectData('KEUANGAN_PEMBAYARAN_PENDAFTARAN', array('nodaf' => $biodata['nodaf']))->row_array();
$jenis_mhs = $this->model_crud->selectData('MASTER_JENISMHS', array('ID_JENISMHS' => $biodata['ID_JENISMHS']))->row_array();
?>
<div class="card">
	<div class="card-body">
		<?php
		if ($biodata['syarat2'] == 'Belum') $status = 'Belum diproses';
		elseif ($biodata['syarat2'] == 'Sudah' && $biodata['ket_lulus'] == 'Lulus' && $biodata['JUR_LULUS'] != '') $status = "Diterima";
		elseif ($biodata['syarat2'] == 'Sudah' && $biodata['ket_lulus'] == 'Tidak' || $biodata['JUR_LULUS'] != '') $status = "Belum Diterima";
		elseif ($biodata['syarat2'] == 'Sudah' && $biodata['ket_lulus'] == '' || $biodata['JUR_LULUS'] != '') $status = "Belum Diterima";
		elseif ($biodata['syarat2'] == 'Tidak diterima') $status = "Tidak Diterima";
		else $status = $biodata['syarat2'];
		if ($biodata['status_registrasi'] == 'Hanya Daftar') $status_reg = 'Reguler';
		elseif ($biodata['status_registrasi'] == 'Angsur') $status_reg = "Reguler";
		elseif ($biodata['status_registrasi'] == 'Lunas') $status_reg = "Reguler";
		else $status_reg = $biodata['status_registrasi'];
		$gel = $this->model_crud->selectData('data_gelombang', array('kode' => $biodata['gelombang']))->row_array();
		$tgldaftar = date('d-m-Y', strtotime($biodata['tgldaftar']));
		?>
		<!-- INFORMASI PENDAFTARAN -->
		<h4 class="py-2">Pendaftaran <span class="font-weight-bolder"><?= $status_reg ?></span></h4>
		<div class="mb-0">
			<?php if (empty($biodata)) { ?>
				<div class="text-center my-1">
					<img class="img-fluid" src="<?php echo base_url('assets/main/images/notfound.png'); ?>" alt="" width="350">
					<h4>Anda Belum Melakukan Pendaftaran</h4>
					<hr class="mb-3 mt-1" />
					<a class="btn btn-primary" href="<?= base_url() ?>main_user/daftar?act=step1" alt="">Formulir Daftar</a>
				</div>
			<?php } else { ?>
				<?php
				//if (!empty($biodata['va'])) {
				//$va = $biodata['va'];
				//} else {
				//$va = "<button class='btn btn-sm btn-warning' id='generate_va' nodaf='" . $biodata['nodaf'] . "'>Generate VA</button>";
				//}
				?>
				<table id="example" class="table table-sm mb-2">
					<tbody>
						<tr>
							<td>NODAF</td>
							<td style="font-weight: 600"><?= $biodata['nodaf'] ?></td>
						</tr>
						<tr>
							<td>NO.VA MUAMALAT</td>
							<td style="font-weight: 600"><a href="#" class="copy" data-toggle="tooltip" title="Copy ke Clipboard" data-clipboard data-clipboard-action="copy" data-clipboard-text="<?= $biodata['va']; ?>"><?= $biodata['va']; ?></a></td>
						</tr>
						<tr>
							<td>BIAYA DAFTAR / STATUS</td>
							<td style="font-weight: 600">
								<?php $biayadaftar = $biodata['BIAYA_PENDAFTARAN'];
								echo "Rp" . number_format("$biayadaftar", 2, ",", "."); ?>
								/
								<?php
								if ($bayar_daftar['STATUS'] == 1) {
									$status = "<div class='badge badge-success'>Dibayar</div>";
								} else {
									$status = "<div class='badge badge-danger'>Belum Dibayar</div>";
								}
								echo $status;
								?>
								/
								<!-- Button trigger modal -->
								<a href="#" class="font-weight-normal" data-toggle="modal" data-target="#bModal">
									Panduan Bayar
								</a>
								<!-- Modal -->
								<div class="modal fade" id="bModal" tabindex="-1" aria-labelledby="bModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-dialog-scrollable">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="bModalLabel">TATA CARA PEMBAYARAN</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body font-weight-normal">
												Calon Mahasiswa dapat melakukan pembayaran biaya pendaftaran dengan beberapa cara sebagai berikut:<br />
												<strong>Rekening Muamalat</strong><br />
												1. Buka ATM / e-Banking / Internet Banking<br />
												2. Pilih menu Transfer ke sesama Muamalat<br />
												3. Masukkan 16 Digit no VA (Virtual Account) anda <?= $biodata['va']; ?><br />
												4. Ketikkan nominal transfer (<?php $biayadaftar = $biodata['BIAYA_PENDAFTARAN'];
								echo "Rp" . number_format("$biayadaftar", 2, ",", "."); ?>)*<br />
												<span class="font-weight-normal text-small pl-2">*Biaya Admin VA Rp.2000</span><br/>
												5. Selanjutnya pastikan nama yang tertera telah sesuai dan nominal transfer sesuai kriteria<br />
												6. Lakukan transfer<br />
												<br />
												<strong>Rekening Non-Muamalat (Setiap Sistem Mungkin Berbeda)</strong><br />
												1. Buka ATM / e-Banking / Internet Banking<br />
												2. Pilih menu Transfer ke Bank Lain<br />
												3. Pilih Muamalat (Kode Bank : 147)<br />
												3. Masukkan 16 Digit no VA (Virtual Account) anda <?= $biodata['va']; ?><br />
												4. Ketikkan nominal transfer (<?php $biayadaftar = $biodata['BIAYA_PENDAFTARAN'];
								echo "Rp" . number_format("$biayadaftar", 2, ",", "."); ?>)*<br />
												<span class="font-weight-normal text-small pl-2">*Biaya Admin VA Rp.2000</span><br/>
												5. Selanjutnya pastikan nama yang tertera telah sesuai dan nominal transfer sesuai kriteria<br />
												6. Lakukan transfer
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
											</div>
										</div>
									</div>
								</div>
								<!--modal-->
								<br/>
								<span class="font-weight-normal text-small">*Biaya Admin VA Rp.2000</span>
							</td>
						</tr>
						<?php if (($biodata['status_registrasi'] == 'KIP-Kuliah') || ($biodata['status_registrasi'] == 'KIP-Kuliah2')) { ?>
							<tr>
								<td>NO.KIPK</td>
								<td style="font-weight: 600"><?= $biodata['no_kipk'] ?></td>
							</tr>
						<?php } ?>
						<tr>
							<td>NAMA LENGKAP</td>
							<td style="font-weight: 600"><?= $biodata['nama'] ?></td>
						</tr>
						<tr>
							<td>PILIHAN</td>
							<td style="font-weight: 600">1.<?= $pilihan1['NAMA_DEPT'] ?> / 2.<?= $pilihan2['NAMA_DEPT'] ?> / 3.<?= $pilihan3['NAMA_DEPT'] ?></td>
						</tr>
						<tr>
							<td>GELOMBANG / TGL DAFTAR</td>
							<td style="font-weight: 600"><?= $gel['gelombang'] ?> / <?= $tgldaftar ?></td>
						</tr>
						<tr>
							<td>JUR LULUS</td>
							<td style="font-weight: 600"><?php echo (isset($jur_lulus) ? $jur_lulus['NAMA_DEPT'] : "-"); ?></td>
						</tr>
						<!--<tr>
								<td>STATUS</td>
								<td style="font-weight: 600">
									<? //=$status;
									?> 
									<?php //if (($biodata['ket_lulus']=='Lulus') && ($biodata['JUR_LULUS']!='')) { 
									?>
										<i class="fa fa-check-circle" aria-hidden="true" style="color: #0d6efd;" data-toggle="tooltip" title="Verified"></i>
									<?php //} 
									?>
								</td>
							</tr>-->
					</tbody>
				</table>
				<!-- STATUS PENDAFTARAN -->
				<h5>Status</h5>
				<?php if (empty($biodata['nikktp'])) : ?>
					<span class="text-warning"><strong><i class="fa fa-exclamation-triangle"></i></strong> Biodata diri Belum diisi</span><br />
				<?php endif ?>
				<?php if (empty($biodata['sekolah'])) : ?>
					<span class="text-warning"><strong><i class="fa fa-exclamation-triangle"></i></strong> Data Sekolah Belum diisi</span><br />
				<?php endif ?>
				<?php if (empty($biodata['alamat'])) : ?>
					<span class="text-warning"><strong><i class="fa fa-exclamation-triangle"></i></strong> Data Alamat Belum diisi</span><br />
				<?php endif ?>
				<?php if (empty($biodata['NAMA_ORTU'])) : ?>
					<span class="text-warning"><strong><i class="fa fa-exclamation-triangle"></i></strong> Data Orang Tua Belum diisi</span>
				<?php endif ?>
				<div class="card py-0 my-2">
					<div class="row d-flex justify-content-center">
						<div class="col-12">
							<ul id="progressbar" class="text-center">
								<li class="<?php if (!empty($biodata['nodaf'] && $biodata['sekolah'] && $biodata['alamat'] && $biodata['NAMA_ORTU'])) echo "activ"; ?> step0"></li>
								<li class="<?php if ($biodata['syarat1'] == 'Lengkap') echo "activ"; ?> step0"></li>
								<li class="<?php if ($biodata['syarat2'] == 'Sudah') echo "activ"; ?> step0"></li>
								<li class="<?php if (($biodata['ket_lulus'] == 'Lulus') && ($biodata['JUR_LULUS'] != '')) echo "activ"; ?> step0"></li>
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
				<!-- CETAK PENDAFTARAN -->
				<h5>Cetak</h5>
				<div class="row mb-3">
					<div class="col">
						<?php if (($biodata['syarat2'] == 'Sudah') && $biodata['TGL_TES'] != '') { ?>
							<a href="<?= base_url() ?>download/kartu" target="_blank()">
								<div class="card text-white bg-info text-center">
									<div class="card-body">
										<i class="fa fa-print fa-2x"></i><br />
										Kartu Pendaftaran
									</div>
								</div>
							</a>
						<?php } ?>
					</div>
					<div class="col">
						<?php if (($biodata['syarat1'] == 'Lengkap') && $biodata['syarat2'] == 'Sudah') { ?>
							<!--<?php //if (($biodata['ket_lulus']=='Lulus') and $biodata['JUR_LULUS']!='' ) { 
								?>-->
							<a href="<?= base_url() ?>download/surat_lolos_seleksi" target="_blank()">
								<div class="card text-white bg-success text-center">
									<div class="card-body">
										<i class="fa fa-print fa-2x"></i><br />
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

<script src="<?= base_url('assets/js/clipboard.min.js'); ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/js/clipboard.highlight.pack.min.js'); ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/js/clipboard.tooltips.js'); ?>" type="text/javascript"></script>
<script>
	var clipboardDemos = new ClipboardJS('[data-clipboard]');
	clipboardDemos.on('success', function(e) {
		e.clearSelection();
		//console.info('Action:', e.action);
		console.info('Text:', e.text);
		//console.info('Trigger:', e.trigger);
		showTooltip(e.trigger, 'Copied! to Clipboard');
	});
	clipboardDemos.on('error', function(e) {
		console.error('Action:', e.action);
		console.error('Trigger:', e.trigger);
		showTooltip(e.trigger, fallbackMessage(e.action));
	});
</script>

<!--<script type="text/javascript">
	var $jquery = jQuery.noConflict();
	$jquery(document).ready(function() {
		$jquery("#generate_va").click(function(event) {
			event.preventDefault()
			var nodaf = $jquery(this).attr('nodaf');
			var url = 'main_user/generate_va';
			$jquery.ajax({
				type: 'post',
				url: '<? //= base_url() 
						?>' + url,
				data: {
					nodaf: nodaf
				},
				cache: false,
				success: function(data) {
					$jquery("#nomor_va").html(data);
				}
			})
		});
	});
</script>-->