<style>
input[type="radio"],input[type="checkbox"] {
    -ms-transform: scale(1.5); /* IE 9 */
    -webkit-transform: scale(1.5); /* Chrome, Safari, Opera */
    transform: scale(1.5);
}
</style>

<div class="card">
    <div class="card-header">
       Informasi Ujian Online PMB
    </div>
    <div class="card-body">
    <div class="row justify-content-center">
    <div class="col-md-8">

        <?php if ($biodata['status_registrasi']=='KIP-Kuliah') { ?>
        <?php
            foreach ($aturan_ujian_kipk->result_array() as $row) {
            echo "
                <h3 align='center'>$row[nama_ujian]</h3>
                Waktu Pengerjaan : $row[waktu] menit<br/>
                Jumlah Soal : $row[jumlah_soal]<br/>
                Kesempatan : 1x<br/>
                <p/>
                <h4 class='mb-2'>PERATURAN</h4>
                $row[peraturan]<br/>
                "; 
            }
        ?>
        
        <?php } else if ($biodata['status_registrasi']=='KIP-Kuliah2') { ?>
            <?php
            foreach ($aturan_ujian_kipk->result_array() as $row) {
            echo "
                <h3 align='center'>$row[nama_ujian]</h3>
                Waktu Pengerjaan : $row[waktu] menit<br/>
                Jumlah Soal : $row[jumlah_soal]<br/>
                Kesempatan : 1x<br/>
                <p/>
                <h4 class='mb-2'>PERATURAN</h4>
                $row[peraturan]<br/>
                "; 
            }
        ?>

        <?php } else { ?>
            <?php
            foreach ($aturan_ujian->result_array() as $row) {
            echo "
                <h3 align='center'>$row[nama_ujian]</h3>
                Waktu Pengerjaan : $row[waktu] menit<br/>
                Jumlah Soal : $row[jumlah_soal]<br/>
                Kesempatan : 1x<br/>
                <p/>
                <h4 class='mb-2'>PERATURAN</h4>
                $row[peraturan]<br/>
                "; 
            }
        ?>
        
        <?php }?>

        <script>
        function cekForm() {
            if (!document.fValidate.agree.checked) {
                alert("Anda belum menyetujui!");
                return false;
            }
        }
        </script>

        <div style='text-align:center;'>
            <form name="fValidate" method="post" action="<?=base_url()?>main_user/postattempt">
            <br/>  
            <input type="checkbox" name="agree" id="agree" value="1" required> &nbsp;<span style="text-size:16px">Saya Mengerti dan Siap Untuk Mengikuti Tes</span>
            <br/>  
            <input type="submit" name="submit" class="btn btn-primary btn-lg mt-2" value="MULAI" onclick="cekForm()">
            </form>
        </div>

        
    </div>
    </div>

    </div>
</div>