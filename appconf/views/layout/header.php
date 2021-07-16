<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php if ($this->uri->segment(1) == 'page' && $this->uri->segment(2) == 'login') { ?>
    <title>Halaman Login PMB Universitas Amikom Purwokerto</title>
    <meta name="title" content="Halaman Login PMB Universitas Amikom Purwokerto">
    <meta name="description" content="Masukkan username dan password anda untuk melanjutkan proses pendaftaran">
    <meta name="keywords" content="login,pendaftaran,amikom,purwokerto">
    <meta property="og:title" content="Halaman Login PMB Universitas Amikom Purwokerto" />
    <meta property="og:description" content="Masukkan username dan password anda untuk melanjutkan proses pendaftaran" />
  <?php } elseif ($this->uri->segment(1) == 'page' && $this->uri->segment(2) == 'register') { ?>
    <title>Halaman Pendaftaran PMB Universitas Amikom Purwokerto</title>
    <meta name="title" content="Halaman Pendaftaran PMB Universitas Amikom Purwokerto">
    <meta name="description" content="Silakan mengisi informasi pendaftaran pada formulir ini">
    <meta name="keywords" content="login,daftar,amikom,purwokerto,pendaftaran">
    <meta property="og:title" content="Halaman Pendaftaran PMB Universitas Amikom Purwokerto" />
    <meta property="og:description" content="Silakan mengisi informasi pendaftaran pada formulir ini" />
  <?php } elseif ($this->uri->segment(1) == 'page' && $this->uri->segment(2) == 'Beasiswa') { ?>
    <title>Informasi Beasiswa Universitas Amikom Purwokerto</title>
    <meta name="title" content="Informasi Beasiswa Universitas Amikom Purwokerto">
    <meta name="description" content="Beberapa beasiswa yang bisa diperoleh oleh mahasiswa antara lain : Beasiswa KIP Kuliah, Beasiswa Perbankan, Beasiswa Akademik, dan Beasiswa Yayasan">
    <meta name="keywords" content="beasiswa,daftar,amikom,purwokerto,pendaftaran">
    <meta property="og:title" content="Informasi Beasiswa Universitas Amikom Purwokerto" />
    <meta property="og:description" content="Beberapa beasiswa yang bisa diperoleh oleh mahasiswa antara lain : Beasiswa KIP Kuliah, Beasiswa Perbankan, Beasiswa Akademik, dan Beasiswa Yayasan" />
  <?php } elseif ($this->uri->segment(1) == 'page' && $this->uri->segment(2) == 'petunjuk') { ?>
    <title>Petunjuk Singkat Proses Pendaftaran Universitas Amikom Purwokerto</title>
    <meta name="title" content="Petunjuk Singkat Proses Pendaftaran Universitas Amikom Purwokerto">
    <meta name="description" content="1) Buat akun, 2) Lengkapi data diri, 3) Membayar biaya pendaftaran, 4) Tes tertulis serta wawancara, 5) Pengumuman, 6) Her-registrasi, 7) Pengesahan menjadi mahasiswa">
    <meta name="keywords" content="alur,petunjuk,daftar,amikom,purwokerto,pendaftaran">
    <meta property="og:title" content="Petunjuk Singkat Proses Pendaftaran Universitas Amikom Purwokerto" />
    <meta property="og:description" content="1) Buat akun, 2) Lengkapi data diri, 3) Membayar biaya pendaftaran, 4) Tes tertulis serta wawancara, 5) Pengumuman, 6) Her-registrasi, 7) Pengesahan menjadi mahasiswa" />
  <?php } elseif ($this->uri->segment(1) == 'page' && $this->uri->segment(2) == 'Jalur_penerimaan') { ?>
    <title>Jalur Pendaftaran Universitas Amikom Purwokerto</title>
    <meta name="title" content="Jalur Pendaftaran Universitas Amikom Purwokerto">
    <meta name="description" content="1) JPPO (1 Desember 2020 - 27 Februari 2021), 2) Gelombang Khusus (1 Januari 2021 - 31 Maret 2021), 3) Gelombang 1 (1 April 2021 - 31 Mei 2021), 4) Gelombang 2 (1 Juni 2021 - 31 Juli 2021), 5) Gelombang 3 (1 Agustus 2021 - 30 September 2021)">
    <meta name="keywords" content="gelombang,petunjuk,daftar,amikom,purwokerto,pendaftaran">
    <meta property="og:title" content="Jalur Pendaftaran Universitas Amikom Purwokerto" />
    <meta property="og:description" content="1) JPPO (1 Desember 2020 - 27 Februari 2021), 2) Gelombang Khusus (1 Januari 2021 - 31 Maret 2021), 3) Gelombang 1 (1 April 2021 - 31 Mei 2021), 4) Gelombang 2 (1 Juni 2021 - 31 Juli 2021), 5) Gelombang 3 (1 Agustus 2021 - 30 September 2021)" />
  <?php } elseif ($this->uri->segment(1) == 'page' && $this->uri->segment(2) == 'fakultas_programstudi') { ?>
    <title>Program Studi Unggulan Universitas Amikom Purwokerto</title>
    <meta name="title" content="Program Studi Unggulan Universitas Amikom Purwokerto">
    <meta name="description" content="Fakultas Ilmu Komputer. Program Studi S1. Informatika, Sistem Informasi, dan Teknologi Informasi. Fakultas Bisnis dan Ilmu Sosial. Program Studi S1. Ilmu Komunikasi dan Bisnis Digital">
    <meta name="keywords" content="universitas,amikom,purwokerto,program studi,jurusan,sarjana,mahasiswa baru,s1,kampus it,digitalisasi,informatika,bisnis digital,teknologi informasi,ilmu komunikasi,sistem informasi">
    <meta property="og:title" content="Program Studi Unggulan Universitas Amikom Purwokerto" />
    <meta property="og:description" content="Fakultas Ilmu Komputer. Program Studi S1. Informatika, Sistem Informasi, dan Teknologi Informasi. Fakultas Bisnis dan Ilmu Sosial. Program Studi S1. Ilmu Komunikasi dan Bisnis Digital" />
  <?php } elseif ($this->uri->segment(1) == 'page' && $this->uri->segment(2) == 'faq') { ?>
    <title>F.A.Q (Frequently Asked Questions)</title>
    <meta name="title" content="F.A.Q (Frequently Asked Questions)">
    <meta name="description" content="Q : Saya berada jauh dari AMIKOM Purwokerto, Bagaimana cara mendaftarnya? A : Bagi pendaftar yang rumahnya jauh, bisa memanfaatkan fasilitas pendaftaran online di pmb.amikompurwokerto.ac.id">
    <meta name="keywords" content="petunjuk,daftar,amikom,purwokerto,pendaftaran">
    <meta property="og:title" content="F.A.Q (Frequently Asked Questions)" />
    <meta property="og:description" content="Q : Saya berada jauh dari AMIKOM Purwokerto, Bagaimana cara mendaftarnya? A : Bagi pendaftar yang rumahnya jauh, bisa memanfaatkan fasilitas pendaftaran online di pmb.amikompurwokerto.ac.id" />
  <?php } else { ?>
    <title>Web Pendaftaran Kuliah Universitas Amikom Purwokerto</title>
    <meta name="title" content="Web Pendaftaran Kuliah Universitas Amikom Purwokerto">
    <meta name="description" content="Pendaftaran mahasiswa baru tahun ajaran 2021/2022. 100% biaya kembali apabila diterima PTN jalur UTBK. Kelas reguler, kelas sore/kelas karyawan, kelas PNS, transfer/pindahan. Program Studi S1 : Informatika, Bisnis Digital, Teknologi Informasi, Ilmu Komunikasi, dan Sistem Informasi.">
    <meta name="keywords" content="universitas,amikom,purwokerto,pmb,daftar,pendaftaran,mahasiswa baru,s1,kampus it,digitalisasi,informatika,bisnis digital,teknologi informasi,ilmu komunikasi,sistem informasi,kelas sore,kelas karyawan,kelas pns,transfer,pindahan">
    <meta property="og:title" content="Web Pendaftaran Kuliah Universitas Amikom Purwokerto" />
    <meta property="og:description" content="Pendaftaran mahasiswa baru tahun ajaran 2021/2022. 100% biaya kembali apabila diterima PTN jalur UTBK. Kelas reguler, kelas sore/kelas karyawan, kelas PNS, transfer/pindahan. Program Studi S1 : Informatika, Bisnis Digital, Teknologi Informasi, Ilmu Komunikasi, dan Sistem Informasi." />
  <?php } ?>

  <link rel="canonical" href="<?= current_url(); ?>" />
  <meta property="og:site_name" content="PMB Universitas Amikom Purwokerto" />
  <meta property="og:url" content="<?= current_url(); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="" />

  <meta name="robots" content="index, follow">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="language" content="en">
  <meta name="author" content="UPT. PLT Amikom Purwokerto">

  <meta name="facebook-domain-verification" content="763hm4pizydr832ma4rv583qwh3pm3" />
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>amikompurwokerto.ico" />
  <!--google fonts-->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <!-- custom css-->
  <link href="<?php echo base_url('assets/css'); ?>/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/css'); ?>/styles.css?v=<?= substr(md5(time()), 0, 16); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets'); ?>/offline-js/themes/offline-theme-default.css" rel="stylesheet">
  <link href="<?php echo base_url('assets'); ?>/offline-js/themes/offline-language-english.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/css'); ?>/floating-wpp.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/jquery-ui-1.12.1.custom'); ?>/jquery-ui.min.css" rel="stylesheet">

  <!-- font awesome for icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <!--must need plugin jquery-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  <style>
    /*--------------------------------------------------------------
        # Counts
        --------------------------------------------------------------*/
    .counts {
      padding: 0;
    }

    .counts .counters span {
      font-size: 48px;
      display: block;
      color: #602F65;
      font-weight: 700;
    }

    .counts .counters p {
      padding: 0;
      margin: 0 0 20px 0;
      font-size: 16px;
      font-weight: 600;
      color: #37423b;
    }
  </style>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-K4TJ5JP');
  </script>
  <!-- End Google Tag Manager -->


