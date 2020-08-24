<style type="text/css">
    .form-horizontal .control-label{
    text-align: left;
    width: 15%;
}
</style>
 <div class="divide10" style="margin-top: 80px;"></div>
<div class="col-sm-12">
 	<div class="well wow animated fadeInLeft">
    <?php  $info=$this->session->flashdata('info');
                            if (!empty($info)) { ?>
    <div class="alert alert-success alert-dismissable" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <?=$info?>
    </div>
<?php } ?>
 		<form class="form-horizontal" method="post" action="" id="form">
         <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
         
 			<div class="form-group">
 				<label class="control-label col-sm-3 ">
 					Nama Lengkap*
 				</label>
 				<div class="col-sm-7">
 					<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" >
 				</div>
 			</div>
 			<div class="form-group">
 				<label class="control-label col-sm-3">
 					Telp/HP*
 				</label>
 				<div class="col-sm-4">
 					<input type="text" name="telp" class="form-control" placeholder="Telp/HP" maxlength="15" minlength="6"
                    onkeypress="return hanyaAngka(this)">
 				</div>
 			</div>
 			<div class="form-group">
 				<label class="control-label col-sm-3">
 					Email
 				</label>
 				<div class="col-sm-7">
 					<input type="text" name="email" class="form-control" id="email" placeholder="sample@sample.com">
                    <div id="pesan" style="color: red;"></div>
 				</div>
 			</div>
            <div class="form-group">
                <label class="control-label col-sm-3">
                    Nama Pengguna
                </label>
                <div class="col-sm-7">
                    <input type="text" name="username" class="form-control" id="username" placeholder="Nama Pengguna">
                </div>
            </div>
             <div class="form-group">
                <label class="control-label col-sm-3">
                    Kata Sandi
                </label>
                <div class="col-sm-7">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Kata Sandi">
                </div>
            </div>
 			<div class="form-group">
 				<label class="control-label col-sm-3">
 					<button class="btn btn-primary" id="simpan">SIMPAN</button>
 				</label>
 			</div>

 		</form>
 	</div>
</div>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<script type="text/javascript">
var $jne=jQuery.noConflict();
   $jne(document).ready(function() {
$jne("#form").validate({
    rules:{     
            nama:"required",
           	email : { required : true, email: true,},
            telp : { required : true, number:true, minlength : 6 },
            username : { required : true },
            password : { required : true },
            
          },
    messages:{ 
            nama: {
                required:'<span>Nama Mahasiswa wajib diisi</span>'},
            telp : {
            	required : '<span>Telp/HP wajib diisi</span>',
            	number : '<span>Telp/HP harus berupa angka</span>',
            	minlength : '<span>Telp/HP min 6 angka</span>',
            },
            username: {
                required:'<span>Username wajib diisi</span>'},
            password: {
                required:'<span>Password wajib diisi</span>'},
            email: {
                email:'<span>Email tidak valid</span>'}



        },
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
var $jne3=jQuery.noConflict();
$jne3(document).ready(function(){

   

    $jne3('#email').blur(function(event){
             event.preventDefault();
        var email = $jne3('#email').val();
        if(email != '')
        {
            
         $jne3.ajax({
                type:'post',
                url:"<?php echo base_url(); ?>" + "main/validasi_email",
                data:{email:email},
                cache:false,
                beforeSend:function(){
                    $jne3("#pesan").css("display","none");
                    $jne3("#simpan").attr('disabled',false);
                 },
                success: function(returndata){

                   if($jne3.trim(returndata)!='ok'){
                            $jne3("#pesan").css("display","block");
                             $jne3('#pesan').html(returndata);
                             $jne3("#simpan").attr('disabled',true);
                        }

                }
            });
           
        }
    });

})
</script>



    