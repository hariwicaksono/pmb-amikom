<!-- Dropzone css -->
<link rel="stylesheet" href="<?=base_url()?>assets/dropzone/dropzone.css"/>
<link rel="stylesheet" href="<?=base_url()?>assets/dropzone/basic.css"/>
<script src="<?=base_url()?>assets/dropzone/dropzone.js"></script>   

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
#dropzone {
  margin-bottom: 3rem; }

.dropzone {
  border: 2px dashed #0087F7;
  border-radius: 5px;
  background: white; }
  .dropzone .dz-message {
    font-weight: 400; }
    .dropzone .dz-message .note {
      font-size: 0.8em;
      font-weight: 200;
      display: block;
      margin-top: 1.4rem; }
</style>

<div class="card">
    <div class="card-body">

    <?php if (empty($bukti)) { ?>
    <div class="alert alert-secondary" style="background-color: #fafafa;">
    <p class="blink mb-0" style="font-size:16px;font-weight:600;color:red;animation: blink 2s linear infinite"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Perhatian! Harap Mengupload Bukti Bayar (Struk Transfer Pendaftaran).<br/><span style="font-size:24px;font-weight:700">Biaya Pendaftaran Sebesar Rp.150.000,-</span></p>
    <p class="mb-2" style="font-size:16px;font-weight:600;color:red;">Setelah Mengupload Bukti Bayar (Struk Transfer Pendaftaran) harap konfirmasi via WA dengan no. 0858-48888-445.</p>
        <div>
        <b>Dibayarkan Via Transfer ke:</b>
        <br />
        Bank MANDIRI Nomor Rekenin 18000-2299-2244 - Universitas Amikom Purwokerto
        <br/>
        Bank BRI Nomor Rekening 0077-01-001-851302 - Universitas Amikom Purwokerto
        <br/>
        Bank MUAMALAT Nomor Rekening 541-008-1993 - Yayasan Amikom Purwokerto
        </div>
    </div>

    <?php } ?> 

    <div class="row">
    <div class="col-sm-9">

    <div class="row">
    <div class="col-sm-3">
    <h5>1. BUKTI BAYAR</h5>
    </div>
    <div class="col-sm-9">
    <?php if (empty($bukti)) { ?>
    <form class="dropzone" action="<?=base_url()?>main_user/post_dokumen?act=bukti_bayar" enctype="multipart/form-data" id="buktiDropzone">
        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
        <input type="hidden" name="nodaf" value="<?=$biodata['nodaf']?>">
        <div class="fallback">
        <input type="file" name="bukti_bayar">
        </div>   
    </form>
    <?php } else { ?>
        <div id="data_bukti">
       
        </div>  
    <?php } ?>
    </div>
    </div>

    <hr class="my-3"/>

    <div class="row">
    <div class="col-sm-3">
    <h5>2. FOTO</h5>
    </div>
    <div class="col-sm-9">
    <?php if (empty($foto)) { ?>
    <form class="dropzone" action="<?=base_url()?>main_user/post_dokumen?act=foto" enctype="multipart/form-data" id="fotoDropzone">
        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
        <input type="hidden" name="nodaf" value="<?=$biodata['nodaf']?>">
        <div class="fallback">
        <input type="file" name="foto">
        </div>  
    </form>
    <?php } else { ?>
        <div id="data_foto">
           
        </div>  
    <?php } ?>
    </div>
    </div>

    <hr class="my-3"/>

    <div class="row">
    <div class="col-sm-3">
    <h5>3. KTP</h5>
    </div>
    <div class="col-sm-9">
    <?php if (empty($ktp)) { ?>
    <form class="dropzone" method="post" action="<?=base_url()?>main_user/post_dokumen?act=ktp" enctype="multipart/form-data" id="ktpDropzone">
        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
        <input type="hidden" name="nodaf" value="<?=$biodata['nodaf']?>">
        <div class="fallback">
        <input type="file" name="ktp">
        </div> 
    </form>
    <?php } else { ?>
        <div id="data_ktp">
           
           </div> 
    <?php } ?>
    </div>
    </div>

    <hr class="my-3"/>

    <div class="row">
    <div class="col-sm-3">
    <h5>4. IJAZAH</h5>
    </div>
    <div class="col-sm-9">
    <?php if (empty($ijazah)) { ?>
    <form class="dropzone" method="post" action="<?=base_url()?>main_user/post_dokumen?act=ijazah" enctype="multipart/form-data" id="ijazahDropzone">
        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
        <input type="hidden" name="nodaf" value="<?=$biodata['nodaf']?>">
        <div class="fallback">
        <input type="file" name="ijazah">
        </div>     
    </form>
    <?php } else { ?>
        <div id="data_ijazah">
           
        </div> 
    <?php } ?>
    </div>
    </div>

    <hr class="my-3"/>

    <div class="row">
    <div class="col-sm-3">
    <h5>5. SKHU</h5>
    </div>
    <div class="col-sm-9">
    <?php if (empty($skhu)) { ?>
    <form class="dropzone" method="post" action="<?=base_url()?>main_user/post_dokumen?act=skhu" enctype="multipart/form-data" id="skhuDropzone">
        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
        <input type="hidden" name="nodaf" value="<?=$biodata['nodaf']?>">
        <div class="fallback">
        <input type="file" name="skhu">
        </div>    
    </form>
    <?php } else { ?>
        <div id="data_skhu">
           
        </div> 
    <?php } ?>
    </div>
    </div>


    </div>

    <div class="col-sm-3">
        
    <div class="alert alert-warning">
        <small class="text-break">
        <h6 class="alert-heading">Informasi</h6>
            1. File yang diunggah berupa PDF/PNG/JPG/JPEG. Max file berukuran 40MB.<br/>
            2. Anda dapat menghapus dengan cara klik tombol hapus. Kemudian unggah kembali file yang benar.
        </small>
    </div> 
    </div>

    </div>


    </div>
