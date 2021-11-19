
<div class="container-fluid">
<div class="my-3">
    <div class="card shadow">
        <?php
        $gelombang=$this->mgelombang->cek_daftar(array('thn_akademik'=>$tahun_pmb));
        if (!empty($gelombang)) {
            ?>
        <div class="tab-content" style="min-height: 500px;">
        <div class="tab-pane fade show active">
            <?php
            echo "<div class='row justify-content-center py-3'><h3>Maaf Pendaftaran Telah Ditutup</h3></div>";
            ?>
        </div>
        </div>
        <?php
        }else{
        ?>
        
        <ul class="nav nav-tabs nav-fill">

        <li class="nav-item" id="ribbon1" >
        <a class="nav-link <?php if ($this->uri->segment(2)=='') echo "active";?>" href="<?=base_url()?>main_user">Informasi</a>
        </li>

        <li class="nav-item" id="ribbon2">
        <a class="nav-link <?php if ($this->uri->segment(2)=='daftar') echo 'active' ?>" href="<?=base_url()?>main_user/daftar?act=step1">Formulir</a>
        </li>
    
        <li class="nav-item" id="ribbon3" >
        <a class="nav-link <?php if ($this->uri->segment(2)=='upload') echo "active";?>" <?php if (!empty($biodata)) { ?> href="<?=base_url()?>main_user/upload?act=det" <?php } else { ?>  onclick="alert1();" <?php }  ?>  >Upload</a></li>

        <?php if ($biodata['status_registrasi']=='KIP-Kuliah' || $biodata['status_registrasi']=='KIP-Kuliah2') { ?>
        <li class="nav-item" id="ribbon4">
        <a class="nav-link font-weight-bold <?php if ($this->uri->segment(2)=='mulaiujian') echo "active";?>" <?php if (($biodata['syarat2']=='Sudah')) { ?> href="<?=base_url()?>main_user/mulaiujian?act=det" <?php } else { ?>  onclick="alert2();" <?php }  ?>  >Ujian KIPK</a></li>
        <?php } else {?> 
        <li class="nav-item" id="ribbon4">
        <a class="nav-link <?php if ($this->uri->segment(2)=='mulaiujian') echo "active";?>" <?php if (($biodata['syarat2']=='Sudah')) { ?> href="<?=base_url()?>main_user/mulaiujian?act=det" <?php } else { ?>  onclick="alert2();" <?php }  ?>  >Ujian</a></li>
        <?php }?>

        
        </ul>
        <div class="tab-content">
        <div class="tab-pane fade show active">

            <?php  
            if ($this->uri->segment(2)=='') $this->load->view('user/info.php');
                elseif ($this->uri->segment(2)=='daftar') $this->load->view('user/daftar.php'); 
                elseif ($this->uri->segment(2)=='upload') $this->load->view('user/upload_dokumen.php'); 
                elseif ($this->uri->segment(2)=='mulaiujian') $this->load->view('user/mulai_ujian.php');
                elseif ($this->uri->segment(2)=='ujianonline') $this->load->view('user/ujian_online.php');
                elseif ($this->uri->segment(2)=='ujianonline_kipk') $this->load->view('user/ujian_online_kipk.php');
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

<script type="text/javascript">
    var $jquery=jQuery.noConflict();
    function alertStep(){
        $jquery.notify({
            title: "<strong>Perhatian!</strong>",
            message: "Isi Step 1 terlebih dahulu sebelum lanjut"
            },{
            type: 'danger'
         });
    };
</script>
<script type="text/javascript">
    var $jquery=jQuery.noConflict();
    <?php $info=$this->session->flashdata('info');
        if (!empty($info)) { ?>
        $jquery.notify({
            title: "<strong>Sukses</strong>",
            message: "<?=$info?>"
            },{
            type: "success"
         });
         <?php       
        }
        ?>
</script>

<!--<?php //if (!$this->uri->segment(2)) { ?>
<?php //if ($biodata['status_registrasi']=='KIP-Kuliah') { ?>
<script type="text/javascript">
//var $jquery=jQuery.noConflict();
   // $jquery(window).on('load', function() {
       // $jquery.notify({
            //icon: 'fa fa-exclamation-triangle',
            title: '<span class="dots-item"><i class="dot dot--basic" aria-hidden="true"></i><strong>Online Test</strong></span>',
            message: 'Ujian online untuk pendaftar KIP-Kuliah klik disini',
            url: '<?//=base_url('main_user/mulaiujian');?>',
            //},{
            type: 'warning',
           // placement: {
                from: "top",
                align: "center"
           // },
            timer: 0,
        //});
    //});
</script>
<?php //} ?>
<?php //} ?>-->