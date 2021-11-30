<?php
$this->load->view('layout/header');
?>

<?php if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'page' && $this->uri->segment(2) == '') { ?>
  <div class="container-fluid">
    <div class="shadow mt-3 mb-2">

      <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <?php
          for ($i = 0; $i < $slideshow->num_rows(); $i++) {
            echo '
                <li data-target="#carousel" data-slide-to="' . $i . '"';
            if ($i == 0) {
              echo 'class="active"';
            }
            echo '></li>';
          } ?>
        </ol>
        <div class="carousel-inner" role="listbox">
          <?php
          if ($slideshow->num_rows() > 0) {
            $i = 0;
            foreach ($slideshow->result() as $gallery) {
              $i++;
          ?>
              <div class="carousel-item <?php echo ($i == 1 ? 'active' : ''); ?>">
                <img class="img-fluid" src="<?php echo base_url(($gallery->img_slideshow == "" ? 'no_thumbnail.jpg' : $gallery->img_slideshow)); ?>" alt="UNIVERSITAS AMIKOM PURWOKERTO">
              </div>

          <?php
            }
          }
          ?>
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
    </div>
  </div>
<?php } elseif ($this->uri->segment(1) == 'page' && $this->uri->segment(2) == 'petunjuk') { ?>
  <div class="container-fluid">
    <div class="shadow mt-2 mb-2">

      <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel" data-slide-to="0" class="active"></li>
          <li data-target="#carousel" data-slide-to="1"></li>
          <li data-target="#carousel" data-slide-to="2"></li>

        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img alt="petunjuk1" src="<?php echo base_url('files/PetunjukA.png'); ?>" width="100%">
          </div>
          <div class="carousel-item">
            <img alt="petunjuk2" src="<?php echo base_url('files/PetunjukB.png'); ?>" width="100%">
          </div>

          <div class="carousel-item">
            <img alt="petunjuk3" src="<?php echo base_url('files/PetunjukC.png'); ?>" width="100%">
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

    </div>
  </div>

<?php
} elseif ($this->uri->segment(1) == 'page' && $this->uri->segment(2) == 'Beasiswa') { ?>
  <div class="container-fluid">
    <div class="shadow mt-2 mb-2">

      <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel" data-slide-to="0" class="active"></li>
          <li data-target="#carousel" data-slide-to="1"></li>
          <li data-target="#carousel" data-slide-to="2"></li>
          <li data-target="#carousel" data-slide-to="3"></li>
          <li data-target="#carousel" data-slide-to="4"></li>
          <li data-target="#carousel" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img alt="beasiswa1" src="<?php echo base_url('files/BeasiswaA.png'); ?>" width="100%">
          </div>
          <div class="carousel-item">
            <img alt="beasiswa2" src="<?php echo base_url('files/BeasiswaB.png'); ?>" width="100%">
          </div>

          <div class="carousel-item">
            <img alt="beasiswa3" src="<?php echo base_url('files/BeasiswaC.png'); ?>" width="100%">
          </div>
          <div class="carousel-item">
            <img alt="beasiswa4" src="<?php echo base_url('files/BeasiswaD.png'); ?>" width="100%">
          </div>
          <div class="carousel-item">
            <img alt="beasiswa5" src="<?php echo base_url('files/BeasiswaE.png'); ?>" width="100%">
          </div>
          <div class="carousel-item">
            <img alt="beasiswa6" src="<?php echo base_url('files/BeasiswaF.png'); ?>" width="100%">
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

    </div>
  </div>

<?php
} elseif ($this->uri->segment(1) == 'page' && $this->uri->segment(2) == 'Jalur_penerimaan') { ?>
  <div class="container-fluid">
    <div class="shadow mt-2 mb-2">

      <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel" data-slide-to="0" class="active"></li>
          <li data-target="#carousel" data-slide-to="1"></li>
          <li data-target="#carousel" data-slide-to="2"></li>

        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img alt="Jalur_penerimaan" src="<?php echo base_url('files/JalurPenerimaanA.png'); ?>" width="100%">
          </div>
          <div class="carousel-item">
            <img alt="Jalur_penerimaan" src="<?php echo base_url('files/JalurPenerimaanB.png'); ?>" width="100%">
          </div>

          <div class="carousel-item">
            <img alt="Jalur_penerimaan" src="<?php echo base_url('files/JalurPenerimaanC.png'); ?>" width="100%">
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

    </div>
  </div>

<?php
} elseif ($this->uri->segment(1) == 'page' && $this->uri->segment(2) == 'fasilitas') { ?>
  <div class="container-fluid">
    <div class="shadow mt-2 mb-2">

      <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel" data-slide-to="0" class="active"></li>
          <li data-target="#carousel" data-slide-to="1"></li>
          <li data-target="#carousel" data-slide-to="2"></li>
          <li data-target="#carousel" data-slide-to="3"></li>

        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img alt="fasilitas" src="<?php echo base_url('files/FasilitasA.png'); ?>" width="100%">
          </div>
          <div class="carousel-item">
            <img alt="fasilitas" src="<?php echo base_url('files/FasilitasB.png'); ?>" width="100%">
          </div>

          <div class="carousel-item">
            <img alt="fasilitas" src="<?php echo base_url('files/FasilitasC.png'); ?>" width="100%">
          </div>
          <div class="carousel-item">
            <img alt="fasilitas" src="<?php echo base_url('files/FasilitasD.png'); ?>" width="100%">
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

    </div>
  </div>

<?php
}
$this->load->view($konten);
//$this->load->view('view_menu');

?>


</div>


</div> <!-- content -->
</div> <!-- wrapper -->

<?php
$this->load->view('layout/footer');
?>