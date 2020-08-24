<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PMB Universitas Amikom Purwokerto</title>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>amikompurwokerto.ico"/>
        <!--google fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- custom css-->
        <link href="<?php echo base_url(); ?>assets/css/theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/index.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/offline-js/themes/offline-theme-default.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/offline-js/themes/offline-language-english.css" rel="stylesheet">
        <!-- font awesome for icons -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        
        <!-- animated css  -->
        <link href="<?php echo base_url(); ?>assets/intro/css/animate.css" rel="stylesheet" type="text/css" media="screen"> 
   
         <!--must need plugin jquery-->
        <script src="<?php echo base_url('assets/js');?>/jquery-3.5.1.min.js"></script>   
        <script src="<?php echo base_url('assets/js');?>/popper.min.js"></script>   
        <!--bootstrap js plugin-->
        <script src="<?php echo base_url('assets/js');?>/bootstrap.min.js" type="text/javascript"></script>    
        <script src="<?php echo base_url('assets');?>/offline-js/offline.js" type="text/javascript"></script>   
    </head>
    <!--<script type="text/javascript" language="javascript" src="<?=base_url()?>assets/intro/js/jquery.dataTables.js"></script>-->
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf-8">
    var $jtable=jQuery.noConflict();
                $jtable(document).ready(function() {
            oTable = $jtable('#example').dataTable({
                "bJQueryUI": true,
                "sPaginationType": "full_numbers",
                   "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": false
            });
            
        } );
    </script>
    <style type="text/css" title="currentStyle">   
    body {
    font-family: 'Source Sans Pro', sans-serif;
    background: #fafafa;
}     
p {
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 1.2em;
    font-weight: 400;
    line-height: 1.7em;
    color: #999;
}
    @import "<?=base_url()?>assets/intro/css/demo_table_jui.css";
    @import "<?=base_url();?>assets/intro/css/jquery-ui-1.8.4.custom.css";
     @keyframes blink{
        0%{opacity: 0;}
        50%{opacity: .5;}
        100%{opacity: 1;}
        }
        .navbar-nav a.nav-link{font-family: 'Source Sans Pro', sans-serif;font-size: 1rem;margin:0px 8px;font-weight: 600;}
        .navbar-dark .navbar-nav .show > .nav-link,
.navbar-dark .navbar-nav .active > .nav-link,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .nav-link.active {
  color: #2DCE89;
}
/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */
#sidebar a,
#sidebar a:hover,
#sidebar a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}
.wrapper {
    display: flex;
    align-items: stretch;
}

#sidebar {
    min-width: 250px;
    max-width: 250px;
    background: #482373;
    color: #fff;
    transition: all 0.3s;
}

#sidebar.active {
    min-width: 80px;
    max-width: 80px;
    text-align: center;
}

#sidebar.active .sidebar-header h3,
#sidebar.active .CTAs {
    display: none;
}

#sidebar.active .sidebar-header strong {
    display: block;
}

#sidebar ul li a {
    text-align: left;
}

#sidebar.active ul li a {
    padding: 20px 10px;
    text-align: center;
    font-size: 0.85em;
}

#sidebar.active ul li a i {
    margin-right: 0;
    display: block;
    font-size: 1.8em;
    margin-bottom: 5px;
}

#sidebar.active ul ul a {
    padding: 10px !important;
}

#sidebar.active .dropdown-toggle::after {
    top: auto;
    bottom: 10px;
    right: 50%;
    -webkit-transform: translateX(50%);
    -ms-transform: translateX(50%);
    transform: translateX(50%);
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #6d7fcc;
}

#sidebar .sidebar-header strong {
    display: none;
    font-size: 1.8em;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #47748b;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}

#sidebar ul li a:hover {
    color: #7386D5;
    background: #fff;
}

#sidebar ul li a i {
    margin-right: 10px;
}

#sidebar ul li.active>a,
#sidebar a[aria-expanded="true"] {
    color: #fff;
    background: #6d7fcc;
}

#sidebar a[data-toggle="collapse"] {
    position: relative;
}

#sidebar .dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}


/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

#content {
    width: 100%;
    padding: 0;
    min-height: 100vh;
    transition: all 0.3s;
}

/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */

@media (max-width: 768px) {
    #sidebar {
        min-width: 80px;
        max-width: 80px;
        text-align: center;
        margin-left: -80px !important;
    }
    #sidebar.dropdown-toggle::after {
        top: auto;
        bottom: 10px;
        right: 50%;
        -webkit-transform: translateX(50%);
        -ms-transform: translateX(50%);
        transform: translateX(50%);
    }
    #sidebar.active {
        margin-left: 0 !important;
    }
    #sidebar .sidebar-header h3,
    #sidebar .CTAs {
        display: none;
    }
    #sidebar .sidebar-header strong {
        display: block;
    }
    #sidebar ul li a {
        padding: 20px 10px;
    }
    #sidebar ul li a span {
        font-size: 0.85em;
    }
    #sidebar ul li a i {
        margin-right: 0;
        display: block;
    }
    #sidebar ul ul a {
        padding: 10px !important;
    }
    #sidebar ul li a i {
        font-size: 1.3em;
    }
    #sidebar {
        margin-left: 0;
    }
    #sidebarCollapse span {
        display: none;
    }
}
    </style>
<body>


<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: rgb(55, 18, 96)">

<button type="button" id="sidebarCollapse" class="btn btn-warning">
<i class="fa fa-align-left" aria-hidden="true"></i>
</button>

<a class="navbar-brand d-none d-sm-none d-md-none d-lg-block d-xl-block" href="<?php echo base_url()?>"><img src="<?php echo base_url('assets/main');?>/images/logo.png" width="180px" style="margin-left:10px;"></a>

<a class="navbar-brand d-block d-sm-block d-md-block d-lg-none d-xl-none mx-auto" href="<?php echo base_url()?>"><img class="img-fluid" src="<?php echo base_url('assets/main');?>/images/logo.png" style="width: 180px;"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()?>">Home <span class="sr-only">(current)</span></a>
      </li>

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
    <form class="w-100" style="padding-right: 15px;"><div class="form-row"><div class="col-lg-11 col-md-11 col-10"><input name="query" placeholder="Cari Nomor Pendaftaran..." required="" type="text" class="form-control"></div><div class="col"><button type="submit" class="btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="18" height="18" fill="currentColor"><path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"></path><path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"></path></svg></button></div></div></form>
    
    <?php
        if(!$this->session->userdata('username')) {?>
         <ul class="ml-auto navbar-nav">
    <li class="nav-item"><a href="<?php echo base_url('page/faq');?>" class="nav-link">FAQ</a>
    
    <li class="nav-item"><a class="btn btn-info" href="<?php echo base_url('page/login');?>">Daftar/Masuk</a></li>
    </ul>
            
    <?php }else{ ?>
        <ul class="ml-auto navbar-nav">
    <li class="nav-item"><a href="/page/33" class="nav-link">FAQ</a>
    
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
        <i class="fa fa-user"></i> <?php echo $this->session->userdata['username'];?>
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
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Home
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-briefcase"></i>
                        About
                    </a>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        Pages
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-image"></i>
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-question"></i>
                        FAQ
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-paper-plane"></i>
                        Contact
                    </a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
                </li>
                <li>
                    <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
                </li>
            </ul>
        </nav>