</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K4TJ5JP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="z-index:99 !important;background-color: rgb(78, 33, 98)">

    <button type="button" id="sidebarCollapse" class="btn btn-warning">
      <i class="fa fa-bars" aria-hidden="true"></i>
    </button>

    <a class="navbar-brand d-none d-sm-none d-md-none d-lg-block d-xl-block" href="<?php echo base_url() ?>"><img src="<?php echo base_url('assets/main'); ?>/images/logo.png" alt="Universitas Amikom Purwokerto" width="180px" style="margin-left:10px;"></a>

    <a class="navbar-brand d-block d-sm-block d-md-block d-lg-none d-xl-none mx-auto" href="<?php echo base_url() ?>"><img class="img-fluid" src="<?php echo base_url('assets/main'); ?>/images/logo.png" alt="Universitas Amikom Purwokerto" style="width: 180px;"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Menu Utama
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php
            foreach ($menupmb as $key => $value) {
            ?>
              <a class="dropdown-item" href="<?= base_url($key) ?>"><?= $value ?></a>
            <?php
            }
            ?>
          </div>
        </li>
      </ul>

      <form id="form_search" class="mx-1 my-auto w-100" action="<?php echo site_url('main/search'); ?>" method="GET">
        <div class="input-group">
          <input name="query" id="search" placeholder="Pencarian..." required="" type="text" class="form-control border py-2">
          <span class="input-group-append">
            <button type="submit" class="btn btn-warning border"><i class="fa fa-search" aria-hidden="true"></i></button>
          </span>
        </div>
      </form>

      <?php if (!$this->session->userdata('username')) { ?>
        <ul class="navbar-nav">
          <li class="nav-item d-none d-sm-none d-md-none d-lg-block">
            <a href="<?php echo base_url('page/faq'); ?>" class="nav-link"><i class="fa fa-question-circle-o fa-2x" aria-hidden="true"></i></a>
          </li>

          <li class="nav-item d-block d-sm-block d-md-block d-lg-none">
            <a href="<?php echo base_url('page/faq'); ?>" class="nav-link">F.A.Q</a>
          </li>

          <form class="form-inline my-2 my-lg-0"><a class="btn btn-success" href="<?php echo base_url('page/login'); ?>" style="font-size: .9rem">MASUK/DAFTAR</a></form>
        </ul>

      <?php } else { ?>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
              <?php
              date_default_timezone_set("Asia/Jakarta");

              $jam = date('H:i');

              if ($jam > '05:30' && $jam < '10:00') {
                $salam = 'Pagi';
              } elseif ($jam >= '10:00' && $jam < '15:00') {
                $salam = 'Siang';
              } elseif ($jam > '15:00' && $jam < '18:00') {
                $salam = 'Sore';
              } else {
                $salam = 'Malam';
              }

              echo 'Selamat ' . $salam;
              ?>, <?php echo $this->session->userdata['username']; ?> <b class="caret"></b>
            </a>
            <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#"> <?php echo $this->session->userdata['nama']; ?></a>
              <a class="dropdown-item" href="<?php echo base_url('page/faq'); ?>"><i class="fa fa-question-circle-o" aria-hidden="true"></i> Frequently Asked Questions</a>
              <a class="dropdown-item" href="<?php echo base_url('main/logout') ?>"><i class="fa fa-sign-out"></i> Logout</a>
            </div>
          </li>
        </ul>

      <?php } ?>

    </div>
  </nav>

  <div class="wrapper">

    <?php if ($this->uri->segment(1) == 'main_user') { ?>
      <nav id="sidebar" class="active ">
      <?php } else { ?>
        <nav id="sidebar" class=" ">
        <?php } ?>

        <ul class="list-unstyled components">
          <li>
            <a href="<?= base_url() ?>page/petunjuk" alt="">
              <img src="<?= base_url() ?>/assets/main/images/iconpack/bulb_210969.png" alt="" width="35" /><br /><span>Petunjuk</span>
            </a>

          </li>
          <li>
            <a href="<?= base_url() ?>page/Jalur_penerimaan">
              <img src="<?= base_url() ?>/assets/main/images/iconpack/paper-plane.png" alt="" width="35" /><br /><span>Jalur Penerimaan</span>
            </a>

          </li>
          <li>
            <a href="<?= base_url() ?>page/fakultas_programstudi">
              <img src="<?= base_url() ?>/assets/main/images/iconpack/home_240324.png" alt="" width="35" /><br /><span>Fakultas &amp; Prodi</span>
            </a>
          </li>
          <li>
            <a href="https://www.facebook.com/univamikompurwokerto" target="_blank()" aria-label="facebook"><i class="fa fa-facebook text-warning fa-3x"></i><br /><span>Facebook</span></a>
          </li>
          <li>
            <a href="<?= base_url() ?>page/Beasiswa">
              <img src="<?= base_url() ?>/assets/main/images/iconpack/folder_243935.png" alt="" width="35" /><br /><span>Beasiswa</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url() ?>page/fasilitas">
              <img src="<?= base_url() ?>/assets/main/images/iconpack/computer_210953.png" alt="" width="35" /><br /><span>Fasilitas</span>
            </a>
          </li>
          <li>
            <a href="https://bit.ly/brosuramikompwt21">
              <img src="<?= base_url() ?>/assets/main/images/iconpack/smartphone.png" alt="" width="35" /><br /><span>Download Brosur</span>
            </a>
          </li>

          <li>
            <a href="https://www.instagram.com/amikom_purwokerto/?hl=id" target="_blank()"><i class="fa fa-instagram text-warning fa-3x" aria-label="instagram"></i><br /><span>Instagram</span></a>
          </li>

        </ul>

        </nav>

        <div id="content">