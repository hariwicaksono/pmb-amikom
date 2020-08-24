        <div style="background-color: #110d56;padding-top:3rem;padding-bottom:3rem">
            
             <div class="container-fluid text-center">
            <span style="color: #fff;">Copyright &copy; <?php echo date('Y')?> Universitas AMIKOM Purwokerto</span>
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