<style>
input[type="radio"],input[type="checkbox"] {
    -ms-transform: scale(1.6); /* IE 9 */
    -webkit-transform: scale(1.6); /* Chrome, Safari, Opera */
    transform: scale(1.6);
}
#overlay {
  position: fixed; /* Sit on top of the page content */
  display: none; /* Hidden by default */
  width: 100%; /* Full width (cover the whole page) */
  height: 100%; /* Full height (cover the whole page) */
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.8); /* Black background with opacity */
  z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
  cursor: pointer; /* Add a pointer on hover */
}
#button {
    position: relative;
    z-index: 22 !important;
}

</style>
<?php 
$waktu=$waktu_selesai;
?>
<script>
jQuery(document).ready(function($){
	 var timer = null;
function makeTimer() {

	//var endTime = new Date("29 April 2020 9:56:00 GMT+01:00");	
        var endTime = new Date("<?php echo $waktu?>");	
		endTime = (Date.parse(endTime) / 1000);

		var now = new Date();
		now = (Date.parse(now) / 1000);
		
		var timeLeft = endTime - now;

		if(timeLeft > 0){
		var days = Math.floor(timeLeft / 86400); 
		var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
		var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
		var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));


		if (hours < "10") { hours = "0" + hours; }
		if (minutes < "10") { minutes = "0" + minutes; }
		if (seconds < "10") { seconds = "0" + seconds; }

		$("#days").html(days + "");
		$("#hours").html(hours + "");
		$("#minutes").html(minutes + "");
		$("#seconds").html(seconds + "");
		
	}else{
       clearInterval(timer);
	   alert('Waktu anda habis. Silahkan klik tombol JAWAB & SELESAI untuk melihat hasil ujian anda.');
	   document.getElementById("overlay").style.display = "block";
       $("#hours").html("00");
	     $("#minutes").html("00");
       $("#seconds").html("00 - waktu habis");
      }
}

timer = setInterval(function() { makeTimer(); }, 1000);
});	 
</script>

<div id="overlay"></div>

<div class="panel panel-info">
      <div class="panel-heading">
          <h3 class="panel-title">Ujian Online PMB <span class="pull-right" style="font-size:16px;font-weight:bold;">Waktu: <span id="hours"></span>:<span id="minutes"></span>:<span id="seconds"></span></span></h3>
      </div>

  <div class="panel-body">
    
  <form name="form1" method="post" action="<?=base_url()?>main_user/postjawaban">
    <div class="row">
      <div class="col-md-9" style="max-height: 400px;overflow: auto;">
              <?php 
              $jumlah=$jumlah_soal;
              $no=0;
              $urut=0;
              foreach ($soal as $row) {
                  $id=$row["id_soal"];
                  $pertanyaan=$row["soal"];
                  $pilihan_a=$row["a"];
                  $pilihan_b=$row["b"];
                  $pilihan_c=$row["c"];
                  $pilihan_d=$row["d"];  
                  $pilihan_e=$row["e"]; 
                  ?>

              <a id="<?php echo $no=$no+1; ?>"></a>

        <div class="panel panel-default">   

              <input type="hidden" name="id[]" value=<?php echo $id; ?>>
              <input type="hidden" name="jumlah" value=<?php echo $jumlah; ?>>
              <div class="panel-heading"><h3 class="panel-title"><?php echo $urut=$urut+1; ?>. <?php echo "$pertanyaan"; ?></h3></div>

          <div class="panel-body">
              <div class="radio">
                <label>
                  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="A"> 
                  <span style="font-size:18px;color:#000">A. <?php echo "$pilihan_a";?></span>
                </label>
              </div>
              <div class="radio">
                <label> 
                  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="B"> 
                  <span style="font-size:18px;color:#000">B. <?php echo "$pilihan_b";?></span>
                </label>
              </div>
              <div class="radio">
                <label> 
                  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="C"> 
                  <span style="font-size:18px;color:#000">C. <?php echo "$pilihan_c";?></span>
                </label>
              </div>
              <div class="radio">
                <label> 
                  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="D"> 
                  <span style="font-size:18px;color:#000">D. <?php echo "$pilihan_d";?></span>
                </label>
              </div>
              <div class="radio">
                <label> 
                  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="E"> 
                  <span style="font-size:18px;color:#000">E. <?php echo "$pilihan_e";?></span>
                </label>
              </div>
            </div>
        </div>

              <?php } ?>

      </div>

      <div class="col-md-3">
              <input id="button" type="submit" name="submit" class="btn btn-primary btn-lg btn-block active" value="Jawab & Selesai" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')">
              <br/>
              <?php
              $no=0;
              $urut=0;
              foreach ($soal as $row) {?>
                  <a class='btn btn-default' href='#<?php echo $no=$no+1;?>' role='button'><?php echo $urut=$urut+1;?></a>
              <?php 
              }
              ?>
      </div>
    </div>

  </form>

  </div>
</div>