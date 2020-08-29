<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PMB Universitas Amikom Purwokerto</title>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>amikompurwokerto.ico"/>
        <!--google fonts--> 
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
        <!-- custom css-->
        <link href="<?php echo base_url('assets/css');?>/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url('assets/css');?>/style.css" rel="stylesheet">
        <link href="<?php echo base_url('assets');?>/offline-js/themes/offline-theme-default.css" rel="stylesheet">
        <link href="<?php echo base_url('assets');?>/offline-js/themes/offline-language-english.css" rel="stylesheet">
        <!-- font awesome for icons -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <!--must need plugin jquery-->
        <script src="<?php echo base_url('assets/js');?>/jquery.min.js"></script>    
        
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="z-index:99 !important;background-color: rgb(55, 18, 96)">

<button type="button" id="sidebarCollapse" class="btn btn-warning">
<i class="fa fa-align-left" aria-hidden="true"></i>
</button>

<a class="navbar-brand d-none d-sm-none d-md-none d-lg-block d-xl-block" href="<?php echo base_url()?>"><img src="<?php echo base_url('assets/main');?>/images/logo.png" width="180px" style="margin-left:10px;"></a>

<a class="navbar-brand d-block d-sm-block d-md-block d-lg-none d-xl-none mx-auto" href="<?php echo base_url()?>"><img class="img-fluid" src="<?php echo base_url('assets/main');?>/images/logo.png" style="width: 180px;"></a>

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
                <a class="dropdown-item" href="<?=base_url($key)?>"><?=$value?></a>
            <?php 
            } 
            ?>
        <a class="dropdown-item" href="<?=base_url()?>page/jadwal_kegiatan">Jadwal Kegiatan PMB</a>
        <a class="dropdown-item" href="<?=base_url()?>page/perlengkapan">Perlengkapan PSU</a>
         
        </div>
      </li>
    </ul>
    
    <form class="mx-1 my-auto w-100">
    <div class="input-group">
        <input name="query" placeholder="Pencarian..." required="" type="text" class="form-control border py-2">
        <span class="input-group-append">
        <button type="submit" class="btn btn-warning border"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="18" height="18" fill="currentColor"><path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"></path><path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"></path></svg></button>
        </span>
    </div>
    </form>
    
    <?php if(!$this->session->userdata('username')) {?>
    <ul class="navbar-nav">
    <li class="nav-item">
    <a href="<?php echo base_url('page/faq');?>" class="nav-link"><i class="fa fa-question-circle-o fa-2x" aria-hidden="true"></i></a>
    </li>
    
    <form class="form-inline my-2 my-lg-0"><a class="btn btn-info" href="<?php echo base_url('page/login');?>" style="font-size: .9rem">DAFTAR/MASUK</a></form>
    </ul>
            
    <?php }else{ ?>
    <ul class="ml-auto navbar-nav">
    <li class="nav-item"><a href="<?php echo base_url('page/faq');?>" class="nav-link"><i class="fa fa-question-circle-o fa-2x" aria-hidden="true"></i></a>
    
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
        <i class="fa fa-user fa-2x"></i> <?php //echo $this->session->userdata['username'];?>
                    <b class="caret"></b>
        </a>
        <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="navbarDropdown">
      
        <a class="dropdown-item" href="<?php echo base_url('main/logout') ?>"><i class="fa fa-sign-out"></i> Logout</a>
        </div>
      </li>
    </ul>

    <?php } ?>  

  </div>
</nav>  

<div class="wrapper">
<nav id="sidebar">
           
            <ul class="list-unstyled components">
                <li>
                    <a href="<?=base_url()?>page/petunjuk">
                    <img src="<?=base_url()?>/assets/main/images/iconpack/bulb_210969.png" alt="" width="35" /><br/><span>Petunjuk</span>
                    </a>
                   
                </li>
                <li>
                    <a href="<?=base_url()?>page/Prosedur_Registrasi">
                    <img src="<?=base_url()?>/assets/main/images/iconpack/paper-plane.png" alt="" width="35" /><br/><span>Jalur Penerimaan</span>
                    </a>
                
                    
                </li>
                <li>
                    <a href="<?=base_url()?>page/fakultas_programstudi">
                    <img src="<?=base_url()?>/assets/main/images/iconpack/home_240324.png" alt="" width="35" /><br/><span>Fakultas &amp; Prodi</span>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url()?>page/biaya_pendidikan">
                    <img src="<?=base_url()?>/assets/main/images/iconpack/wallet_216490.png" alt="" width="35" /><br/><span>Biaya Pendidikan</span>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url()?>page/Beasiswa">
                    <img src="<?=base_url()?>/assets/main/images/iconpack/folder_243935.png" alt="" width="35" /><br/><span>Beasiswa</span>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url()?>page/fasilitas">
                    <img src="<?=base_url()?>/assets/main/images/iconpack/computer_210953.png" alt="" width="35" /><br/><span>Fasilitas</span>
                    </a>
                </li>
            </ul>

        </nav>

<div id="content">