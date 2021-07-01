        <div style="background-color: #110d56;padding-top:6rem;padding-bottom:6rem">
            
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


