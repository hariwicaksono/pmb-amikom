<style>
  input[type="radio"],
  input[type="checkbox"] {
    -ms-transform: scale(1.6);
    /* IE 9 */
    -webkit-transform: scale(1.6);
    /* Chrome, Safari, Opera */
    transform: scale(1.6);
  }

  #overlay {
    position: fixed;
    /* Sit on top of the page content */
    display: none;
    /* Hidden by default */
    width: 100%;
    /* Full width (cover the whole page) */
    height: 100%;
    /* Full height (cover the whole page) */
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.8);
    /* Black background with opacity */
    z-index: 2;
    /* Specify a stack order in case you're using a different order for other elements */
    cursor: pointer;
    /* Add a pointer on hover */
  }

  #button {
    position: relative;
    z-index: 22 !important;
  }
</style>
<?php
$waktu = $waktu_selesai;
?>
<script>
  jQuery(document).ready(function($) {
    var timer = null;

    function makeTimer() {

      //var endTime = new Date("29 April 2020 9:56:00 GMT+01:00");	
      var endTime = new Date("<?php echo $waktu ?>");
      endTime = (Date.parse(endTime) / 1000);

      var now = new Date();
      now = (Date.parse(now) / 1000);

      var timeLeft = endTime - now;

      if (timeLeft > 0) {
        var days = Math.floor(timeLeft / 86400);
        var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
        var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
        var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));


        if (hours < "10") {
          hours = "0" + hours;
        }
        if (minutes < "10") {
          minutes = "0" + minutes;
        }
        if (seconds < "10") {
          seconds = "0" + seconds;
        }

        $("#days").html(days + "");
        $("#hours").html(hours + "");
        $("#minutes").html(minutes + "");
        $("#seconds").html(seconds + "");

      } else {
        clearInterval(timer);
        $.notify({
          title: "<strong>Perhatian!</strong>",
          message: "Waktu anda habis. Silahkan klik tombol <a href='#buttonSubmit' alt='Button Submit'><strong class='blinker'>Jawab & Selesai</strong></a> untuk melihat hasil ujian anda."
        }, {
          allow_dismiss: false,
          type: 'danger',
          timer: 0,
        });
        //alert('Waktu anda habis. Silahkan klik tombol JAWAB & SELESAI untuk melihat hasil ujian anda.');
        document.getElementById("overlay").style.display = "block";
        $("#hours").html("00");
        $("#minutes").html("00");
        $("#seconds").html("00 - waktu habis");
      }
    }

    timer = setInterval(function() {
      makeTimer();
    }, 1000);
  });
</script>

<div id="overlay"></div>

