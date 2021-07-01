<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PMB Universitas Amikom Purwokerto</title>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>amikompurwokerto.ico"/>
        <!--google fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>assets/intro/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- custom css-->
        <link href="<?php echo base_url(); ?>assets/intro/css/style.css?5566" rel="stylesheet" type="text/css" media="screen">
        <!-- font awesome for icons -->
        <!--<link href="<?php echo base_url(); ?>assets/intro/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        
        <!-- animated css  -->
        <link href="<?php echo base_url(); ?>assets/intro/css/animate.css" rel="stylesheet" type="text/css" media="screen"> 
   
        <link href="<?php echo base_url(); ?>assets/intro/css/yamm.css" rel="stylesheet" type="text/css">
         <!--must need plugin jquery-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>   
        <!--<script src="<?php //echo base_url('assets/intro');?>/js/jquery.min.js"></script>   -->     
        <!--bootstrap js plugin-->
        <script src="<?php echo base_url('assets/intro');?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
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
        @import "<?=base_url()?>assets/intro/css/demo_table_jui.css";
        @import "<?=base_url();?>assets/intro/css/jquery-ui-1.8.4.custom.css";
    </style>
    <body>
   <style type="text/css">
     @keyframes blink{
0%{opacity: 0;}
50%{opacity: .5;}
100%{opacity: 1;}
}
.btn-primary{color:#fff;background-color:#5e72e4;border-color:#5e72e4;box-shadow:0 4px 6px rgba(50,50,93,.11),0 1px 3px rgba(0,0,0,.08)}.btn-primary:hover{color:#fff;background-color:#3d55df;border-color:#324cdd}.btn-primary.focus,.btn-primary:focus{box-shadow:0 4px 6px rgba(50,50,93,.11),0 1px 3px rgba(0,0,0,.08),0 0 0 0 rgba(118,135,232,.5)}
.carousel-control{top:40%;}
</style>
        <div class="navbar navbar-default navbar-fixed-top yamm sticky" role="navigation " style="background: #f5af39;" >
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="/"><img src="<?php echo base_url('assets/main');?>/images/navbar-akreditasi-b.png" style="float:left;margin-right:4px;width: 60px;margin-top:-30px !important"><img src="<?php echo base_url('assets/main');?>/images/logo_uap.png" style="width: 70px;"></a>
                    
                </div>
                <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">

                        <li>
                            <a href="<?php echo base_url(); ?>"><?php if($this->uri->segment(1)=='log'){echo "";}else{  ?><i class="fa fa-home" aria-hidden="true" style="font-size: 20px;"></i>
                         <?php }?></a>
                        </li>

                         <!--menu home li end here-->
                         <li>
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Menu Utama</span> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <?php
                                foreach ($menupmb as $key => $value) {
                                ?>
                                    <li ><a href="<?=base_url($key)?>"><?=$value?></a></li>
                                <?php 
                                } 
                                ?>
                                <li><a href="<?=base_url()?>page/jadwal_kegiatan">Jadwal Kegiatan PMB</a></li>
                                <li><a href="<?=base_url()?>page/perlengkapan">Perlengkapan PSU</a></li>
                                <!--<li><a href="<?=base_url()?>page/datamhs">Calon Mahasiswa</a></li>-->
                             </ul>
                        </li>
                       
                       <li><a href="<?=base_url()?>page/faq">FAQ</a>
                       </li>

               
                   
                        
                    <?php
                        if(!$this->session->userdata('username')) {?>
                         <li>
                            <a href="<?=base_url()?>page/register">Daftar</a>
                        </li>
                        <li class="dropdown">
                            <a href="<?=base_url()?>page/login"><?php if($this->uri->segment(1)=='log'){echo "";}else{echo "Login";}?></a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-login-box animated fadeInUp" style="min-width:300px; padding:10px;">
                                <form role="form" method="post" action="" id="formlogin">
                                <h4>Masuk</h4>
                                <div id="alert"></div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" class="form-control" placeholder="Username" id="username" required="required" maxlength="65" name="username">
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input type="password" class="form-control" placeholder="Password" id="password"  required="required" maxlength="255" name="password">
                                        </div>
                                        <a class="btn btn-md btn-primary" id="btnLogin" onclick="masuk();" style="float:right; color:#FFF; margin:5px;">Login</a>
                                        <div class="clearfix"></div>
                                        <hr>
                                        <p>Belum punya akun! <a href="<?php echo base_url(); ?>page/registrasi">Daftar</a></p>
                                    </div>
                                </form>
                            </div>
                            <!--menu login li end here--> 
                    <?php }else{ ?>
                            <!--
                            <li class="dropdown ">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-envelope"></i></a>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-login-box animated fadeInUp" style="min-width:300px; padding:10px;">
                                    <li><a href="#"> No message</a></li>
                                    <li class="divider"></li>
                                </ul>
                            </li>
                            <li class="dropdown ">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-bell"></i></a>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-login-box animated fadeInUp" style="min-width:300px; padding:10px;">
                                    <li><a href="#"> No notification</a></li>
                                    <li class="divider"></li>
                                </ul>
                            </li>
                            -->
                            <li class="dropdown ">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-user"></i>
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-login-box animated fadeInUp" style="min-width:300px; padding:10px;">
                                    <li><a href="<?php echo base_url('main/logout') ?>"><i class="fa fa-sign-out"></i> Logout</a></li>
                                </ul> 
                            </li>                                 
                            <?php } ?>  
                       
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--container-->
        </div><!--navbar-default-->

        <script type="text/javascript">
        var $jquery=jQuery.noConflict();
   
             function masuk(){
                var username = $jquery('#username').val();
                var password = $jquery('#password').val();
                 
                document.getElementById('btnLogin').innerHTML="<i class='fa fa-circle-o-notch fa-spin'></i>Please Wait...";


                  $jquery.ajax({
                    url   : '<?php echo base_url('main/login_process');?>',
                    data  : 'username='+username+'&password='+password,
                    type  : 'POST',
                    dataType: 'html',
                    success : function(pesan){
                        if($jquery.trim(pesan) =='ok'){
                          window.location = '<?php echo base_url('main_user');?>';
                        }else{
                            document.getElementById('alert').innerHTML=pesan;
                            document.getElementById('btnLogin').innerHTML="Login";
                        }
                    },
                });
            }
        </script>