  <style type="text/css">
      form input[type="file"] {
          display: block;
          color: transparent;
          padding-left: 10px;
        }
        .well{
            min-height: 200px;
        }
        @keyframes blink{
0%{opacity: 0;}
50%{opacity: .5;}
100%{opacity: 1;}
}
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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

                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Upload Dokumen</h3>
                                    </div>
                                    <div class="panel-body">
                                    <div class="alert alert-info">File yang diunggah berupa PDF, PNG, JPG atau JPEG. Maksimal file berukuran 4MB.</div>
                                    
                                  
                                     <?php if (empty($bukti)) { ?>
                                     <center>
                                     <span class="blink" style="font-size:14px;color:red;animation: blink 2s linear infinite">Harap Mengupload Bukti Bayar (Struk Transfer Pendaftaran) <br />
                                     Setela Mengupload Bukti Bayar (Struk Transfer Pendaftaran) harap konfirmasi via WA dengan no. 0858-48888-445. </span>
                                     </center>
                                     <?php } ?>                                  
                                   <div class="col-sm-1"></div>
                                   <div class="col-sm-2">
                                            <div class="well">
                                                <?php if (empty($bukti)) { ?>
                                                    <form class="form-horizontal" method="post" action="<?=base_url()?>main_user/post_dokumen?act=bukti_bayar" enctype="multipart/form-data" id="form">
                                                        <input type="hidden" name="nodaf" value="<?=$biodata['nodaf']?>">
                                                        <label for="fileToUpload5" style="text-align: center;">
                                                            <img src="<?=base_url()?>assets/main/images/file.png" width="70%" height="70%">
                                                        </label>
                                                        <input type="file" name="bukti_bayar" id="fileToUpload5">
                                                        <center>
                                                            <b>BUKTI BAYAR</b><br />
                                                            <button class="btn btn-primary" style="width: 100%;">Unggah</button>
                                                        </center>
                                                    </form>
                                                <?php } else { ?>
                                                    <center>
                                                        <b>BUKTI BAYAR</b>
                                                        <div style="padding: 10%"></div>
                                                    <a href="<?=base_url()?>dokumen/bukti_bayar/<?=$bukti['nama_dokumen']?>" target="pdf-frame" class="btn btn-info"><i class="fa fa-print"></i>Preview</a>
                                                    <div style="padding: 17%"></div>
                                                        <input type="hidden" name="nama_dokumen" value="<?=$bukti['nama_dokumen']?>">
                                                        <a href="<?=base_url()?>main_user/post_dokumen?act=hapus&id=<?=$bukti['id_dokumen']?>" class="btn btn-danger" onclick="return confirm('Hapus dokumen ini?')"  style="width: 100%;">Hapus</a>
                                                    </center>
                                                <?php } ?>
                                            </div>  
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="well">
                                                <?php if (empty($foto)) { ?>
                                                    <form class="form-horizontal" method="post" action="<?=base_url()?>main_user/post_dokumen?act=foto" enctype="multipart/form-data" id="form">
                                                        <input type="hidden" name="nodaf" value="<?=$biodata['nodaf']?>">
                                                        <label for="fileToUpload3" style="text-align: center;">
                                                            <img src="<?=base_url()?>assets/main/images/foto.png" width="70%" height="70%">
                                                        </label>
                                                        <input type="file" name="foto" id="fileToUpload3">
                                                        <center>
                                                            <b>FOTO</b><br />
                                                            <button class="btn btn-primary" style="width: 100%;">Unggah</button>
                                                        </center>
                                                    </form>
                                                <?php } else { ?>
                                                    <center>
                                                        <b>FOTO</b>
                                                    <div style="padding: 10%"></div>
                                                    <a href="<?=base_url()?>dokumen/foto/<?=$foto['nama_dokumen']?>" target="pdf-frame" class="btn btn-info"><i class="fa fa-print"></i>Preview</a>
                                                    <div style="padding: 17%"></div>
                                                        <input type="hidden" name="nama_dokumen" value="<?=$foto['nama_dokumen']?>">
                                                        <a href="<?=base_url()?>main_user/post_dokumen?act=hapus&id=<?=$foto['id_dokumen']?>" class="btn btn-danger" onclick="return confirm('Hapus dokumen ini?')"  style="width: 100%;">Hapus</a>
                                                    </center>
                                                <?php } ?>
                                            </div>  
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="well">
                                                <?php if (empty($ktp)) { ?>
                                                    <form class="form-horizontal" method="post" action="<?=base_url()?>main_user/post_dokumen?act=ktp" enctype="multipart/form-data" id="form">
                                                        <input type="hidden" name="nodaf" value="<?=$biodata['nodaf']?>">
                                                        <label for="fileToUpload4" style="text-align: center;">
                                                            <img src="<?=base_url()?>assets/main/images/ktp.png" width="90%" height="80px">
                                                        </label>
                                                        <input type="file" name="ktp" id="fileToUpload4">
                                                        <center>
                                                            <b>KTP</b><br />
                                                            <button class="btn btn-primary" style="width: 100%;">Unggah</button>
                                                        </center>
                                                    </form>
                                                <?php } else { ?>
                                                    <center>
                                                        <b>KTP</b>
                                                        <div style="padding: 10%"></div>
                                                    <a href="<?=base_url()?>dokumen/ktp/<?=$ktp['nama_dokumen']?>" target="pdf-frame" class="btn btn-info"><i class="fa fa-print"></i>Preview</a>
                                                    <div style="padding: 17%"></div>
                                                        <input type="hidden" name="nama_dokumen" value="<?=$ktp['nama_dokumen']?>">
                                                        <a href="<?=base_url()?>main_user/post_dokumen?act=hapus&id=<?=$ktp['id_dokumen']?>" class="btn btn-danger" onclick="return confirm('Hapus dokumen ini?')"  style="width: 100%;">Hapus</a>
                                                    </center>
                                             <?php } ?>
                                            </div>  
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="well">
                                                <?php if (empty($ijazah)) { ?>
                                                    <form class="form-horizontal" method="post" action="<?=base_url()?>main_user/post_dokumen?act=ijazah" enctype="multipart/form-data" id="form">
                                                        <input type="hidden" name="nodaf" value="<?=$biodata['nodaf']?>">
                                                        <label for="fileToUpload" style="text-align: center;">
                                                            <img src="<?=base_url()?>assets/main/images/ijazah.png" width="70%" height="70%">
                                                        </label>
                                                        <input type="file" name="ijazah" id="fileToUpload">
                                                        <center><b>IJAZAH</b> <br />
                                                            <button class="btn btn-primary" style="width: 100%;">Unggah</button>
                                                        </center>
                                                    </form>
                                                <?php } else { ?>
                                                    
                                                    <center>
                                                    <b>IJAZAH</b>
                                                    <div style="padding: 10%"></div>
                                                    <a href="<?=base_url()?>dokumen/ijazah/<?=$ijazah['nama_dokumen']?>" target="pdf-frame" class="btn btn-info"><i class="fa fa-print"></i>Preview</a>
                                                    <div style="padding: 17%"></div>
                                                        <input type="hidden" name="nama_dokumen" value="<?=$ijazah['nama_dokumen']?>">
                                                        <a href="<?=base_url()?>main_user/post_dokumen?act=hapus&id=<?=$ijazah['id_dokumen']?>" class="btn btn-danger" onclick="return confirm('Hapus dokumen ini?')"  style="width: 100%;">Hapus</a></center>
                                                        </center>
                                                <?php } ?>
                                            </div>  
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="well">
                                                <?php if (empty($skhu)) { ?>
                                                    <form class="form-horizontal" method="post" action="<?=base_url()?>main_user/post_dokumen?act=skhu" enctype="multipart/form-data" id="form">
                                                        <input type="hidden" name="nodaf" value="<?=$biodata['nodaf']?>">
                                                        <label for="fileToUpload2" style="text-align: center;">
                                                            <img src="<?=base_url()?>assets/main/images/buku.png" width="70%" height="60%">
                                                        </label>
                                                        <input type="file" name="skhu" id="fileToUpload2">
                                                        <center>
                                                            <b>SKHU</b><br />
                                                            <button class="btn btn-primary" style="width: 100%;">Unggah</button>
                                                        </center>
                                                    </form>
                                                <?php } else { ?>
                                                    <center>
                                                        <b>SKHU</b>
                                                        <div style="padding: 10%"></div>
                                                    <a href="<?=base_url()?>dokumen/skhu/<?=$skhu['nama_dokumen']?>" target="pdf-frame" class="btn btn-info"><i class="fa fa-print"></i>Preview</a>
                                                    <div style="padding: 17%"></div>
                                                        <input type="hidden" name="nama_dokumen" value="<?=$skhu['nama_dokumen']?>">
                                                        <a href="<?=base_url()?>main_user/post_dokumen?act=hapus&id=<?=$skhu['id_dokumen']?>" class="btn btn-danger" onclick="return confirm('Hapus dokumen ini?')"  style="width: 100%;">Hapus</a>
                                                    </center>
                                                <?php } ?>
                                            </div>  
                                        </div>
                                    
                                      <div class="col-sm-1"></div>
                                      <div class="col-sm-12">
                                        <div class="well">
                                            <font style="font-weight: bold;">
                                            <center>Biaya Pendaftaran Sebesar Rp.150.000,-</center>
                                            <br />
                                            Dibayarkan Via :
                                            <br />
                                           
                                            1. Bank MUAMALAT 541-008-0445 a/n Universitas Amikom Purwokerto
                                            <br />
                                            2. Bank MANDIRI No Rek 18000-229922-44 a/n Universitas Amikom Purwokerto
                                            <br />
                                            
                                            <br />
                                            Note :<br/>
                                            1. Klik pada icon untuk mengunggah file yang diperlukan.<br />
                                            2. Setelah mengunggah file, klik tombol "Unggah".<br />
                                            3. Peringatan! Jika terjadi kesalahan saat mengunggah file. Anda dapat menghapus dengan cara klik tombol hapus. Kemudian unggah kembali file yang benar.
                                            <br />
                                               
                                            </font>
                                        </div>
                                    </div>

                                

                                    </div>
                                </div>