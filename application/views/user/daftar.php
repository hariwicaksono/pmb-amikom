<link href="<?= base_url('assets/css'); ?>/select2.min.css" rel="stylesheet">
<link href="<?= base_url('assets/css'); ?>/select2-bootstrap4.min.css" rel="stylesheet">

<?php if (!empty($biodata)) {
    $start = "4";
} else {
    $start = "0";
}

?>

<style type="text/css">
    input[type="radio"],
    input[type="checkbox"] {
        -ms-transform: scale(1.4);
        /* IE 9 */
        -webkit-transform: scale(1.4);
        /* Chrome, Safari, Opera */
        transform: scale(1.4);
        margin: 0 0.5rem;
    }
</style>

<?php
if ($biodata['syarat2'] == 'Sudah') $status = 'Readonly';
$this->data['tahun_pmb'] = $this->mtahun->getThaPmb();
$tha = $this->data['tahun_pmb'];
$gelombang = $this->mgelombang->cek_daftar(array('thn_akademik' => $tha));
?>


<ul class="nav nav-tabs nav-fill">

    <li class="nav-item" id="ribbon1">
        <a class="nav-link <?php if ($_GET['act'] == 'step1') echo "active"; ?>" href="<?= base_url() ?>main_user/daftar?act=step1">1</a>
    </li>
    <li class="nav-item" id="ribbon2">
        <a class="nav-link <?php if ($_GET['act'] == 'step2') echo "active"; ?>" <?php if (!empty($biodata)) { ?> href="<?= base_url() ?>main_user/daftar?act=step2" <?php } else { ?> onclick="alertStep();" <?php }  ?>>2</a>
    </li>
    <li class="nav-item" id="ribbon3">
        <a class="nav-link <?php if ($_GET['act'] == 'step3') echo "active"; ?>" <?php if (!empty($biodata)) { ?> href="<?= base_url() ?>main_user/daftar?act=step3" <?php } else { ?> onclick="alertStep();" <?php }  ?>>3</a>
    </li>
    <li class="nav-item" id="ribbon4">
        <a class="nav-link <?php if ($_GET['act'] == 'step4') echo "active"; ?>" <?php if (!empty($biodata)) { ?> href="<?= base_url() ?>main_user/daftar?act=step4" <?php } else { ?> onclick="alertStep();" <?php }  ?>>4</a>
    </li>
    <li class="nav-item" id="ribbon5">
        <a class="nav-link <?php if ($_GET['act'] == 'step5') echo "active"; ?>" <?php if (!empty($biodata)) { ?> href="<?= base_url() ?>main_user/daftar?act=step5" <?php } else { ?> onclick="alertStep();" <?php }  ?>>5</a>
    </li>
</ul>

<div class="card">
    <div class="card-body">
        <?php
        if ($_GET['act'] == 'step1') $this->load->view('user/daftar_step1.php');
        elseif ($_GET['act'] == 'step2') $this->load->view('user/daftar_step2.php');
        elseif ($_GET['act'] == 'step3') $this->load->view('user/daftar_step3.php');
        elseif ($_GET['act'] == 'step4') $this->load->view('user/daftar_step4.php');
        elseif ($_GET['act'] == 'step5') $this->load->view('user/daftar_step5.php');
        ?>

    </div>
</div>


<script type="text/javascript" src="<?= base_url('assets/js'); ?>/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/js'); ?>/jquery.chained.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/js'); ?>/select2.min.js"></script>

<script type="text/javascript" charset="utf-8">
    var $j = jQuery.noConflict();
    $j(document).ready(function() {
        //$j("#prop").chained("#kab_siswa");  
        //$j("#prop2").chained("#kab_ortu");       
        $j('.select2').select2({
            theme: 'bootstrap4',
        });
    });
</script>
<script>
    function hanyaAngka(evt) {
        if (!/^[0-9.]+$/.test(evt.value)) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    }
</script>

