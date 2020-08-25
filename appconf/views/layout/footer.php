            <div class="text-white border-0 py-5" style="background-color:#2C0E4C">
            <div class="container">
            <div class="row">
            <div class="col-md-3">
                <img src="<?php echo base_url(); ?>assets/main/images/amikom-map.png" class="img-fluid py-3" width="350" alt="" />
                </div>
                <div class="col-md-6">
                <h4>Info Kontak</h4>
                <h5>Universitas Amikom Purwokerto<br/>
                <small>Jl. Letjen Pol Soemarto Watumas<br/>
                Purwanegara, Purwokerto, Banyumas 53127<br/>
                Telp: (0281) 623321<br/>
                Whatsapp: 0858 4888 8445</small></h5>
                <a href="https://pesan.link/tanyaAmikom" target="_blank" class="btn btn-success" title="Chat Kami" alt="Chat Kami" rel="noopener noreferrer"><i class="fa fa-whatsapp" aria-hidden="true"></i> Chat Kami</a>
                </div>

                <div class="col-md-3">
                <h4>Scan Lokasi</h4>
                <img src="<?php echo base_url(); ?>assets/main/images/amikom-qr.png" class="img-fluid" width="120" alt="" />
                </div>
            </div>
           
            <div class="text-white mt-3">© 2020. Universitas Amikom Purwokerto - www.amikompurwokerto.ac.id</div>
            </div>
            </div>

    </body>
</html>

<script type="text/javascript" src="<?=base_url()?>assets/intro/js/pagination.js" ></script>
    <script type="text/javascript">
   var $jquery=jQuery.noConflict();
    jQuery(document).ready(function(){
        
        $jquery('#tabel tbody').paginathing({
        perPage: 50,
        insertAfter: '#tabel'
        });
    });
</script>
<script type="text/javascript">
        jQuery(document).ready(function () {
            $jquery('#sidebarCollapse').on('click', function () {
                $jquery('#sidebar').toggleClass('active');
            });
        });
    </script>