<div class="card">
  <div class="card-header">
    <strong>Ujian Online PMB KIP-Kuliah</strong> <span class="pull-right" style="font-size:16px;font-weight:bold;">Waktu: <span id="hours"></span>:<span id="minutes"></span>:<span id="seconds"></span></span>
  </div>

  <div class="card-body">

    <form name="form1" method="post" action="<?= base_url() ?>main_user/postjawaban_kipk">
      <div class="row">
        <div class="col-md-12">
          <?php
          $jumlah = $jumlah_soal;
          $no = 0;
          $urut = 0;
          foreach ($soal as $row) {
            $id = $row["id_soal"];
            $pertanyaan = $row["soal"];
            $pilihan_a = $row["a"];
            $pilihan_b = $row["b"];
            $pilihan_c = $row["c"];
            $pilihan_d = $row["d"];
            $pilihan_e = $row["e"];
          ?>

            <a id="<?php echo $no = $no + 1; ?>"></a>

            <div class="card">

              <input type="hidden" name="id[]" value=<?php echo $id; ?>>
              <input type="hidden" name="jumlah" value=<?php echo $jumlah; ?>>
              <div class="card-header">
                <h5 class="card-title mb-0"><?php echo $urut = $urut + 1; ?>. <?php echo "$pertanyaan"; ?></h5>
              </div>

              <div class="card-body">
                <div class="radio">
                  <label>
                    <input id="pilihan<?php echo $id; ?>" name="pilihan[<?php echo $id; ?>]" type="radio" value="A" onclick="window.localStorage.setItem('<?= $this->session->userdata['email']; ?>_pilihan<?php echo $id; ?>','A');">&nbsp;
                    <span style="font-size:18px;color:#000">A. <?php echo "$pilihan_a"; ?></span>
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input id="pilihan<?php echo $id; ?>" name="pilihan[<?php echo $id; ?>]" type="radio" value="B" onclick="window.localStorage.setItem('<?= $this->session->userdata['email']; ?>_pilihan<?php echo $id; ?>','B');">&nbsp;
                    <span style="font-size:18px;color:#000">B. <?php echo "$pilihan_b"; ?></span>
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input id="pilihan<?php echo $id; ?>" name="pilihan[<?php echo $id; ?>]" type="radio" value="C" onclick="window.localStorage.setItem('<?= $this->session->userdata['email']; ?>_pilihan<?php echo $id; ?>','C');">&nbsp;
                    <span style="font-size:18px;color:#000">C. <?php echo "$pilihan_c"; ?></span>
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input id="pilihan<?php echo $id; ?>" name="pilihan[<?php echo $id; ?>]" type="radio" value="D" onclick="window.localStorage.setItem('<?= $this->session->userdata['email']; ?>_pilihan<?php echo $id; ?>','D');">&nbsp;
                    <span style="font-size:18px;color:#000">D. <?php echo "$pilihan_d"; ?></span>
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input id="pilihan<?php echo $id; ?>" name="pilihan[<?php echo $id; ?>]" type="radio" value="E" onclick="window.localStorage.setItem('<?= $this->session->userdata['email']; ?>_pilihan<?php echo $id; ?>','E');">&nbsp;
                    <span style="font-size:18px;color:#000">E. <?php echo "$pilihan_e"; ?></span>
                  </label>
                </div>
              </div>
            </div>

            <script>
              var thevalue = localStorage.getItem('<?= $this->session->userdata['email']; ?>_pilihan<?php echo $id; ?>');
              var input = $('#pilihan<?php echo $id; ?>').val()
              if (input === thevalue) {
                $("#pilihan<?php echo $id; ?>").prop('checked', true);
              }
            </script>

          <?php } ?>

        </div>

        <!--<div class="col-md-3" style="max-height: 600px;overflow: auto;">
              <input id="button" type="submit" name="submit" class="btn btn-primary btn-lg btn-block active" value="Jawab & Selesai" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')">
              <br/>
              <?php
              //$no=0;
              //$urut=0;
              //foreach ($soal as $row) {
              ?>
                  <a class='btn btn-link' href='#<?php //echo $no=$no+1;
                                                  ?>' role='button'><?php //echo $urut=$urut+1;
                                                                                          ?></a>
              <?php
              //}
              ?>
      </div>-->
      </div>
      <div class="fixed-bottom navbar-dark bg-dark py-2">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-10 text-nowrap overflow-auto">
              <?php
              $no = 0;
              $urut = 0;
              foreach ($soal as $row) { ?>
                <a class='btn btn-default text-light' href='#<?php echo $no = $no + 1; ?>' role='button'><?php echo $urut = $urut + 1; ?></a>
              <?php
              }
              ?>
            </div>
            <div class="col-md-2 ">
              <input id="buttonSubmit" type="submit" name="submit" class="btn btn-danger btn-lg btn-block" value="Jawab & Selesai" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')">
            </div>
          </div>
        </div>
      </div>

    </form>

  </div>
</div>

<script>
  window.onbeforeunload = function() {
    return "Kemungkinan Data akan hilang jika Anda meninggalkan halaman, apakah Anda yakin?";
  };
</script>