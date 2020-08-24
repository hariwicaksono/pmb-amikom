<style type="text/css">
body{background:rgba(71, 35, 113, 0.99) url('../assets/main/images/bg.png') no-repeat center center fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;}
.form-horizontal .control-label{
    text-align: left;
    width: 15%;
}

label.error {
    color: red;
    font-size: 1rem;
    display: block;
    margin-top: 2px;
}

input.error {
    border: 1px dashed red;
    font-weight: 300;
    color: red;
}
input.form-control,
.form-control
{
    font-size:16px;
    color: #212121;
    font-weight:500;
}
</style>
 <div class="divide10" style="margin-top: 8rem;"></div>

<div class="container-fluid" style="margin-top: 2rem;margin-bottom: 2rem">
 	<div class="wow animated fadeInDown">

<div class="row">
     <div class="col-md-8 col-md-offset-2">
     <div class="panel panel-default">
     <div class="panel-heading"><h3 style="margin-bottom:0rem;padding-top:1rem;padding-bottom:1rem">Daftar Akun <small>PMB Universitas AMIKOM Purwokerto</small></h3></div>
            <div class="panel-body">
    <?php  $info=$this->session->flashdata('info');
                            if (!empty($info)) { ?>
    <div class="alert alert-success alert-dismissable" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <?=$info?>
    </div>
    <?php } ?>

 		<form class="" method="post" action="" id="form">
         <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
         
 			<div class="form-group">
 				<label class="control-label" style="font-size: 1.2rem;">
 					Nama Lengkap*
 				</label>
 				<div class="">
 					<input type="text" name="nama" class="form-control input-lg" placeholder="Nama Lengkap" >
 				</div>
 			</div>

             <div class="row">
                <div class="col-sm-6">
                <div class="form-group">
 				<label class="control-label" style="font-size: 1.2rem;">
 					Telp/HP*
 				</label>
 				<div class="">
 					<input type="text" name="telp" class="form-control input-lg" placeholder="Telp/HP" maxlength="15" minlength="6"
                    onkeypress="return hanyaAngka(this)">
 				</div>
 			</div>
                </div>
                <div class="col-sm-6">
                <div class="form-group">
 				<label class="control-label" style="font-size: 1.2rem;">
 					Email*
 				</label>
 				<div class="">
 					<input type="text" name="email" class="form-control input-lg" id="email" placeholder="sample@sample.com">
                    <div id="pesan" style="color: red;font-size: 1rem;"></div>
 				</div>
 			</div>
                </div>
               
                </div>
 			
 			
            <div class="form-group">
                <label class="control-label" style="font-size: 1.2rem;">
                    Username*
                </label>
                <div class="">
                    <input type="text" name="username" class="form-control input-lg" id="username" placeholder="Nama Pengguna">
                </div>
            </div>
             <div class="form-group">
                <label class="control-label" style="font-size: 1.2rem;">
                    Password*
                </label>
                <div class="">
                    <input type="password" name="password" class="form-control input-lg" id="password" placeholder="Kata Sandi">
                </div>
            </div>
 			<div class="form-group">
 				
 					<button class="btn btn-primary btn-lg" id="simpan"><i class="fa fa-check-square-o" aria-hidden="true"></i> Daftar</button>
 			
 			</div>

 		</form>
        </div>
        </div>

         </div>


    </div>

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


<script type="text/javascript">
        var $jquery=jQuery.noConflict();
   
             function masuk_log(){
                var username = $jquery('#usernames').val();
                var password = $jquery('#passwords').val();
                 
                document.getElementById('btnLogin').innerHTML="<i class='fa fa-circle-o-notch fa-spin'></i>Please Wait...";


                  $jquery.ajax({
                    url   : '<?php echo base_url('main/login_process');?>',
                    data  : 'username='+username+'&password='+password,
                    type  : 'POST',
                    dataType: 'html',
                    success : function(pesan){
                        if($jquery.trim(pesan) =='ok'){
                          window.location = '<?php echo base_url('main_user');?>';
                        }else{
                            document.getElementById('alerts').innerHTML=pesan;
                            document.getElementById('btnLogin').innerHTML="Login";
                        }
                    },
                });
            }
        </script>



    