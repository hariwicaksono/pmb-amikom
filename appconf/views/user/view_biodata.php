<div class="row">
<div class="col-sm-12">
    <div class="card shadow">
        <?php
        $gelombang=$this->mgelombang->cek_daftar(array('thn_akademik'=>$tahun_pmb));
        if (empty($gelombang)) {
            ?>
        <div class="tab-content" style="min-height: 500px;">
        <div class="tab-pane fade active">
            <?php
            echo "<b>Maaf Pendaftaran Telah Ditutup</b>";
            ?>
        </div>
        </div>
        <?php
        }else{
        ?>
        <ul class="nav nav-tabs">

        <li class="nav-item" id="ribbon1">
        <a class="nav-link <?php if ($this->uri->segment(2)=='') echo 'active' ?>" href="<?=base_url()?>main_user?act=det"><i class="fa fa-info-circle"></i> Formulir</a>
        </li>
    
        <li class="nav-item" id="ribbon2" >
        <a class="nav-link <?php if ($this->uri->segment(2)=='upload') echo "active";?>" <?php if (!empty($biodata)) { ?> href="<?=base_url()?>main_user/upload?act=det" <?php } else { ?>  onclick="alert('Isi Biodata Terlebih Dahulu')" <?php }  ?>  ><i class="fa fa-info-circle"></i>  Upload Dokumen</a></li>

        <li class="nav-item" id="ribbon3">
        <a class="nav-link <?php if ($this->uri->segment(2)=='mulaiujian') echo "active";?>" <?php if (($biodata['syarat2']=='Sudah')) { ?> href="<?=base_url()?>main_user/mulaiujian?act=det" <?php } else { ?>  onclick="alert('Upload Dokumen terlebih dahulu, Mohon tunggu Dokumen anda diproses oleh Petugas')" <?php }  ?>  ><i class="fa fa-info-circle"></i>  Ujian Online</a></li>

        <li class="nav-item" id="ribbon4" >
        <a class="nav-link <?php if ($this->uri->segment(2)=='info') echo "active";?>" <?php if (!empty($biodata)) { ?> href="<?=base_url()?>main_user/info?act=det" <?php } else { ?>  onclick="alert('Isi Biodata Terlebih Dahulu')" <?php }  ?>  ><i class="fa fa-info-circle"></i> Informasi</a></li>
        </ul>
        <div class="tab-content">
        <div class="tab-pane fade show active">
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
                elseif ($this->uri->segment(2)=='profil') $this->load->view('user/profil.php');
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