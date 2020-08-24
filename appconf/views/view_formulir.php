<div class="col-sm-9">
 	<div class="alert alert-info wow animated fadeInRight" role="alert" style="background-color:#ceb8ed;">
 		Formulir Pendaftaran Mahasiswa Baru STMIK Amikom Purwokerto

 	</div>

 	<div class="well wow animated fadeInLeft">
 		<div class="alert alert-info wow animated fadeInRight">
 			Data Calon Mahasiswa
 		</div>
 		<form class="form-horizontal" method="post" action="" id="form">
 			<div class="form-group">
 				<label class="control-label col-sm-3 ">
 					Nama Lengkap*
 				</label>
 				<div class="col-sm-7">
 					<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" >
 				</div>
 			</div>
 			<div class="form-group">
 				<label class="control-label col-sm-3 ">
 					NIK KTP*
 				</label>
 				<div class="col-sm-7">
 					<input type="text" name="nik" class="form-control" placeholder="No. Induk Kartu Tanda Penduduk" maxlength="16">
 				</div>
 			</div>
 			<div class="form-group">
 				<label class="control-label col-sm-3 ">
 					Tempat Lahir*
 				</label>
 				<div class="col-sm-7">
 					<input type="text" name="temlahir" class="form-control" placeholder="Tempat Lahir">
 				</div>
 			</div>
 			<div class="form-group">
 				<label class="control-label col-sm-3 ">
 					Tanggal Lahir*
 				</label>
 				<div class="col-sm-5">
   					<input class="form-control" id="from" type="text" placeholder="MM/DD/YYYY" name="tglahir">
 				</div>
 			</div>
 			<div class="form-group">
 				<label class="control-label col-sm-3">
 					Jenis Kelamin*
 				</label>
 				<div class="col-sm-5">
 					<label class="radio-inline"><input type="radio" name="jk" value="Pria">Laki-laki</label>
 					<label class="radio-inline"><input type="radio" name="jk" value="Wanita">Perempuan</label>
 				</div>
 			</div>
 			<div class="form-group">
 				<label class="control-label col-sm-3">
 					Agama*
 				</label>
 				<div class="col-sm-5">
 					<select name="agama" class="form-control">
 						<option value="">PILIH</option>
 						<option value="I">ISLAM</option>
 						<option value="P">PROTESTAN</option>
 						<option value="K">KATHOLIK</option>
 						<option value="B">BUDHA</option>
 						<option value="H">HINDU</option>
 						<option value="L">LAINNYA</option>
 					</select>
 				</div>
 			</div>
 			<div class="form-group">
 				<label class="control-label col-sm-3">
 					Asal Sekolah*
 				</label>
 				<div class="col-sm-7">
 					<input type="text" name="asal_sekolah" class="form-control" placeholder="Nama SMK/SMA/PTS/PTN/DLL">
 				</div>
 			</div>
 			<div class="form-group">
 				<label class="control-label col-sm-3">
 					Jurusan SLTA*
 				</label>
 				<div class="col-sm-5">
 					<select class="form-control">
 						<option value="">PILIH</option>
        				<option value="IPA" >IPA</option>
						<option value="IPS" >IPS</option>
						<option value="BAHASA" >BAHASA</option>
						<option value="AKUNTANSI" >AKUNTANSI</option>
						<option value="PERKANTORAN" >PERKANTORAN</option>
						<option value="MESIN" >MESIN</option>
						<option value="LISTRIK" >LISTRIK</option>
						<option value="ELEKTRO" >ELEKTRO</option>
						<option value="TKJ" >TKJ</option>
						<option value="MULTIMEDIA" >MULTIMEDIA</option>
						<option value="RPL" >RPL</option>
						<option value="lainnya" >Lainnya</option>
      				</select>
 				</div>
 			</div>
 			<div class="form-group">
 				<label class="control-label col-sm-3">
 					Rata-rata Nem/UAN*
 				</label>
 				<div class="col-sm-3">
 					<input type="text" name="nem" class="form-control" placeholder="0.00" onkeypress="return hanyaAngka(this)" maxlength="4">
 				</div>
 				<label class="control-label col-sm-2" style="text-align: left;">
 					Tahun Lulus*
 				</label>
 				<div class="col-sm-3">
 					<input type="text" name="thn_lulus" class="form-control" placeholder="Tahun Lulus" onkeypress="return hanyaAngka(this)" maxlength="4">
 				</div>
 			</div>
 			<div class="form-group">
 				<label class="control-label col-sm-3">
 					Alamat*
 				</label>
 				<label class="control-label col-sm-2" style="text-align: left">
 					Jalan*
 				</label>
 				<div class="col-sm-3">
 					<input type="text" name="jln" class="form-control" placeholder="Jalan">
 				</div>
 				<label class="control-label col-sm-1" style="text-align: left">
 					RT*
 				</label>
 				<div class="col-sm-1">
 					<input type="text" name="rt" class="form-control" placeholder="00" maxlength="2">
 				</div>
 				<label class="control-label col-sm-1" style="text-align: left">
 					RW*
 				</label>
 				<div class="col-sm-1">
 					<input type="text" name="rw" class="form-control" placeholder="00" maxlength="2">
 				</div>
 			</div>
 			
 			<div class="form-group">
 				<label class="control-label col-sm-3"></label>
 				<label class="control-label col-sm-2" style="text-align: left;">
 					Kelurahan/Desa*
 				</label>
 				<div class="col-sm-4">
 					<input type="text" name="kelurahan" class="form-control" placeholder="Kelurahan/Desa">
 				</div>
 			</div>
 			<div class="form-group">
 				<label class="control-label col-sm-3"></label>
 				<label class="control-label col-sm-2" style="text-align: left;">
 					Kecamatan*
 				</label>
 				<div class="col-sm-4">
 					<input type="text" name="kecamatan" class="form-control" placeholder="Kabupaten">
 				</div>
 			</div>
 			<div class="form-group">
 				<label class="control-label col-sm-3"></label>
 				<label class="control-label col-sm-2" style="text-align: left;">
 					Kabupaten*
 				</label>
 				<div class="col-sm-4">
 					<select name="kab" class="form-control" id="kab" >
 						<option value="">PILIH</option>
 						<?php $kab=$this->model_crud->selectData("kabupaten");
 								$i=1;
 								foreach ($kab->result() as $key) { ?>
 									<option value="<?=$key->Kdprop?>"><?=$key->NamaKab?></option>
 						<?php	}
 						 ?>
 					</select>
 				</div>
 			</div>
 			<div class="form-group">
 				<label class="control-label col-sm-3"></label>
 				<label class="control-label col-sm-2" style="text-align: left;">
 					Propinsi*
 				</label>
 				<div class="col-sm-4">
 					<select name="prop" class="form-control" disabled id="prop">
 						<option value="">PILIH</option>
 					</select>
 				</div>
 			</div>
 			<div class="form-group">
 				<label class="control-label col-sm-3"></label>
 				<label class="control-label col-sm-2" style="text-align: left;">
 					Kode Pos*
 				</label>
 				<div class="col-sm-4">
 					<input type="text" name="kodepos" class="form-control" placeholder="Kode Pos">
 				</div>
 			</div>
 			<div class="form-group">
 				<label class="control-label col-sm-3"></label>
 				<label class="control-label col-sm-2" style="text-align: left;">
 					Telp/HP*
 				</label>
 				<div class="col-sm-4">
 					<input type="text" name="telp" class="form-control" placeholder="Telp/HP">
 				</div>
 			</div>
 			<div class="form-group">
 				<label class="control-label col-sm-3">
 					Email
 				</label>
 				<div class="col-sm-7">
 					<input type="text" name="email" class="form-control" placeholder="sample@sample.com">
 				</div>
 			</div>
 			<div class="form-group">
 				<label class="control-label col-sm-7">
 					Informasi pertama tentang STMIK Amikom Purwokerto
 				</label>
 			</div>
 			<div class="form-group">
 					<label class="control-label col-sm-8" style="text-align: right;">
 						<input type="checkbox" name="info" value="brosur">Brosur
 						<input type="checkbox" name="info" value="tv">Televisi
 						<input type="checkbox" name="info" value="internet">Internet
 						<input type="checkbox" name="info" value="teman/saudara">Teman/Saudara
 						<input type="checkbox" name="info" value="lainnya">Lainnya
 					</label>
 				
 			</div>
 			<div class="alert alert-info">
 				Data Orang Tua Calon Mahasiswa
 			</div>
 			<div class="form-group">
 				<label class="control-label col-sm-3">
 					Nama Ibu Kandung*
 				</label>
 				<div class="col-sm-7">
 					<input type="text" name="nama_ortu" class="form-control" placeholder="Nama Orang Tua">
 				</div>
 			</div>
 			<div class="form-group">
 				<label class="control-label col-sm-3">
 					<button class="btn btn-info">SIMPAN</button>
 				</label>
 			</div>

 		</form>
 	</div>
