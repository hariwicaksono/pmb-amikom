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

<div class="container-fluid" style="margin-top: 4rem;margin-bottom: 4rem">
 	<div class="wow animated fadeInDown">

<div class="row">

         <div class="col-md-4 col-md-offset-4">
         
         <div class="panel panel-default" style="">
         <div class="panel-heading"><img src="<?php echo base_url('assets/main');?>/images/logo-amikom-pwt.png" width="300" class="img-responsive center-block" alt="Universitas AMIKOM Purwokerto" />
         </div>
            <div class="panel-body" style="padding-top:3rem;padding-bottom:3rem">
            <h4>Masuk</h4>
            <form role="form" method="post" action="" id="formlogin">

            <div id="alerts"></div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control input-lg" placeholder="Username" id="usernames" required="required" maxlength="65" name="username">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control input-lg" placeholder="Password" id="passwords"  required="required" maxlength="255" name="password">
                    </div>
                </div>
                
                <div class="form-group">
                    <a class="btn btn-md btn-primary btn-block btn-lg" id="btnLogin" onclick="masuk_log();"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
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



    