<script>
    var $jne3 = jQuery.noConflict();
    $jne3(document).ready(function() {

        $jne3('#kab_siswa').change(function(event) {
            event.preventDefault();
            var country_id = $jne3('#kab_siswa').val();
            var KdProp = $jne3('#prop').val();
            if (country_id != '') {

                $jne3.ajax({
                    type: 'post',
                    url: "<?= base_url(); ?>" + "main/getprop",
                    data: {
                        kab: country_id,
                        prop: KdProp
                    },
                    cache: false,
                    success: function(returndata) {
                        $jne3('#prop').html(returndata);
                        $jne3("#prop").attr('disabled', false);
                    }
                });

            }
        });

        $jne3('#kab_ortu').change(function(event) {
            event.preventDefault();
            var kab2 = $jne3('#kab_ortu').val();
            if (kab2 != '') {

                $jne3.ajax({
                    type: 'post',
                    url: "<?= base_url(); ?>" + "main/getprop2",
                    data: {
                        kab2: kab2
                    },
                    cache: false,
                    success: function(returndata) {
                        $jne3('#prop2').html(returndata);
                        $jne3("#prop2").attr('disabled', false);
                    }
                });

            }
        });

        $jne3('#status_reg').change(function(event) {
            event.preventDefault();
            var status_reg = $jne3('#status_reg').val();
            if (status_reg != '') {

                $jne3.ajax({
                    type: 'post',
                    url: "<?= base_url(); ?>" + "main/get_jenismhs",
                    data: {
                        status_reg: status_reg
                    },
                    cache: false,
                    beforeSend: function() {
                        $jne3('#pilihan1').attr('disabled', false);
                    },
                    success: function(returndata) {
                        $jne3('#jenis_mhs').html(returndata);
                        $jne3("#jenis_mhs").attr('disabled', false);
                    }
                });

            }
        });

        $jne3('#jenis_mhs').change(function(event) {
            event.preventDefault();
            var status_reg = $jne3('#status_reg').val();
            var jenis_mhs = $jne3('#jenis_mhs').val();
            if (jenis_mhs != '') {

                $jne3.ajax({
                    type: 'post',
                    url: "<?= base_url(); ?>" + "main/get_kelas",
                    data: {
                        status_reg: status_reg,
                        jenis_mhs: jenis_mhs
                    },
                    cache: false,
                    beforeSend: function() {
                        $jne3('#kelas').attr('disabled', true);
                    },
                    success: function(returndata) {
                        $jne3('#pilihan1').html(returndata);
                        $jne3("#pilihan1").attr('disabled', false);
                    }
                });

            }
        });


        $jne3('#pilihan1').click(function(event) {
            event.preventDefault();
            var status_reg = $jne3('#status_reg').val();
            var jenis_mhs = $jne3('#jenis_mhs').val();
            var pilihan1 = $jne3('#pilihan1').val();
            if (pilihan1 != '') {

                $jne3.ajax({
                    type: 'post',
                    url: "<?= base_url(); ?>" + "main/get_kelas",
                    data: {
                        status_reg: status_reg,
                        jenis_mhs: jenis_mhs,
                        pilihan1: pilihan1
                    },
                    cache: false,
                    success: function(returndata) {
                        $jne3('#pilihan2').html(returndata);
                        $jne3("#pilihan2").attr('disabled', false);
                        $jne3('#pilihan3').html(returndata);
                        $jne3("#pilihan3").attr('disabled', false);
                    }
                });

            }
        });

        $jne3('#pilihan2').click(function(event) {
            event.preventDefault();
            var status_reg = $jne3('#status_reg').val();
            var jenis_mhs = $jne3('#jenis_mhs').val();
            var pilihan1 = $jne3('#pilihan1').val();
            var pilihan2 = $jne3('#pilihan2').val();
            if (pilihan2 != '') {

                $jne3.ajax({
                    type: 'post',
                    url: "<?= base_url(); ?>" + "main/get_kelas",
                    data: {
                        status_reg: status_reg,
                        jenis_mhs: jenis_mhs,
                        pilihan1: pilihan1,
                        pilihan2: pilihan2
                    },
                    cache: false,
                    success: function(returndata) {
                        //$jne3('#pilihan2').html(returndata);
                        //$jne3("#pilihan2").attr('disabled',false);
                        $jne3('#pilihan3').html(returndata);
                        $jne3("#pilihan3").attr('disabled', false);
                    }
                });

            }
        });

        $jne3('#pilihan3').click(function(event) {
            event.preventDefault();
            var pilihan3 = $jne3('#pilihan3').val();
            var jenis_mhs = $jne3('#jenis_mhs').val();
            if (pilihan3 != '') {

                $jne3.ajax({
                    type: 'post',
                    url: "<?= base_url(); ?>" + "main/get_kelas_sore",
                    data: {
                        pilihan3: pilihan3,
                        jenis_mhs: jenis_mhs
                    },
                    cache: false,
                    success: function(returndata) {
                        $jne3('#kelas').html(returndata);
                        $jne3("#kelas").attr('disabled', false);
                    }
                });

            }
        });


    })