</div>
<script src='https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js'></script>
<link href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css' rel='stylesheet' type='text/css'/>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
<script type="text/javascript">
   $(document).ready(function() {
$("#form").validate({
    rules:{     
            nama:"required",
            nik : { required : true, number : true, minlength:16},
            temlahir :{required : true},
            tglahir : {required: true},
            jk : {required : true},
            agama :{required : true},
           	nama_ortu : {required : true},
           	asal_sekolah : {required : true},
           	nem : { required : true },
           	thn_lulus : { required : true, number : true, minlength:4},
           	jln : {required : true},
           	rt : { required : true, number : true, minlength : 2},
           	rw : { required : true, number : true, minlength : 2},
          },
    messages:{ 
            nama: {
                required:'<span>Nama Mahasiswa wajib diisi</span>'},
            nik : {
            	required:'<span>NIK KTP wajib diisi</span>',
            	number :'<span>Wajib Berupa Angka</span>',
            	minlength:'<span>Min 16 Angka</span>',
            },
            temlahir :{
            	required :'<span>Tempat lahir wajib diisi</span>'
            },
            tglahir :{
            	required :'<span>Tanggal lahir wajib diisi</span>'
            },
            jk : {
            	required : '<span>Jenis kelamin wajib dipilih</span>'
            },
            agama : {
            	required : '<span>Agama wajib dipilih</span>'
            },
            nama_ortu : {
            	required : '<span>Nama Orang Tua (Ibu) wajib diisi</span>'
            },
            asal_sekolah : {
            	required : '<span>Asal Sekolah wajib dipilih</span>'
            },
            nem : {
            	required : '<span>Nilai UAS wajib diisi</span>',
            },
            thn_lulus : {
            	required : '<span>Tahun lulus wajib diisi</span>',
            	number : '<span>Tahun lulus harus berupa angka</span>',
            	minlength : '<span>Tahun lulus min 4 angka</span>'
            },
            jln : {
            	required : '<span>Jalan wajib diisi</span>',
            },
            rt : {
            	required : '<span>RT wajib diisi</span>',
            	number : '<span>RT harus berupa angka</span>',
            	minlength : '<span>RT min 2 angka</span>',
            },
            rw : {
            	required : '<span>RW wajib diisi</span>',
            	number : '<span><RW harus berupa angka</span>',
            	minlength : '<span>RW min 2 angka</span>',
            }



        },
     success: function(label) {
        label.text('OK!').addClass('valid');}
    });
});
</script>
<script>
		function hanyaAngka(evt) {
		  if(!/^[0-9.]+$/.test(evt.value))
	{
	var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))
return false;
return true;
	}
		}
	</script>
<script>
    $(function() {
        var dates = $( "#from, #to" ).datepicker({
            defaultDate: "+1w",
            onSelect: function( selectedDate ) {
                var option = this.id == "from" ? "minDate" : "maxDate",
                    instance = $( this ).data( "datepicker" ),
                    date = $.datepicker.parseDate(
                        instance.settings.dateFormat ||
                        $.datepicker._defaults.dateFormat,
                        selectedDate, instance.settings );
                dates.not( this ).datepicker( "option", option, date );
            }
        });
    });
</script>

<script>

$(document).ready(function(){

    $('#kab').click(function(event){
             event.preventDefault();
        var country_id = $('#kab').val();
        if(country_id != '')
        {
            
         $.ajax({
                type:'post',
                url:"<?php echo base_url(); ?>" + "main/getprop",
                data:{kab:country_id},
                cache:false,
                success: function(returndata){
                    $('#prop').html(returndata);
                    $("#prop").attr('disabled',false);
                }
            });
           
        }
    });

    
    })
</script>

    r