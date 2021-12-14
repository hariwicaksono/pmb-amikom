    <div class="gdt-purple-1 text-white border-0 py-5">
        <div class="container">
            <div class="row">
                <!--<div class="col-md-2">
                    <a href="https://goo.gl/maps/JExNCJiqcFrVX6iUA" alt="Link Maps Amikom Purwokerto"><img src="<?//= base_url('assets/main/images/amikom-map.png'); ?>" class="img-fluid py-3" width="350" alt="amikom-map" /></a>
                </div>-->
                <div class="col-md-7">
                    <h5>Hubungi Kami</h5>
                    <h2 class="mb-2">Universitas Amikom Purwokerto</h2>
                    <h6 style="font-weight: 400">Jl. Letjen Pol Soemarto Watumas<br />
                        Purwanegara, Purwokerto, Banyumas 53127<br />
                        Telp: (0281) 623321<br />
                        Whatsapp: 0858 4888 8445</h6><br/>
                    <!--<a href="https://pesan.link/tanyaAmikom" target="_blank" class="btn btn-success mb-2" title="Chat Kami" alt="Chat Kami" rel="noopener noreferrer"><i class="fa fa-whatsapp" aria-hidden="true"></i> Chat Kami</a>-->
                </div>

                <div class="col-md-5">
                    <a href="https://goo.gl/maps/JExNCJiqcFrVX6iUA" alt="Link Maps Amikom Purwokerto"><h4 class="mb-3">Lokasi</h4></a>
                    <!--<img src="<?//= base_url('assets/main/images/amikom-qr.png'); ?>" class="img-fluid" width="120" alt="" />-->
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.5807772891662!2d109.22903365069075!3d-7.400779794633966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655ef25207e1e1%3A0xcedb82ef04ed7e7c!2sUniversitas%20Amikom%20Purwokerto!5e0!3m2!1sid!2sid!4v1639358640497!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>

            <div class="text-white mt-3">© <?= date('Y') ?>. Universitas Amikom Purwokerto - www.amikompurwokerto.ac.id</div>
        </div>
    </div>

    <div id="WhatsApp"></div>

    <!--bootstrap js plugin-->
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/plugins/offline-js/offline.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/zoom.min.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/aos.js'); ?>" type="text/javascript"></script>
    <!--<script src="<?//= base_url('assets/js/loadingoverlay.min.js'); ?>" type="text/javascript"></script>-->
    <script src="<?= base_url('assets/js/floating-wpp.min.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js'); ?>" type="text/javascript"></script>

    <script type="text/javascript">
        var $jQuery = jQuery.noConflict();
        $jQuery(document).ready(function() {
            $jQuery('#sidebarCollapse').on('click', function() {
                $jQuery('#sidebar').toggleClass('active');
            });
        });
    </script>

    <script>
        var $jQuery = jQuery.noConflict();
        $jQuery(document).ready(function() {
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
        var $jQuery = jQuery.noConflict();
        v =
            ((h = $jQuery), {
                activateIframeSrc: function(t) {
                    var e = h(t);
                    e.attr("data-src") && e.attr("src", e.attr("data-src"));
                }
            });
        $jQuery(document).ready(function() {
            $jQuery(".video-cover .video-play-icon").on("click touchstart", function() {
                    var t = $jQuery(this).closest(".video-cover").find("iframe");
                    v.activateIframeSrc(t), $jQuery(this).parent(".video-cover").addClass("video-cover-playing");
                }),
                !0 === "ontouchstart" in document.documentElement &&
                $jQuery(".video-cover").each(function() {
                    $jQuery(this).addClass("video-cover-touch");
                    var t = $jQuery(this).closest(".video-cover").find("iframe");
                    v.activateIframeSrc(t);
                });
        });
    </script>

    <!--<script>
        var $jQuery = jQuery.noConflict();
        $jQuery("#carousel").LoadingOverlay("show", {
            background: "rgba(255, 255, 255, 0.8)",
            image: "<?//= base_url('assets/main/images/loading.svg'); ?>",
            size: 25
        });
        $jQuery("#carousel").LoadingOverlay("show");
        $jQuery("#carousel").LoadingOverlay("hide", true);
    </script>-->

    <script type="text/javascript">
        var $jQuery = jQuery.noConflict();
        $jQuery(function() {
            $jQuery('#WhatsApp').floatingWhatsApp({
                phone: '6285848888445',
                popupMessage: 'Halo, ada yang bisa kami bantu?',
                showPopup: true
            });
        });
    </script>

    <script type="text/javascript">
        var $jQuery = jQuery.noConflict();
        $jQuery(document).ready(function() {

            $jQuery('#search').autocomplete({
                source: "<?= site_url('main/get_search'); ?>",
                minLength: 4,
                select: function(event, ui) {
                    $jQuery(this).val(ui.item.value);
                    $jQuery("#form_search").submit();
                }
            });

        });
    </script>
</body>
</html>