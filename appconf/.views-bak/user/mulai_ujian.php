<style>
input[type="radio"],input[type="checkbox"] {
    -ms-transform: scale(1.5); /* IE 9 */
    -webkit-transform: scale(1.5); /* Chrome, Safari, Opera */
    transform: scale(1.5);
}
</style>
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">Informasi Ujian Online PMB</h3>
    </div>
    <div class="panel-body">
    <div class="row">
    <div class="col-md-8 col-md-offset-2">
<?php
$jumlah = $jumlah_soal;
foreach ($aturan_ujian->result_array() as $row) {
echo "
		<h2 align='center'>$row[nama_ujian]</h2>
		Waktu Pengerjaan : $row[waktu] menit<br/>
		Jumlah Soal : $jumlah<br/>
		<p/>
		<h3>PERATURAN</h3>
		$row[peraturan]<br/>
        ";
        
}
        ?>

<script>
 function cekForm() {
	if (!document.fValidate.agree.checked) {
				alert("Anda belum menyetujui!");
				return false;
		
			}
		}
</script>
<br/>
<div style='text-align:center;'>
<form name="fValidate" method="post" action="<?=base_url()?>main_user/postattempt">
<input type="checkbox" name="agree" id="agree" value="1" required> &nbsp;<span style="text-size:16px">Saya Mengerti dan Siap Untuk Mengikuti Tes</span><br/><br/>
   
   <input type="submit" name="submit" class="btn btn-primary btn-lg" value="MULAI" onclick="cekForm()" 
   <?php if ($biodata['syarat2']=='Sudah') {
       echo "";
   } else {
     echo "disabled";
   }
   ?>
   >
   <br/>
   <?php if ($biodata['syarat2']=='Sudah') {
       echo "";
   } else {
        echo "<br/><div class='text-warning'><i class='fa fa-info-circle' aria-hidden='true'></i> Upload Dokumen terlebih dahulu, Mohon tunggu Dokumen anda diproses oleh Petugas</div>";
   }
   ?>
   
</form>
</div>
</div>
</div>


    </div>
</div>