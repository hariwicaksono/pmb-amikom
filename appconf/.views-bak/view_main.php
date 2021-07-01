<?php
    $this->load->view('layout/header'); 
    $this->load->view('layout/sidemenu');
?>
         

        <?php if($this->uri->segment(1)=='' || $this->uri->segment(1)=='page' && $this->uri->segment(2)=='' ) {?>
          <div style="margin-bottom:60px">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="margin-bottom:5rem">
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
      <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active">
    <img alt="UNIVERSITAS AMIKOM PURWOKERTO"  src="<?php echo base_url('files/Slider_.png'); ?>" width="100%" >
    </div>
    <div class="item">
    <img alt="UNIVERSITAS AMIKOM PURWOKERTO"  src="<?php echo base_url('files/2.png'); ?>" width="100%" >
    </div>
    <div class="item">
      <img alt="UNIVERSITAS AMIKOM PURWOKERTO"  src="<?php echo base_url('files/3.jpeg'); ?>" width="100%" >
    </div>
    <div class="item">
    <img alt="UNIVERSITAS AMIKOM PURWOKERTO"  src="<?php echo base_url('files/4.png'); ?>" width="100%" >
  </div>
    </div>
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

         <!--<div class="flexslider">
                <img alt="UNIVERSITAS AMIKOM PURWOKERTO" src="<?php echo base_url('files/amikom2019.jpg'); ?>" width="100%">
          </div>-->
          </div>      
          <?php } ?>

          
        <div class="container-fluid">
        <?php
         
         $this->load->view($konten);
         //$this->load->view('view_menu');
        
         ?>
         </div>
        <?php 
        $this->load->view('layout/footer');
        ?>