<style>
/*--------------------------------------------------------------
# Counts
--------------------------------------------------------------*/
.counts {
  padding: 30px 0;
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

  <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container-fluid">
      <div class="card">
            <div class="card-body">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
  
            <span data-purecounter-start="0" data-purecounter-end="<?=$jumlah_akun?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Daftar Akun Online</p>

          </div>

          <div class="col-lg-3 col-6 text-center">

            <span data-purecounter-start="0" data-purecounter-end="<?=$jumlah_calonsiswa?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Total Formulir Masuk <a href="#" data-toggle="tooltip" title="Pendaftar Offline dan Online"><i class="fa fa-question-circle" aria-hidden="true"></i></a></p>

          </div>

          <div class="col-lg-3 col-6 text-center">

            <span data-purecounter-start="0" data-purecounter-end="<?=$jumlah_tahunlalu?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Pendaftar Tahun Lalu <a href="#" data-toggle="tooltip" title="Tahun Akademik 2020/2021"><i class="fa fa-question-circle" aria-hidden="true"></i></a></p>

          </div>

          <div class="col-lg-3 col-6 text-center">
          
            <span data-purecounter-start="0" data-purecounter-end="<?=$jumlah_beasiswa?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Lulus Beasiswa <a href="#" data-toggle="tooltip" title="Beasiswa KIP-Kuliah/Bidikmisi"><i class="fa fa-question-circle" aria-hidden="true"></i></a></p>

          </div>

        </div>

      </div>
      </div>
      </div>
    </section><!-- End Counts Section -->
	
<script src="https://bootstrapmade.com/demo/templates/Mentor/assets/vendor/purecounter/purecounter.js"></script>