</script>

<!--<script>
    jQuery(document).ready(function($) {
        $(".otom").change(function() {
            vals = $(this).val();
            id = $(this).attr('id').split("_");
            $("#" + id[0] + "_ortu").val(vals);
        });
    });
</script>-->

<script>
    jQuery(document).ready(function($) {
        $("#status_reg").on('change', function() {
            if (this.value == "KIP-Kuliah" || this.value == "KIP-Kuliah2") {
                $("#kipk-box").show();
            } else {
                $("#kipk-box").hide();
            }

        });

        var elemStatusreg = document.getElementById("status_reg");
        if (elemStatusreg != null && elemStatusreg.value == "KIP-Kuliah" || elemStatusreg != null && elemStatusreg.value == "KIP-Kuliah2") {
            $('#kipk-box').show();
        }
    });

    jQuery(document).ready(function($) {
        $("#jurusan").on('change', function() {
            if (this.value == "Lainnya") {
                $("#jurusan-box").show();
            } else {
                $("#jurusan-box").hide();
            }

        });

        var elemJur = document.getElementById("jurusan");
        var elemJurlain = document.getElementById("jurusanlain");
        if (elemJurlain != null && elemJur.value == '') {
            $('#jurusan-box').show();
        }
    });
</script>

<script>
    jQuery(document).ready(function($) {
        $('input#nem').keyup(function(event) {

            if (event.which >= 37 && event.which <= 40) return;

            $(this).val(function(index, value) {
                return value
                    .replace(/\D/g, "")
                    .replace(/\B(?=(\d{2})+(?!\d))/g, ".");
            });
        });

    });
</script>
<script type="text/javascript" src="<?= base_url('assets/js'); ?>/jquery.limitText.js"></script>
<script>
    var $jquery = jQuery.noConflict();
    $jquery(document).ready(function() {
        $jquery("#deskripsialamat_siswa").limitText({
            limit: 150,
            warningLimit: 10,
            counterClass: 'text-dark',
            warningClass: 'text-danger'
        });
    });
