<div class="card">
    <div class="card-body">
    <h4 class="card-title">Hasil Ujian Online</h4>

    <div class="alert alert-warning" role="alert">
    <h2 class="mb-3"><?php echo $biodata['nama'];?></h2>
    <span>No Daftar: <strong><?php echo $biodata['nodaf'];?></strong></span><br/>
    <span>Username: <strong><?php echo $this->session->userdata['username'];?></strong></span><br/>
    <span>Tanggal Ujian: <strong><?php echo date('d-m-Y', strtotime($hasil_ujian->tanggal));?></strong></span><br/>
    <span>Hasil: <strong>Menunggu Proses Seleksi Selanjutnya</strong></span>
    </div>
    </div>


    </div>
</div>