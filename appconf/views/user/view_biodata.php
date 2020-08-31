
<div class="container">
<div class="mt-2 mb-2">
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

        <li class="nav-item" id="ribbon1" >
        <a class="nav-link <?php if ($this->uri->segment(2)=='') echo "active";?>" href="<?=base_url()?>main_user/?act=det">Informasi</a></li>

        <li class="nav-item" id="ribbon2">
        <a class="nav-link <?php if ($this->uri->segment(2)=='profil') echo 'active' ?>" href="<?=base_url()?>main_user/profil?act=det">Formulir</a>
        </li>
    
        <li class="nav-item" id="ribbon3" >
        <a class="nav-link <?php if ($this->uri->segment(2)=='upload') echo "active";?>" <?php if (!empty($biodata)) { ?> href="<?=base_url()?>main_user/upload?act=det" <?php } else { ?>  onclick="alert1();" <?php }  ?>  >Upload Dokumen</a></li>

        <li class="nav-item" id="ribbon4">
        <a class="nav-link <?php if ($this->uri->segment(2)=='mulaiujian') echo "active";?>" <?php if (($biodata['syarat2']=='Sudah')) { ?> href="<?=base_url()?>main_user/mulaiujian?act=det" <?php } else { ?>  onclick="alert2();" <?php }  ?>  >Ujian Online</a></li>

        
        </ul>
        <div class="tab-content">
        <div class="tab-pane fade show active">

            <?php  $info=$this->session->flashdata('info');
            if (!empty($info)) { ?>
                <div class="px-3">
                <div class="alert alert-success alert-dismissable mb-0" role="alert">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?=$info?>
                </div>
                </div>
            <?php       
            }
            if ($this->uri->segment(2)=='') $this->load->view('user/info.php');
                elseif ($this->uri->segment(2)=='profil') $this->load->view('user/profil.php'); 
                elseif ($this->uri->segment(2)=='upload') $this->load->view('user/upload_dokumen.php'); 
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
<script type="text/javascript">

        var $jquery=jQuery.noConflict();
        function alert1(){
        $jquery.notify({
                        title: "<strong>Perhatian!</strong>",
                        message: "Isi Biodata Terlebih Dahulu"
                    },{
                        type: 'danger'
                    });
        };
        function alert2(){
        $jquery.notify({
                        title: "<strong>Perhatian!</strong>",
                        message: "Upload Dokumen terlebih dahulu, Mohon tunggu Dokumen anda diproses oleh Petugas"
                    },{
                        type: 'danger'
                    });
        };
</script>     