</script>
<!-- jQuery smartWizard facilitates steppable wizard content -->
<script type="text/javascript" src="<?= base_url('assets/js'); ?>/jquery.smartWizard.min.js"></script>
<script type="text/javascript">
    var $jquery = jQuery.noConflict();
    $jquery(document).ready(function() {

        $jquery(".wizard").smartWizard({
            selected: <?= $start; ?>,
            transitionEffect: "fade",
            //showStepURLhash: !1, 
            toolbarSettings: {
                toolbarPosition: "none"
            }
        });

        $jquery("#form").validate({
            //ignore: "",
            rules: {
                nama: "required",
                nik: {
                    required: true,
                    number: true,
                    minlength: 16
                },
                pilihan1: {
                    required: true
                },
                pilihan2: {
                    required: true
                },
                pilihan3: {
                    required: true
                },
                tempatlahir: {
                    required: true
                },
                tgllahir: {
                    required: true
                },
                blnlahir: {
                    required: true
                },
                thnlahir: {
                    required: true
                },
                jk: {
                    required: true
                },
                status_pernikahan: {
                    required: true
                },
                agama: {
                    required: true
                },
                nama_ortu: {
                    required: true
                },
                nama_ayah: {
                    required: true
                },
                sekolah: {
                    required: true
                },
                //jurusan: {
                //required: true
                //},
                nem: {
                    required: true
                },
                thn_lulus: {
                    required: true,
                    number: true,
                    minlength: 4
                },
                alamat: {
                    required: true
                },
                rt: {
                    required: true,
                    number: true,
                    minlength: 2
                },
                rw: {
                    required: true,
                    number: true,
                    minlength: 2
                },
                kelurahan: {
                    required: true
                },
                kecamatan: {
                    required: true
                },
                kabupaten: {
                    required: true
                },
                alamat_ortu: {
                    required: true
                },
                rt_ortu: {
                    required: true,
                    number: true,
                    minlength: 2
                },
                rw_ortu: {
                    required: true,
                    number: true,
                    minlength: 2
                },
                kelurahan_ortu: {
                    required: true
                },
                kecamatan_ortu: {
                    required: true
                },
                kabupaten_ortu: {
                    required: true
                },
                kodepos: {
                    required: true,
                    number: true
                },
                kodepos_ortu: {
                    required: true,
                    number: true
                },
                telepon: {
                    required: true,
                    number: true,
                    minlength: 6
                },
                telp_ortu: {
                    required: true,
                    number: true,
                    minlength: 6
                },
                telp_ayah: {
                    required: true,
                    number: true,
                    minlength: 6
                },
                pekerjaan_ortu: {
                    required: true
                },
                pekerjaan_ayah: {
                    required: true
                },
                status_reg: {
                    required: true
                },
                jenis_mhs: {
                    required: true
                },
                relasi: {
                    required: true
                },
                kelas: {
                    required: true
                },
                ukuran_jas: {
                    required: true
                },
                'info[]': {
                    required: true
                },
            },
            messages: {
                nama: {
                    required: '<span>Nama Mahasiswa wajib diisi</span>'
                },
                nik: {
                    required: '<span>NIK KTP wajib diisi</span>',
                    number: '<span>Wajib Berupa Angka</span>',
                    minlength: '<span>Min 16 Angka</span>',
                },
                pilihan1: {
                    required: '<span>Program Studi Wajib dipilih</span>'
                },
                pilihan2: {
                    required: '<span>Program Studi Wajib dipilih</span>'
                },
                pilihan3: {
                    required: '<span>Program Studi Wajib dipilih</span>'
                },
                tempatlahir: {
                    required: '<span>Tempat lahir wajib diisi</span>'
                },
                tgllahir: {
                    required: '<span>Tanggal lahir wajib diisi</span>'
                },
                blnlahir: {
                    required: '<span>Bulan lahir wajib diisi</span>'
                },
                thnlahir: {
                    required: '<span>Tahun lahir wajib diisi</span>'
                },
                jk: {
                    required: '<span>Jenis kelamin wajib dipilih</span>'
                },
                status_pernikahan: {
                    required: '<span>Status Pernikahan wajib dipilih</span>'
                },
                agama: {
                    required: '<span>Agama wajib dipilih</span>'
                },
                nama_ortu: {
                    required: '<span>Nama Ibu Kandung wajib diisi</span>'
                },
                nama_ayah: {
                    required: '<span>Nama Ayah wajib diisi</span>'
                },
                sekolah: {
                    required: '<span>Asal Sekolah wajib diisi</span>'
                },
                jurusan: {
                    required: '<span>Jurusan wajib dipilih</span>'
                },
                nem: {
                    required: '<span>Nilai UAS wajib diisi</span>',
                },
                thn_lulus: {
                    required: '<span>Tahun lulus wajib diisi</span>',
                    number: '<span>Tahun lulus wajib berupa angka</span>',
                    minlength: '<span>Tahun lulus min 4 angka</span>'
                },
                alamat: {
                    required: '<span>Jalan wajib diisi</span>',
                },
                rt: {
                    required: '<span>RT wajib diisi</span>',
                    number: '<span>RT wajib berupa angka</span>',
                    minlength: '<span>RT min 2 angka</span>',
                },
                rw: {
                    required: '<span>RW wajib diisi</span>',
                    number: '<span><RW wajib berupa angka</span>',
                    minlength: '<span>RW min 2 angka</span>',
                },
                kelurahan: {
                    required: '<span>Kelurahan/Desa wajib diisi</span>',
                },
                kecamatan: {
                    required: '<span>Kecamatan wajib diisi</span>',
                },
                kabupaten: {
                    required: '<span>Kabupaten wajib dipilih</span>',
                },
                propinsi: {
                    required: '<span>Provinsi wajib dipilih</span>',
                },
                kodepos: {
                    required: '<span>Kodepos wajib diisi</span>',
                    number: '<span>Kodepos wajib berupa angka</span>',
                },
                telepon: {
                    required: '<span>Telepon wajib diisi</span>',
                    number: '<span>Telepon wajib berupa angka</span>',
                    minlength: '<span>Telepon min 6 angka</span>',
                },
                alamat_ortu: {
                    required: '<span>Alamat Orang Tua wajib diisi</span>',
                },
                rt_ortu: {
                    required: '<span>RT Orang Tua wajib diisi</span>',
                    number: '<span>RT wajib berupa angka</span>',
                    minlength: '<span>RT min 2 angka</span>',
                },
                rw_ortu: {
                    required: '<span>RW Orang Tua wajib diisi</span>',
                    number: '<span><RW wajib berupa angka</span>',
                    minlength: '<span>RW min 2 angka</span>',
                },
                kelurahan_ortu: {
                    required: '<span>Kelurahan/Desa Orang Tua wajib diisi</span>',
                },
                kecamatan_ortu: {
                    required: '<span>Kecamatan Orang Tua wajib diisi</span>',
                },
                kodepos_ortu: {
                    required: '<span>Kodepos Orang Tua wajib diisi</span>',
                    number: '<span>Kodepos wajib berupa angka</span>',
                },
                telp_ortu: {
                    required: '<span>Nomor Telp/HP Ibu wajib diisi</span>',
                    number: '<span>Telepon wajib berupa angka</span>',
                    minlength: '<span>Telepon min 6 angka</span>',
                },
                telp_ayah: {
                    required: '<span>Nomor Telp/HP Ayah wajib diisi</span>',
                    number: '<span>Telepon wajib berupa angka</span>',
                    minlength: '<span>Telepon min 6 angka</span>',
                },
                pekerjaan_ortu: {
                    required: '<span>Pekerjaan Ibu wajib dipilih</span>',
                },
                pekerjaan_ayah: {
                    required: '<span>Pekerjaan Ayah wajib dipilih</span>',
                },
                kabupaten_ortu: {
                    required: '<span>Kabupaten Orang Tua wajib dipilih</span>',
                },
                propinsi_ortu: {
                    required: '<span>Provinsi Orang Tua wajib dipilih</span>',
                },
                status_reg: {
                    required: '<span>Jenis Pendaftaran wajib dipilih</span>'
                },
                jenis_mhs: {
                    required: '<span>Jenis Mahasiswa wajib dipilih</span>'
                },
                relasi: {
                    required: '<span>Relasi wajib dipilih</span>'
                },
                kelas: {
                    required: '<span>Kelas wajib dipilih</span>'
                },
                ukuran_jas: {
                    required: '<span>Ukuran Jas Almamater harus dipilih</span>'
                },
                'info[]': {
                    required: '<span>Informasi Wajib dipilih</span>'
                }

            },
            errorPlacement: function(error, element) {
                if (element.is(":radio")) {
                    error.appendTo(element.parents('#jk'));
                } else if (element.is(":checkbox")) {
                    error.appendTo(element.parents('#informasi'));
                } else {
                    error.insertAfter(element);
                }
            }
        });

        $jquery('.wizard').on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
            var elmForm = $jquery("#form-step-" + stepNumber);
            if (stepDirection === 'forward' && elmForm) {
                if ($jquery('#form').valid()) {
                    return true
                } else {
                    return false
                }
            }
            return true;
        })


    });
</script>