</div>

<script>
    var $jquery=jQuery.noConflict();
    Dropzone.autoDiscover = false;
            $jquery(document).ready(function () {
                update_bukti();
            });

            if($jquery("#buktiDropzone").length){
                Dropzone.options.buktiDropzone = {
                    paramName: "bukti_bayar",
                    maxFiles: 1,
                    success: function (file, data) {
                        location.reload(false);
                    }
                }
                
                var buktiDropzone = new Dropzone("#buktiDropzone");
                buktiDropzone.on("complete", function (file) {
                    buktiDropzone.removeFile(file);
                });
            }
            function update_bukti() {
                $jquery.ajax({
                    url: '<?=base_url()?>main_user/upload_data_bukti',
                    type  : 'GET',
                    dataType: 'html',
                    success: function (data) {
                        $jquery('#data_bukti').html(data);
                    }
                });
            }

</script>
<script>
    var $jquery=jQuery.noConflict();
    Dropzone.autoDiscover = false;
            $jquery(document).ready(function () {
                update_foto();
            });

            if($jquery("#fotoDropzone").length){
                Dropzone.options.fotoDropzone = {
                    paramName: "foto",
                    maxFiles: 1,
                    success: function (file, data) {
                        location.reload(false);
                    }
                }
                
                var fotoDropzone = new Dropzone("#fotoDropzone");
                fotoDropzone.on("complete", function (file) {
                    fotoDropzone.removeFile(file);
                });
            }
            function update_foto() {
                $jquery('#data_foto').empty();
                $jquery.ajax({
                    url: '<?=base_url()?>main_user/upload_data_foto',
                    type  : 'GET',
                    dataType: 'html',
                    success: function (data) {
                        $jquery('#data_foto').html(data);
                    }
                });
            }

</script>
<script>
    var $jquery=jQuery.noConflict();
    Dropzone.autoDiscover = false;
            $jquery(document).ready(function () {
                update_ktp();
            });
    
            if($jquery("#ktpDropzone").length){
                Dropzone.options.ktpDropzone = {
                    paramName: "ktp",
                    maxFiles: 1,
                    // saat upload file berhasil maka jalankan fungsi update 
                    success: function (file, data) {
                        location.reload(false);
                    }
                }
        
                var ktpDropzone = new Dropzone("#ktpDropzone");
        
                //jika proses upload selesai, maka hapus field atau thumbnail upload
                ktpDropzone.on("complete", function (file) {
                    ktpDropzone.removeFile(file);
                });
            }
    
            //fungsi tampil data
            function update_ktp() {
                $jquery.ajax({
                    url: '<?=base_url()?>main_user/upload_data_ktp',
                    type: 'get',
                    dataType: 'html',
                    success: function (data) {
                        $jquery('#data_ktp').html(data);
                    }
                });
            }
    
</script>
<script>
    var $jquery=jQuery.noConflict();
    Dropzone.autoDiscover = false;
            $jquery(document).ready(function () {
                update_ijazah();
            });
    
            if($jquery("#ijazahDropzone").length){
                Dropzone.options.ijazahDropzone = {
                    paramName: "ijazah",
                    maxFiles: 1,
                    // saat upload file berhasil maka jalankan fungsi update 
                    success: function (file, data) {
                        location.reload(false); 
                    }
                }
        
                var ijazahDropzone = new Dropzone("#ijazahDropzone");
        
                //jika proses upload selesai, maka hapus field atau thumbnail upload
                ijazahDropzone.on("complete", function (file) {
                    ijazahDropzone.removeFile(file);
                });
            }
    
            //fungsi tampil data
            function update_ijazah() {
                $jquery.ajax({
                    url: '<?=base_url()?>main_user/upload_data_ijazah',
                    type: 'get',
                    dataType: 'html',
                    success: function (data) {
                        $jquery('#data_ijazah').html(data);
                    }
                });
            }
    
</script>
<script>
    var $jquery=jQuery.noConflict();
    Dropzone.autoDiscover = false;
            $jquery(document).ready(function () {
                update_skhu();
            });
           
            if($jquery("#skhuDropzone").length){
                // myDropzone adalah id form 
                Dropzone.options.skhuDropzone = {
                    paramName: "skhu",
                    maxFiles: 1,
                    // saat upload file berhasil maka jalankan fungsi update 
                    success: function (file, data) {
                        location.reload(false); 
                    }
                }

                var skhuDropzone = new Dropzone("#skhuDropzone");
            
                //jika proses upload selesai, maka hapus field atau thumbnail upload
                skhuDropzone.on("complete", function (file) {
                    skhuDropzone.removeFile(file);
                });
            }
    
            //fungsi tampil data
            function update_skhu() {
                $jquery.ajax({
                    url: '<?=base_url()?>main_user/upload_data_skhu',
                    type: 'get',
                    dataType: 'html',
                    success: function (data) {
                        $jquery('#data_skhu').html(data);
                    }
                });
            }
       
</script>