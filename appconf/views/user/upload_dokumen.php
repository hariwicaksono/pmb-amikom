<style type="text/css">
form input[type="file"] {
display: block;
color: transparent;
padding-left: 10px;
}
@keyframes blink{
0%{opacity: 0;}
50%{opacity: .5;}
100%{opacity: 1;}
}
</style>

<script type="text/javascript">
var $jfile=jQuery.noConflict();
$jfile(function () {
$jfile('input[type="file"]').change(function () {
if ($jfile(this).val() != "") {
$jfile(this).css('color', '#333');
}else{
$jfile(this).css('color', 'transparent');
}
});
})
</script>

<div class="card">
    <div class="card-header card-header-borderless">
        <strong>Upload Dokumen</strong>
    </div>
    <div class="card-body">
    
    <?php if (empty($bukti)) { ?>
        <div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
        <span class="blink" style="font-size:14px;font-weight:600;color:red;animation: blink 2s linear infinite">Harap Mengupload Bukti Bayar (Struk Transfer Pendaftaran) <br />
        Setela Mengupload Bukti Bayar (Struk Transfer Pendaftaran) harap konfirmasi via WA dengan no. 0858-48888-445. </span>
    </div>
    <?php } ?> 
    
    <div class="row">
  <div class="col-md-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">
          <img src="<?=base_url()?>assets/main/images/file.png" width="25"> PEMBAYARAN</a>
      <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">
          <img src="<?=base_url()?>assets/main/images/foto.png" width="25"> FOTO</a>
      <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">
      <img src="<?=base_url()?>assets/main/images/ktp.png" width="25"> KTP</a>
      <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">
      <img src="<?=base_url()?>assets/main/images/ijazah.png" width="25"> IJAZAH</a>
      <a class="nav-link" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">
      <img src="<?=base_url()?>assets/main/images/buku.png" width="25"> SKHU</a>

    </div>
  </div>
  <div class="col-md-9">
    <div class="tab-content" id="v-pills-tabContent">
    
      <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
      <?php if (empty($bukti)) { ?>
                    <form class="form-horizontal" method="post" action="<?=base_url()?>main_user/post_dokumen?act=bukti_bayar" enctype="multipart/form-data" id="form">
                        <input type="hidden" name="nodaf" value="<?=$biodata['nodaf']?>">
                        <center>
                            <b>BUKTI BAYAR</b>
                        <br/>
                        <label for="fileToUpload5">
                            <img src="<?=base_url()?>assets/main/images/file.png" width="100">
                        </label>
                        </center>
                        <div class="custom-file mb-3">
                        <input type="file" name="bukti_bayar" class="custom-file-input" id="fileToUpload5">
                        <label class="custom-file-label" for="fileToUpload5">Choose file</label>
                        </div>
                        <button class="btn btn-primary" style="width: 100%;">Unggah</button>
                        
                    </form>
                <?php } else { ?>
                    <center>
                        <b>BUKTI BAYAR</b>
                    <div class="my-3">
                    <a href="<?=base_url()?>dokumen/bukti_bayar/<?=$bukti['nama_dokumen']?>" target="pdf-frame" class="btn btn-info"><i class="fa fa-print"></i> Preview</a>
                    </div>
                    <input type="hidden" name="nama_dokumen" value="<?=$bukti['nama_dokumen']?>">
                    <a href="<?=base_url()?>main_user/post_dokumen?act=hapus&id=<?=$bukti['id_dokumen']?>" class="btn btn-danger" onclick="return confirm('Hapus dokumen ini?')"  style="width: 100%;">Hapus</a>
                    </center>
                <?php } ?>
            <div class="alert alert-primary mt-3 mb-0" style="font-weight:500">   
            <h4 class="alert-heading mb-2" style="font-weight:700">Biaya Pendaftaran Sebesar Rp.150.000,-</h4>
                Dibayarkan Via :
                <br />
                1. Bank MUAMALAT 541-008-0445 a/n Universitas Amikom Purwokerto
                <br />
                2. Bank MANDIRI No Rek 18000-229922-44 a/n Universitas Amikom Purwokerto
            </div>
      </div>
      <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
      <?php if (empty($foto)) { ?>
                    <form class="form-horizontal" method="post" action="<?=base_url()?>main_user/post_dokumen?act=foto" enctype="multipart/form-data" id="form">
                        <input type="hidden" name="nodaf" value="<?=$biodata['nodaf']?>">
                        <center>
                            <b>FOTO</b>
                        <br/>
                        <label for="fileToUpload3">
                            <img src="<?=base_url()?>assets/main/images/foto.png" width="100">
                        </label>
                        </center>
                        <div class="custom-file mb-3">
                        <input type="file" name="foto" class="custom-file-input" id="fileToUpload3">
                        <label class="custom-file-label" for="fileToUpload3">Choose file</label>
                        </div>
                        <button class="btn btn-primary" style="width: 100%;">Unggah</button>
                        
                    </form>
                <?php } else { ?>
                    <center>
                    <b>FOTO</b>
                    <div class="my-3">
                    <a href="<?=base_url()?>dokumen/foto/<?=$foto['nama_dokumen']?>" target="pdf-frame" class="btn btn-info"><i class="fa fa-print"></i> Preview</a>
                    </div>
                    <input type="hidden" name="nama_dokumen" value="<?=$foto['nama_dokumen']?>">
                    <a href="<?=base_url()?>main_user/post_dokumen?act=hapus&id=<?=$foto['id_dokumen']?>" class="btn btn-danger" onclick="return confirm('Hapus dokumen ini?')"  style="width: 100%;">Hapus</a>
                    </center>
                <?php } ?>
      </div>
      <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
      <?php if (empty($ktp)) { ?>
                    <form class="form-horizontal" method="post" action="<?=base_url()?>main_user/post_dokumen?act=ktp" enctype="multipart/form-data" id="form">
                        <input type="hidden" name="nodaf" value="<?=$biodata['nodaf']?>">
                        <center>
                            <b>KTP</b>
                        <br/>
                        <label for="fileToUpload4">
                            <img src="<?=base_url()?>assets/main/images/ktp.png" width="150" height="100">
                        </label>
                        </center>
                        <div class="custom-file mb-3">
                        <input type="file" name="ktp" class="custom-file-input" id="fileToUpload4">
                        <label class="custom-file-label" for="fileToUpload4">Choose file</label>
                        </div>
                        <button class="btn btn-primary" style="width: 100%;">Unggah</button>
                        
                    </form>
                <?php } else { ?>
                    <center>
                        <b>KTP</b>
                        <div class="my-3">
                    <a href="<?=base_url()?>dokumen/ktp/<?=$ktp['nama_dokumen']?>" target="pdf-frame" class="btn btn-info"><i class="fa fa-print"></i> Preview</a>
                    </div>
                    <input type="hidden" name="nama_dokumen" value="<?=$ktp['nama_dokumen']?>">
                    <a href="<?=base_url()?>main_user/post_dokumen?act=hapus&id=<?=$ktp['id_dokumen']?>" class="btn btn-danger" onclick="return confirm('Hapus dokumen ini?')"  style="width: 100%;">Hapus</a>
                    </center>
                <?php } ?>
      </div>
      <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
      <?php if (empty($ijazah)) { ?>
                    <form class="form-horizontal" method="post" action="<?=base_url()?>main_user/post_dokumen?act=ijazah" enctype="multipart/form-data" id="form">
                        <input type="hidden" name="nodaf" value="<?=$biodata['nodaf']?>">
                        <center>
                            <b>IJAZAH</b>
                        <br/>
                        <label for="fileToUpload">
                            <img src="<?=base_url()?>assets/main/images/ijazah.png" width="100">
                        </label>
                        </center>
                        <div class="custom-file mb-3">
                        <input type="file" name="ijazah" class="custom-file-input" id="fileToUpload">
                        <label class="custom-file-label" for="fileToUpload">Choose file</label>
                        </div>
                        <button class="btn btn-primary" style="width: 100%;">Unggah</button>
                        
                    </form>
                <?php } else { ?>
                    
                    <center>
                    <b>IJAZAH</b>
                    <div class="my-3">
                    <a href="<?=base_url()?>dokumen/ijazah/<?=$ijazah['nama_dokumen']?>" target="pdf-frame" class="btn btn-info"><i class="fa fa-print"></i> Preview</a>
                    </div>
                    <input type="hidden" name="nama_dokumen" value="<?=$ijazah['nama_dokumen']?>">
                    <a href="<?=base_url()?>main_user/post_dokumen?act=hapus&id=<?=$ijazah['id_dokumen']?>" class="btn btn-danger" onclick="return confirm('Hapus dokumen ini?')"  style="width: 100%;">Hapus</a></center>
                        </center>
                <?php } ?>
      </div>
      <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
      <?php if (empty($skhu)) { ?>
                    <form class="form-horizontal" method="post" action="<?=base_url()?>main_user/post_dokumen?act=skhu" enctype="multipart/form-data" id="form">
                        <input type="hidden" name="nodaf" value="<?=$biodata['nodaf']?>">
                        <center>
                            <b>SKHU</b>
                        <br/>
                        <label for="fileToUpload2">
                            <img src="<?=base_url()?>assets/main/images/buku.png" width="100">
                        </label>
                        </center>
                        <div class="custom-file mb-3">
                        <input type="file" name="skhu" class="custom-file-input" id="fileToUpload2">
                        <label class="custom-file-label" for="fileToUpload2">Choose file</label>
                        </div>
                        <button class="btn btn-primary" style="width: 100%;">Unggah</button>
                       
                    </form>
                <?php } else { ?>
                    <center>
                        <b>SKHU</b>
                    <div class="my-3">
                    <a href="<?=base_url()?>dokumen/skhu/<?=$skhu['nama_dokumen']?>" target="pdf-frame" class="btn btn-info"><i class="fa fa-print"></i> Preview</a>
                    </div>
                    <input type="hidden" name="nama_dokumen" value="<?=$skhu['nama_dokumen']?>">
                    <a href="<?=base_url()?>main_user/post_dokumen?act=hapus&id=<?=$skhu['id_dokumen']?>" class="btn btn-danger" onclick="return confirm('Hapus dokumen ini?')"  style="width: 100%;">Hapus</a>
                    </center>
                <?php } ?>
      </div>
    </div>
    

  </div>
</div>

    
        
<div class="alert alert-info mt-3 mb-2">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        <small>
            Note :<br/>
            1. File yang diunggah berupa PDF, PNG, JPG atau JPEG. Maksimal file berukuran 4MB.<br/>
            2. Klik pada icon untuk mengunggah file yang diperlukan.<br />
            3. Setelah mengunggah file, klik tombol "Unggah".<br />
            4. Anda dapat menghapus dengan cara klik tombol hapus. Kemudian unggah kembali file yang benar.
        </small>
    </div> 



    </div>
</div>