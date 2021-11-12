<div class="container-fluid" data-aos="fade-down">
	<div class="card shadow mt-2 mb-2">
		<div class="card-body">

			<?php if ($modul == 'datamhs') {; ?>
				<div class="row">
					<div class="col-sm-12">
						<div>

							<ul style="list-style-type: none;text-align: center;font-weight: bold;">
								<li style="display: inline;"><?php echo anchor('page/datamhs/', '[Semua]'); ?></li>
								<?php
								foreach ($glmb as $data) {
								?>
									<li style="display: inline;"><?php echo anchor('page/datamhs/' . $data['kode'], '[' . $data['gelombang'] . ']'); ?></li>
								<?php
								}
								?>
							</ul>
							<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
								<thead>

									<th>NODAF</th>
									<th>NAMA</th>
									<th>GELOMBANG</th>
									<th>PILIHAN 1</th>
									<th>PILIHAN 2</th>
									<th>TANGGAL DAFTAR</th>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($datamhs as $data) {
										$tgl = date('d-m-Y', strtotime($data['tgldaftar']));
										$tgldaftar = $this->mkonversi->TglIndonesia($tgl);
										$tglujian = $this->mkonversi->TglIndonesia(date('Y-m-d', strtotime($data['TGL_TES'])));
									?>
										<tr>

											<td align="center"><?php echo $data['nodaf']; ?></td>
											<td>
												<a data-toggle="collapse" data-parent="#accordion" href="#demo<?= $no ?>" style="font-size:12px;color:red;font-weight: bold;"><?= $data['nama'] ?></a>
												<div id="demo<?= $no ?>" class="panel-collapse collapse">
													Tanggal Ujian : <?= $tglujian ?>
													<br />
													Keterangan Lulus : <?php if ($data['ket_lulus'] == '') echo '-';
																		else echo  $data['ket_lulus']; ?>
												</div>
											</td>
											<td><?php echo $data['nama_gel']; ?></td>
											<td><?php echo $data['PIL1']; ?></td>
											<td><?php echo $data['PIL2']; ?></td>
											<td align="center"><?php echo $tgldaftar; ?></td>
										</tr>
									<?php
										$no++;
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			<?php } elseif ($modul == 'Syarat_pendaftaran') { ?>
				<div class="row">

					<div class="col-sm-12">
						<h2>Syarat Pendaftaran</h2>
						<h3>Persyaratan:</h3>
						<p>1. Fotokopi / Scan nilai Rapor semester 1 s.d. 4</p>
						<p>2. Fotokopi / Scan piagam dan sertifikat (olahraga, karya ilmiah, seni, dll)</p>
						<p>3. Surat Rekomendasi dari sekolah yang menerangkan bakat dan minat siswa (bagi pendaftar jalur peminatan)</p>
						<p>4. Fotokopi / Scan KTP atau KK.</p>
						<p>&nbsp;</p>
						<p>A. Mahasiswa <strong>Reguler</strong></p>
						<ol type="a">
							<li>Fotocopy KK &amp; KTP (masing-masing 1 lembar)</li>
							<li>Fotocopy Ijazah &amp; Transkrip Nilai terakhir (masing-masing 1 lembar)</li>
							<li>Pas Photo berwarna ukuran 3 x 4 cm (2 lembar)</li>
							<li>Membayar Biaya Pendaftaran Rp 150.000, (seratus lima puluh ribu rupiah)</li>
						</ol>
						<p>B. Mahasiswa <strong>Transfer/pindahan</strong></p>
						<ol type="a">
							<li>Fotocopy KK &amp; KTP (masing-masing 1 lembar)</li>
							<li>Dari prodi yang sejalur dan minimal terakretasi <strong>B</strong></li>
							<li>Menyerahkan Transkrip dan Ijazah dari PT asal (Rangkap 2)</li>
							<li>Surat Pindah dari Perguruan Tinggi Asal</li>
							<li>Pas Photo berwarna ukuran 3 x 4 cm (2 lembar)</li>
							<li>Membayar Biaya Pendaftaran Rp 150.000, (seratus lima puluh ribu rupiah)</li>
							<li>Membayar biaya pengakuan SKS (Rp 10.000,- per SKS)</li>
						</ol>
						<p>C. Mahasiswa <strong>Kelas PNS</strong></p>
						<ol type="a">
							<li>Fotocopy KK &amp; KTP (masing-masing 1 lembar)</li>
							<li>Dari prodi yang sejalur dan minimal terakretasi <strong>B</strong></li>
							<li>Menyerahkan Transkrip dan Ijazah dari PT asal (Rangkap 2)</li>
							<li>Surat Ijin belajar dari perusahaan atau instansi</li>
							<li>Pas Photo berwarna ukuran 3 x 4 cm (2 lembar)</li>
							<li>Membayar Biaya Pendaftaran Rp 150.000, (seratus lima puluh ribu rupiah)</li>
						</ol>

					</div>
				</div>
			<?php
			} elseif ($modul == 'perlengkapan') {
			?>
				<div class="row">
					<div class="col-sm-12">

						<div class="wow animated fadeInDown" style="text-align: justify;">
							<h3>Perlengkapan Pelatihan Super Unggul</h3>
							<ol type="1">
								<li>Ketentuan Pakaian :</li>
								<ul>
									<li>Putra : Kemeja panjang warna putih, celana kain warna hitam, bersepatu (warna bebas) dan berdasi warna hitam</li>
									<li>Putri : Kemeja panjang warna putih, rok kain warna hitam, bersepatu (warna bebas) dan berdasi warna hitam (kecuali yang berjilbab)</li>
								</ul>
								<li>Membawa <b>Kertas Manila Warna Putih</b> Ukuran <b>20cm x 15cm</b> sebanyak <b>10 lembar</b></li>
								<li>Membawa <b>Spidol besar dan Spidol kecil</b> warna <b>Hitam atau Biru</b></li>
								<li>Membawa Perlengkapan alat tulis</li>
								<li>Membuat Co Card dengan format sebagai berikut :</li>
								<br />
								<center><b>CO CARD DIBUAT DARI KERTAS MANILA WARNA PUTIHUNTUK TALI PAKAI TALI BENANG KASUR</b></center>
								<br />
								<center><img src="<?= base_url() ?>files/co-card.PNG" style="width: 50%;"></center>
							</ol>
						</div>
					</div>
				</div>
			<?php
			} elseif ($modul == 'Calon_mahasiswa_baru') {
			?>
				<div class="content_title">
					<?php echo $content_title; ?> </div><br>
				<div class="isi_konten">
					<?php echo $isi_tupoksi; ?>
				</div>
			<?php
			} else {
			?>
				<div class="row">

					<div class="col-sm-12">

						<div class="wow animated fadeInDown" style="text-align: justify;">
							<?php echo $isi_tupoksi; ?>
						</div>
					</div>
				</div>
			<?php
			}
			?>

		</div>
	</div>
</div>
</div>