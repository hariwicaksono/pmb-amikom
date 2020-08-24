<style type="text/css">
  .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 10000;
    top: 0;
    left: 0;
    background-color: #110d56;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;

}

.sidenav a {
    padding: 8px 8px 8px 15px;
    text-decoration: none;
    font-size: 14px;
    color: #394142;
    display: block;
    transition: 0.3s;

}

.sidenav a:hover {
    color: #3b4344;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 14px;}
}
    </style>
    <style type="text/css">
  #img-profil{
   
    padding: 5px;
    background-color: #fff;
    display: inline-block;
    margin: 5px;
  }
</style>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="brand" style="padding-left: 5px;background-color: #fff;"><hr><img src="<?php echo base_url('assets/main');?>/images/logo.png" class="img-responsive" id="img-profil" alt="amikompurwokerto" style="max-width: 70px;height: 50px;float: left;">UNIVERSITAS AMIKOM PURWOKERTO<hr></div>

    
        <a data-toggle="collapse" href="#collapse4" style="color: #fff;"><b>Pendaftaran Calon Mahasiswa</b><b class="caret"></b></a>
     
        <div id="collapse4" class="panel-collapse collapse">
      <ul class="list-group">
       <?php if(!empty($this->session->userdata['username'])) { ?>
       <li class="list-group-item"><a href="<?=base_url('main_user');?>">Isi Biodata</a></li>
       <?php } ?>
                                <?php
                                    foreach ($menureg as $row => $data) { 
                                        if ($data !='Registrasi') {
                                ?>
                                        <li  class="list-group-item"><a href="<?=base_url($row);?>"><?=$data?></a></li>
                                <?php
                                        }
                                    } ?>

      </ul>
    
</div>
<div style=" border-bottom: 2px solid #fff;"></div>
     
    
        <a data-toggle="collapse" href="#collapse1" style="color: #fff;" id='side1'><b>Menu Utama PMB Tahun Penerimaan <?=$tahun_pmb?></b><b class="caret"></b></a>
     
        <div id="collapse1" class="panel-collapse collapse">
      <ul class="list-group">
       <?php
        foreach ($menupmb as $key => $value) { ?>
            <li  class="list-group-item"><a href="<?=base_url($key)?>"><?=$value?></a></li>
        <?php }
            if (empty($this->session->userdata['username'])) { ?>
               
            <li  class="list-group-item"><a href="<?=base_url()?>page/registrasi">Daftar</a></li>
        <?php } ?>
      </ul>
    
</div>
<div style=" border-bottom: 2px solid #fff;"></div>
 <a data-toggle="collapse" href="#collapse2" style="color: #fff;"><b>Direktori Kuliah Umum</b><b class="caret"></b></a>
     
    <div id="collapse2" class="panel-collapse collapse"  style="color: #fff;">
      <ul class="list-group">
        <?php
            foreach ($menukulum as $row => $data) { ?>
                <li  class="list-group-item"><a href="<?=base_url($row);?>"><?=$data?></a></li>
            <?php } ?>
      </ul>
    
    </div>
    <div style=" border-bottom: 2px solid #fff;"></div>
    <a data-toggle="collapse" href="#collapse3" style="color: #fff;"><b>Direktori PSU</b><b class="caret"></b></a>
     
    <div id="collapse3" class="panel-collapse collapse"  style="color: #fff;">
      <ul class="list-group">
        <?php
            foreach ($menupsu as $rows => $datas) { ?>
                <li  class="list-group-item"><a href="<?=base_url($rows);?>"><?=$datas?></a></li>
            <?php }   ?>
      </ul>
    
</div>
<div style=" border-bottom: 2px solid #fff;"></div>
</div>

<script>
        var side = document.getElementById('mySidenav');
        var sidemenu= document.getElementById('sidemenu');
        var side1=document.getElementById('side1');

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
     

}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}



</script>    