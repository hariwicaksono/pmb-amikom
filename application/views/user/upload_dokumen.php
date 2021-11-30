<!-- Dropzone css -->
<link rel="stylesheet" href="<?= base_url('assets/plugins/dropzone/min/dropzone.min.css') ?>" />
<link rel="stylesheet" href="<?= base_url('assets/plugins/dropzone/min/basic.min.css') ?>" />
<script src="<?= base_url('assets/plugins/dropzone/min/dropzone.min.js') ?>"></script>

<style type="text/css">
    form input[type="file"] {
        display: block;
        color: transparent;
        padding-left: 10px;
    }

    @keyframes blink {
        0% {
            opacity: 0;
        }

        50% {
            opacity: .5;
        }

        100% {
            opacity: 1;
        }
    }

    #dropzone {
        margin-bottom: 3rem;
    }

    .dropzone {
        border: 2px dashed #0087F7;
        border-radius: 5px;
        background: white;
    }

    .dropzone .dz-message {
        font-weight: 400;
    }

    .dropzone .dz-message .note {
        font-size: 0.8em;
        font-weight: 200;
        display: block;
        margin-top: 1.4rem;
    }
</style>

<div class="card">
    <div class="card-body">
        <?php if (empty($bukti)) { 
            ?>
            <div class="alert alert-secondary" style="background-color: #fafafa;">
                <p class="blink mb-0" style="font-size:14px;font-weight:600;color:red;animation: blink 2s linear infinite"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Perhatian!<br/>Harap Membayar Biaya Pendaftaran.<br /><span style="font-size:16px;font-weight:700">Biaya Pendaftaran Rp.<?=  number_format("$biayadaftar",2,",",".");;?></span></p>
                <!--<p class="mb-2" style="font-size:12px;font-weight:600;color:red;">Setelah Mengupload Bukti Bayar (Struk Transfer Pendaftaran) harap konfirmasi via WA dengan no. 0858-48888-445.</p>-->
                <div>
                    <b>Dibayarkan Via Transfer ke Nomor VA (Virtual Account) Bank Muamalat:</b>
                    <br />
                   <?= $biodata['va'];?>
                </div>
            </div>
        <?php } 
        ?>

        <div class="row">
            <div class="col-sm-9">

                <div class="row">
                    <div class="col-sm-3">
                        <h5>BUKTI BAYAR (Manual)</h5>
                    </div>
                    <div class="col-sm-9">
                        <?php if (empty($bukti)) { 
                        ?>
                            <form class="dropzone" action="<?= base_url() ?>main_user/post_dokumen?act=bukti_bayar" enctype="multipart/form-data" id="buktiDropzone">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <input type="hidden" name="nodaf" value="<?= $biodata['nodaf'] ?>">
                                <div class="fallback">
                                    <input type="file" name="bukti_bayar">
                                </div>
                            </form>
                        <?php } else { 
                        ?>
                            <div id="data_bukti">

                            </div>
                        <?php } 
                        ?>
                    </div>
                </div>

                <hr class="my-3" />

                <div class="row">
                    <div class="col-sm-3">
                        <h5>1. FOTO</h5>
                    </div>
                    <div class="col-sm-9">
                        <?php if (empty($foto)) { ?>
                            <form class="dropzone" action="<?= base_url() ?>main_user/post_dokumen?act=foto" enctype="multipart/form-data" id="fotoDropzone">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <input type="hidden" name="nodaf" value="<?= $biodata['nodaf'] ?>">
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

                <hr class="my-3" />

                <div class="row">
                    <div class="col-sm-3">
                        <h5>2. KTP</h5>
                    </div>
                    <div class="col-sm-9">
                        <?php if (empty($ktp)) { ?>
                            <form class="dropzone" method="post" action="<?= base_url() ?>main_user/post_dokumen?act=ktp" enctype="multipart/form-data" id="ktpDropzone">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <input type="hidden" name="nodaf" value="<?= $biodata['nodaf'] ?>">
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

                <hr class="my-3" />

                <div class="row" id="formIjazah">
                    <div class="col-sm-3">
                        <h5>3. IJAZAH / SKL</h5>
                    </div>
                    <div class="col-sm-9">
                        <ul class="nav nav-pills nav-fill mb-2 mt-1" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Ijazah</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">SKL</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <?php if (empty($ijazah)) { ?>
                                    <form class="dropzone" method="post" action="<?= base_url() ?>main_user/post_dokumen?act=ijazah" enctype="multipart/form-data" id="ijazahDropzone">
                                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                        <input type="hidden" name="nodaf" value="<?= $biodata['nodaf'] ?>">
                                        <div class="fallback">
                                            <input type="file" name="ijazah">
                                        </div>
                                    </form>
                                <?php } else { ?>
                                    <div id="data_ijazah">

                                    </div>
                                <?php } ?>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <?php if (empty($skl)) { ?>
                                    <form class="dropzone" method="post" action="<?= base_url() ?>main_user/post_dokumen?act=skl" enctype="multipart/form-data" id="sklDropzone">
                                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                        <input type="hidden" name="nodaf" value="<?= $biodata['nodaf'] ?>">
                                        <div class="fallback">
                                            <input type="file" name="skl">
                                        </div>
                                    </form>
                                <?php } else { ?>
                                    <div id="data_skl">

                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!--<div class="mb-0 form-check">
                        <input type="checkbox" class="form-check-input" id="Check1">
                        <label class="form-check-label" for="Check1">SKL</label>
                    </div>-->

                <hr class="my-3" />

                <div class="row">
                    <div class="col-sm-3">
                        <h5>4. SKHU</h5>
                    </div>
                    <div class="col-sm-9">
                        <?php if (empty($skhu)) { ?>
                            <form class="dropzone" method="post" action="<?= base_url() ?>main_user/post_dokumen?act=skhu" enctype="multipart/form-data" id="skhuDropzone">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <input type="hidden" name="nodaf" value="<?= $biodata['nodaf'] ?>">
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
                <br/>
            </div>

            <div class="col-sm-3">
                <div class="alert alert-warning">
                    <small class="text-break">
                        <h6 class="alert-heading">Informasi</h6>
                        1. File yang diunggah berupa JPG/JPEG/PNG/PDF. Max file berukuran 40MB.<br />
                        2. Anda dapat menghapus dengan cara klik tombol hapus. Kemudian unggah kembali file yang benar.
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var $jquery = jQuery.noConflict();
    Dropzone.autoDiscover = false;
    $jquery(document).ready(function() {
        update_bukti();
    });

    if ($jquery("#buktiDropzone").length) {
        Dropzone.options.buktiDropzone = {
            paramName: "bukti_bayar",
            maxFiles: 1,
            success: function(file, data) {
                location.reload(false);
            }
        }
        var buktiDropzone = new Dropzone("#buktiDropzone");
        buktiDropzone.on("complete", function(file) {
            buktiDropzone.removeFile(file);
        });
    }

    function update_bukti() {
        var elem = document.getElementById('data_bukti');
        if (elem != null && elem.value == '') {
            elem.innerHTML = "<i class='fa fa-circle-o-notch fa-spin'></i> Please Wait...";
        }
        $jquery.ajax({
            url: '<?= base_url() ?>main_user/upload_data_bukti',
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                $jquery('#data_bukti').html(data);
            }
        });
    }
</script>
<script>
    var $jquery = jQuery.noConflict();
    Dropzone.autoDiscover = false;
    $jquery(document).ready(function() {
        update_foto();
    });

    if ($jquery("#fotoDropzone").length) {
        Dropzone.options.fotoDropzone = {
            paramName: "foto",
            maxFiles: 1,
            success: function(file, data) {
                location.reload(false);
            }
        }
        var fotoDropzone = new Dropzone("#fotoDropzone");
        fotoDropzone.on("complete", function(file) {
            fotoDropzone.removeFile(file);
        });
    }

    function update_foto() {
        var elem = document.getElementById('data_foto');
        if (elem != null && elem.value == '') {
            elem.innerHTML = "<i class='fa fa-circle-o-notch fa-spin'></i> Please Wait...";
        }
        $jquery.ajax({
            url: '<?= base_url() ?>main_user/upload_data_foto',
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                $jquery('#data_foto').html(data);
            }
        });
    }
</script>
<script>
    var $jquery = jQuery.noConflict();
    Dropzone.autoDiscover = false;
    $jquery(document).ready(function() {
        update_ktp();
    });

    if ($jquery("#ktpDropzone").length) {
        Dropzone.options.ktpDropzone = {
            paramName: "ktp",
            maxFiles: 1,
            success: function(file, data) {
                location.reload(false);
            }
        }
        var ktpDropzone = new Dropzone("#ktpDropzone");
        ktpDropzone.on("complete", function(file) {
            ktpDropzone.removeFile(file);
        });
    }

    function update_ktp() {
        var elem = document.getElementById('data_ktp');
        if (elem != null && elem.value == '') {
            elem.innerHTML = "<i class='fa fa-circle-o-notch fa-spin'></i> Please Wait...";
        }
        $jquery.ajax({
            url: '<?= base_url() ?>main_user/upload_data_ktp',
            type: 'get',
            dataType: 'html',
            success: function(data) {
                $jquery('#data_ktp').html(data);
            }
        });
    }
</script>
<script>
    var $jquery = jQuery.noConflict();
    Dropzone.autoDiscover = false;
    $jquery(document).ready(function() {
        update_ijazah();
    });

    if ($jquery("#ijazahDropzone").length) {
        Dropzone.options.ijazahDropzone = {
            paramName: "ijazah",
            maxFiles: 1,
            success: function(file, data) {
                location.reload(false);
            }
        }
        var ijazahDropzone = new Dropzone("#ijazahDropzone");
        ijazahDropzone.on("complete", function(file) {
            ijazahDropzone.removeFile(file);
        });
    }

    function update_ijazah() {
        var elem = document.getElementById('data_ijazah');
        if (elem != null && elem.value == '') {
            elem.innerHTML = "<i class='fa fa-circle-o-notch fa-spin'></i> Please Wait...";
        }
        $jquery.ajax({
            url: '<?= base_url() ?>main_user/upload_data_ijazah',
            type: 'get',
            dataType: 'html',
            success: function(data) {
                $jquery('#data_ijazah').html(data);
            }
        });
    }
</script>
<script>
    var $jquery = jQuery.noConflict();
    Dropzone.autoDiscover = false;
    $jquery(document).ready(function() {
        update_skl();
    });

    if ($jquery("#sklDropzone").length) {
        Dropzone.options.sklDropzone = {
            paramName: "skl",
            maxFiles: 1,
            success: function(file, data) {
                location.reload(false);
            }
        }
        var sklDropzone = new Dropzone("#sklDropzone");
        sklDropzone.on("complete", function(file) {
            sklDropzone.removeFile(file);
        });
    }

    function update_skl() {
        var elem = document.getElementById('data_skl');
        if (elem != null && elem.value == '') {
            elem.innerHTML = "<i class='fa fa-circle-o-notch fa-spin'></i> Please Wait...";
        }
        $jquery.ajax({
            url: '<?= base_url() ?>main_user/upload_data_skl',
            type: 'get',
            dataType: 'html',
            success: function(data) {
                $jquery('#data_skl').html(data);
            }
        });
    }
</script>
<script>
    var $jquery = jQuery.noConflict();
    Dropzone.autoDiscover = false;
    $jquery(document).ready(function() {
        update_skhu();
    });

    if ($jquery("#skhuDropzone").length) {
        Dropzone.options.skhuDropzone = {
            paramName: "skhu",
            maxFiles: 1,
            success: function(file, data) {
                location.reload(false);
            }
        }
        var skhuDropzone = new Dropzone("#skhuDropzone");
        skhuDropzone.on("complete", function(file) {
            skhuDropzone.removeFile(file);
        });
    }

    function update_skhu() {
        var elem = document.getElementById('data_skhu');
        if (elem != null && elem.value == '') {
            elem.innerHTML = "<i class='fa fa-circle-o-notch fa-spin'></i> Please Wait...";
        }
        $jquery.ajax({
            url: '<?= base_url() ?>main_user/upload_data_skhu',
            type: 'get',
            dataType: 'html',
            success: function(data) {
                $jquery('#data_skhu').html(data);
            }
        });
    }
</script>
<!--<script>
var $jquery=jQuery.noConflict();
$jquery(document).ready(function ($jquery) {
    $jquery("#Check1").on('click', function() {
    if($jquery(this).prop("checked")) {
        $jquery("#yt-box").show();   
		$jquery("#formIjazah").hide();           
    } else  {
        $jquery("#yt-box").hide();    
		$jquery("#formIjazah").show();          
    }
    });

});
</script>-->