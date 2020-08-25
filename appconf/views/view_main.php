<?php
    $this->load->view('layout/header'); 
?>
         
<div class="container-fluid my-3">
<?php if($this->uri->segment(1)=='' || $this->uri->segment(1)=='page' && $this->uri->segment(2)=='' ) {?>
<div class="shadow mb-3">

  <div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel" data-slide-to="0" class="active"></li>
      <li data-target="#carousel" data-slide-to="1"></li>
      <li data-target="#carousel" data-slide-to="2"></li>
      <li data-target="#carousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
    <img alt="UNIVERSITAS AMIKOM PURWOKERTO"  src="<?php echo base_url('files/Slider_.png'); ?>" width="100%" >
    </div>
    <div class="carousel-item">
    <img alt="UNIVERSITAS AMIKOM PURWOKERTO"  src="<?php echo base_url('files/2.png'); ?>" width="100%" >
    </div>
    <div class="carousel-item">
      <img alt="UNIVERSITAS AMIKOM PURWOKERTO"  src="<?php echo base_url('files/3.jpeg'); ?>" width="100%" >
    </div>
    <div class="carousel-item">
    <img alt="UNIVERSITAS AMIKOM PURWOKERTO"  src="<?php echo base_url('files/4.png'); ?>" width="100%" >
  </div>
    </div>
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>

    <!--<div class="flexslider">
        <img alt="UNIVERSITAS AMIKOM PURWOKERTO" src="<?php echo base_url('files/amikom2019.jpg'); ?>" width="100%">
    </div>-->

</div>        
<?php } ?>
  

    <?php
      
      $this->load->view($konten);
      //$this->load->view('view_menu');
    
      ?>


</div>   


</div> <!-- content -->
</div> <!-- wrapper -->

<?php 
$this->load->view('layout/footer');
?>