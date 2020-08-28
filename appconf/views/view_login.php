<div class="container">
<div class="animate__animated animate__slideInDown">

     <?php  $info=$this->session->flashdata('info');
                            if (!empty($info)) { ?>
    <div class="alert alert-success alert-dismissable" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <?=$info?>
    </div>
<?php } ?>

<div class="row justify-content-center">

         <div class="col-md-8">
         <ul class="nav nav-tabs nav-fill bg-white" style="font-size: 1.125rem; font-weight: 500">
                <li class="nav-item">
                    <a class="nav-link active" href='<?php echo base_url();?>page/login'>MASUK</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href='<?php echo base_url();?>page/register'>DAFTAR</a>
                </li>

        </ul>
         <div class="card shadow bg-white border-0">

         <img src="<?php echo base_url('files/3.jpeg'); ?>" class="card-img-top mb-0" alt="Universitas Amikom Purwokerto" />
            <div class="card-body">
            <h4 class="mb-2">Masuk</h4>
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
                <a href="#" class="btn btn-primary btn-block btn-lg" id="btnLogin" onclick="masuk_log();"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
                </div>
                   
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



    