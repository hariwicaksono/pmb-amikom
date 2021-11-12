    <div class="gdt-purple-1 text-white border-0 py-5">
        <div class="container"> 
            <div class="row">
                <div class="col-md-3">
                    <a href="https://goo.gl/maps/JExNCJiqcFrVX6iUA" alt="Link Maps Amikom Purwokerto"><img src="<?php echo base_url(); ?>assets/main/images/amikom-map.png" class="img-fluid py-3" width="350" alt="amikom-map" /></a>
                </div>
                <div class="col-md-6">
                    <h5>Hubungi Kami</h5>
                    <h4 class="mb-2">Universitas Amikom Purwokerto</h4>
                    <h6 style="font-weight: 400">Jl. Letjen Pol Soemarto Watumas<br/>
                        Purwanegara, Purwokerto, Banyumas 53127<br/>
                        Telp: (0281) 623321<br/>
                    Whatsapp: 0858 4888 8445</h6>
                    <!--<a href="https://pesan.link/tanyaAmikom" target="_blank" class="btn btn-success mb-2" title="Chat Kami" alt="Chat Kami" rel="noopener noreferrer"><i class="fa fa-whatsapp" aria-hidden="true"></i> Chat Kami</a>-->
                </div>

                <div class="col-md-3">
                    <h4 class="mb-3">Scan Lokasi</h4>
                    <img src="<?php echo base_url(); ?>assets/main/images/amikom-qr.png" class="img-fluid" width="120" alt="" />
                </div>
            </div>
            
            <div class="text-white mt-3">© <?=date('Y')?>. Universitas Amikom Purwokerto - www.amikompurwokerto.ac.id</div>
        </div>
    </div>
    <div id="WhatsApp"></div>
    <!--bootstrap js plugin-->
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js');?>" type="text/javascript"></script>   
    <script src="<?php echo base_url('assets/js/preloader.js');?>" type="text/javascript"></script>    
    <script src="<?php echo base_url('assets/offline-js/offline.js');?>" type="text/javascript"></script>   
    <script src="<?php echo base_url('assets/js/bootstrap-notify.min.js');?>" type="text/javascript"></script> 
    <script src="<?php echo base_url('assets/js/zoom.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/aos.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/loadingoverlay.min.js');?>" type="text/javascript"></script>  
    <script src="<?php echo base_url('assets/js/floating-wpp.min.js');?>" type="text/javascript"></script> 
    <script src="<?php echo base_url('assets/jquery-ui-1.12.1.custom/jquery-ui.min.js');?>" type="text/javascript"></script>

    <script type="text/javascript">
        var $jQuery=jQuery.noConflict();
        $jQuery(document).ready(function () {
            $jQuery('#sidebarCollapse').on('click', function () {
                $jQuery('#sidebar').toggleClass('active');
            });
        });
    </script>
    <script>
        var $jQuery=jQuery.noConflict();
        $jQuery(document).ready(function(){
            $jQuery('[data-toggle="tooltip"]').tooltip()

            if ($jQuery(window).width() < 768) {
                $jQuery('#sidebar').removeClass('active');
            }

        })
    </script>
    
    <script>
        AOS.init();
    </script>
    <script type="text/javascript">
        var $jQuery=jQuery.noConflict();
        v = 
        ((h = $jQuery),
        {
            activateIframeSrc: function (t) {
                var e = h(t);
                e.attr("data-src") && e.attr("src", e.attr("data-src"));
            }
        });
        $jQuery(document).ready(function () {
            $jQuery(".video-cover .video-play-icon").on("click touchstart", function () {
                var t = $jQuery(this).closest(".video-cover").find("iframe");
                v.activateIframeSrc(t), $jQuery(this).parent(".video-cover").addClass("video-cover-playing");
            }),
            !0 === "ontouchstart" in document.documentElement &&
            $jQuery(".video-cover").each(function () {
                $jQuery(this).addClass("video-cover-touch");
                var t = $jQuery(this).closest(".video-cover").find("iframe");
                v.activateIframeSrc(t);
            });
        });
    </script>
   
    <script>
        var $jQuery=jQuery.noConflict();
        $jQuery("#carousel").LoadingOverlay("show", {
            background  : "rgba(255, 255, 255, 0.8)",
            image           : "<?php echo base_url('assets/main/images/');?>/loading.svg",
            size: 25
        });
        $jQuery("#carousel").LoadingOverlay("show");
        $jQuery("#carousel").LoadingOverlay("hide", true);
        
    </script> 
    
    <script type="text/javascript">
        var $jQuery=jQuery.noConflict();
        $jQuery(function () {
            $jQuery('#WhatsApp').floatingWhatsApp({
                phone: '6285848888445',
                popupMessage: 'Halo, ada yang bisa kami bantu?',
                showPopup: true
            });
        });
    </script>
    
    <script type="text/javascript">
        var $jQuery=jQuery.noConflict();
        $jQuery(document).ready(function(){
           
            $jQuery('#search').autocomplete({
                source: "<?php echo site_url('main/get_search');?>",
                minLength: 4,
                select: function (event, ui) {
                    $jQuery(this).val(ui.item.value);
                    $jQuery("#form_search").submit(); 
                }
            });
            
        });
    </script>

</body>
</html>

