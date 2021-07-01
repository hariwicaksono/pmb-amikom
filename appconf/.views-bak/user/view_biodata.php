<style type="text/css">
    .form-horizontal .control-label{
    text-align: left;
    width: 15%;
}
</style>
<style>
 .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover {
 border:0;
 background-color:#fff;
 }
  .nav-tabs > li.active {
  border-bottom:3px solid #0d0682;
  }
  </style>
<style>
.breadcrumb {
        background: #ddd;
        /*display: inline-block;*/
        padding: 1px;
        padding-right: 18px;

    }

    .breadcrumb li {
        display: inline-block;
        background: white;
        padding: 0;
        position: relative;
        min-width:50px;
        text-decoration: none;
        -webkit-clip-path: polygon(0 0, calc(100% - 15px) 0, 100% 50%, calc(100% - 15px) 100%, 0 100%, 15px 50%);
        clip-path: polygon(0 0, calc(100% - 15px) 0, 100% 50%, calc(100% - 15px) 100%, 0 100%, 15px 50%);
        margin-right: -13px;
    }

    .breadcrumb li#last {
        -webkit-clip-path: polygon(0 0, calc(100% - 0px) 0, 100% 50%, calc(100% - 0px) 100%, 0 100%, 15px 50%);
        clip-path: polygon(0 0, calc(100% - 0px) 0, 100% 50%, calc(100% - 0px) 100%, 0 100%, 15px 50%);
    }

    .breadcrumb li:hover {
        color: white;
        background: #fff;
    }

    /* first link should not have anything cliped on the left side */
    .breadcrumb li:first-child {
        -webkit-clip-path: polygon(0 0, calc(100% - 15px) 0, 100% 50%, calc(100% - 15px) 100%, 0 100%);
        clip-path: polygon(0 0, calc(100% - 15px) 0, 100% 50%, calc(100% - 15px) 100%, 0 100%);
    }

    .label{
        height: 100%;
        width: 100%;
    }


</style>
<div class="divide10" style="margin-top: 80px;"></div>
        <div class="wide-img-showcase">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcrumb wow animated fadeInLeft">
                        <?php
                        $gelombang=$this->mgelombang->cek_daftar(array('thn_akademik'=>$tahun_pmb));
                        if (empty($gelombang)) {
                            ?>
                             <div class="tab-content" style="min-height: 500px;">
                        <div class="tab-pane fade in active">
                            <?php
                            echo "<b>Maaf Pendaftaran Telah Ditutup</b>";
                            ?>
                        </div>
                    </div>
                            <?php
                         }else{
                        ?>
                      <ul class="nav nav-tabs">

                        <li <?php if ($this->uri->segment(2)=='') echo 'class=active' ?> id="ribbon1"><a href="<?=base_url()?>main_user?act=det"><i class="fa fa-info-circle"></i> Profil</a></li>

                        <li <?php if ($this->uri->segment(2)=='upload') echo "class=active";?> id="ribbon2" ><a  
                        <?php if (!empty($biodata)) { ?> href="<?=base_url()?>main_user/upload?act=det" <?php } else { ?>  onclick="alert('Isi Biodata Terlebih Dahulu')" <?php }  ?>  ><i class="fa fa-info-circle"></i>  Upload Dokumen</a></li>

                        <!--<li <?php //if ($this->uri->segment(2)=='mulaiujian') echo "class=active";?> id="ribbon3" ><a  
                        <?php //if (!empty($bukti)) { ?> href="<?=base_url()?>main_user/mulaiujian?act=det" <?php //} else { ?>  onclick="alert('Unggah Bukti Bayar PMB Terlebih Dahulu')" <?php //}  ?>  ><i class="fa fa-info-circle"></i>  Ujian Online</a></li>-->

                        <li <?php if ($this->uri->segment(2)=='mulaiujian') echo "class=active";?> id="ribbon3" ><a  
                        <?php if (($biodata['syarat2']=='Sudah')) { ?> href="<?=base_url()?>main_user/mulaiujian?act=det" <?php } else { ?>  onclick="alert('Upload Dokumen terlebih dahulu, Mohon tunggu Dokumen anda diproses oleh Petugas')" <?php }  ?>  ><i class="fa fa-info-circle"></i>  Ujian Online</a></li>

                        <li <?php if ($this->uri->segment(2)=='info') echo "class=active";?> id="ribbon4" ><a  <?php if (!empty($biodata)) { ?> href="<?=base_url()?>main_user/info?act=det" <?php } else { ?>  onclick="alert('Isi Biodata Terlebih Dahulu')" <?php }  ?>  ><i class="fa fa-info-circle"></i> Informasi</a></li>
                      </ul>
                      <div class="tab-content">
                        <div class="tab-pane fade in active">
                            <?php  $info=$this->session->flashdata('info');
                            if (!empty($info)) { ?>
                              <div class="alert alert-success alert-dismissable" role="alert">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                  <?=$info?>
                              </div>
                            <?php       
                            }
                            if ($this->uri->segment(2)=='') $this->load->view('user/profil.php');
                              elseif ($this->uri->segment(2)=='upload') $this->load->view('user/upload_dokumen.php'); 
                              elseif ($this->uri->segment(2)=='info') $this->load->view('user/info.php');
                              elseif ($this->uri->segment(2)=='mulaiujian') $this->load->view('user/mulai_ujian.php');
                              elseif ($this->uri->segment(2)=='ujianonline') $this->load->view('user/ujian_online.php');
                              elseif ($this->uri->segment(2)=='hasilujian') $this->load->view('user/hasil_ujian.php');
                              elseif ($this->uri->segment(2)=='lihatattempt') $this->load->view('user/lihatattempt.php');
                              elseif ($this->uri->segment(2)=='lihatnilai') $this->load->view('user/lihatnilai.php');
                            ?>
                        </div>
                      </div>
                        <?php
                         } 
                        ?>
                    </div>
                   
                </div>
</div>
</div>