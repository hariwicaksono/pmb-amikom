

<div class="row mb-2">
<div class="col-md-8">
<div class="card h-100 shadow">
<div class="card-body">


</div>
</div>
</div>

<div class="col-md-4">
<div class="card h-100 shadow">
	
<div class="card-body">
<h5 class="card-title">Login</h5>
<form role="form" method="post" action="" id="formlogin">

            <div id="alerts"></div>

                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-user"></i></div>
                        </div>
                        <input type="text" class="form-control input-lg" placeholder="Username" id="usernames" name="username" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-lock"></i></div>
                        </div>
                        <input type="password" class="form-control input-lg" placeholder="Password" id="passwords" name="password" required="required">
                    </div>
                </div>
                
                <div class="form-group">
                <a href="#" class="btn btn-primary btn-block" id="btnLogin" onclick="masuk_log();"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
                </div>
                   
                </div>
            </form>

</div>
</div>
</div>

</div>


<div class="row-fluid">
            <div class="col-md-12">
            <div class="card bg-danger text-white shadow px-3 py-3">
            <div class="card-body">
            <div class="card-title" style="font-size: 2.4rem; font-weight: 500">Daftar Sekarang
			</div>
			<p>
            Buruan gabung yuk sob, di kampus dengan tenaga pengajar yang kompeten di bidangnya.
            <br/>JOIN AMIKOM PURWOKERTO NOW!
			</p>
            <a href='<?php echo base_url();?>page/register' class="btn btn-light btn-lg rounded-pill">Daftar Sekarang</a>
			</div>
			</div>
			</div>
</div>


			
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>

<script type="text/javascript">

        var $jquery=jQuery.noConflict();
        
             function masuk_log(){
                
                var username = $jquery('#usernames').val();
                var password = $jquery('#passwords').val();

                if(username.length == "") {
                    $jquery.notify({
                        title: "Perhatian",
                        message: "Username harus diisi"
                    },{
                        type: 'danger'
                    });

                } else if(password.length == "") {
                    $jquery.notify({
                        title: "Perhatian",
                        message: "Password harus diisi"
                    },{
                        type: 'warning'
                    });

                } else {

                document.getElementById('btnLogin').innerHTML="<i class='fa fa-circle-o-notch fa-spin'></i> Please Wait...";
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
                
            }
     
        </script>
