<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">Hasil Ujian Online PMB</h3>
    </div>
    
    <div class="panel-body text-center">
    <div class="row">
    <div class="col-md-8 col-md-offset-2">
    <h2><?php echo $biodata['nama'];?></h2>
    <hr/>
    <span>No Daftar: <strong><?php echo $biodata['nodaf'];?></strong></span><br/>
    <span>Username: <strong><?php echo $this->session->userdata['username'];?></strong></span><br/>
    <span>Tanggal Ujian: <strong><?php echo date('d-m-Y', strtotime($hasil_ujian->tanggal));?></strong></span><br/>
    <span>Hasil: <strong>Menunggu Proses Seleksi Selanjutnya</strong></span><br/>
    
    
    
    </div>
    </div>

    </div>
</div>