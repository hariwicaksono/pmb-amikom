
<div class="card shadow mb-0">
<div class="card-body">

<div class="row">
<div class="col-md-8">
<div class="card mb-0">
<div class="card-body">
<h4 class="card-title">Program Studi</h4>
<ul class="feature-list feature-list-sm row mb-0">

            <li class="col-md-6 mb-0">
              <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <div>
                    <span class="h6">Fakultas Ilmu Komputer</span>
                   
                  </div>
                
                </div>
                <div class="card-body">
                  <ul class="list-unstyled list-spacing-sm">
                    <li>
                      <i class="icon-text-document text-muted"></i>
                      <a href="#">INFORMATIKA (S1)</a>
                    </li>
                    <li>
                      <i class="icon-text-document text-muted"></i>
                      <a href="#">SISTEM INFORMASI (S1)</a>
                    </li>
                    <li>
                      <i class="icon-text-document text-muted"></i>
                      <a href="#">TEKNOLOGI INFORMASI (S1)</a>
                    </li>

                  </ul>
                </div>
              </div>
              <!--end of card-->
            </li>
            <!--end of col-->

            <li class="col-md-6 mb-0">
              <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <div>
                    <span class="h6">Fakultas Bisnis &amp; Ilmu Sosial</span>
                   
                  </div>
                 
                </div>
                <div class="card-body">
                  <ul class="list-unstyled list-spacing-sm">
                    <li>
                      <i class="icon-text-document text-muted"></i>
                      <a href="#">ILMU KOMUNIKASI (S1)</a>
                    </li>
                    <li>
                      <i class="icon-text-document text-muted"></i>
                      <a href="#">BISNIS DIGITAL (S1)</a>
                    </li>
                    <li>
                      <i class="icon-text-document text-muted"></i>
                      <a href="#">BAHASA INGGRIS (D3/PSDKU)</a>
                    </li>

                  </ul>
                </div>
              </div>
              <!--end of card-->
            </li>
            <!--end of col-->
        </ul>

</div>
</div>
</div>

<div class="col-md-4">
<div class="card">
	
<div class="card-body">
<h4 class="card-title">Masuk</h4>
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

</div>
</div>

<div class="container">
<div class="card shadow mb-2">
<div class="card-body">
<div class="row justify-content-center text-center">
            <div class="col-12 col-md-9 col-lg-8">
              <h2 class="h1">Bergabung Bersama Kami</h2>
              <span class="lead">Siapkan masa depanmu dengan belajar di perguruan tinggi unggulan yang berwawasan technopreneur</span>
            </div>
            <!--end of col-->
          </div>
          <!--end of row-->
<div class="row justify-content-center">
            <div class="col-md-8 col-sm-10">
              <div class="video-cover">
                <img alt="Image" src="<?php echo base_url();?>assets/main/images/cover-amikom.jpg" class="bg-image" />
                <div class="video-play-icon">
                <i class="fa fa-play" aria-hidden="true"></i>
                </div>
                <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/4vcF1cVH9Rk?autoplay=1&amp;mute=0&amp;showinfo=0&amp;rel=0" allowfullscreen></iframe>
                </div>
              </div>
              <!--end of video cover-->
            </div>
            <!--end of col-->
          </div>
          <!--end of row-->
</div>
</div>




<div class="card bg-danger text-white shadow px-3 py-3 mb-2">
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
