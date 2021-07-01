

            
                <div class="col-sm-3">
                <?php if(!empty($this->session->userdata['username'])) { ?>
                        <div class="panel panel-info">
                            <div class="panel-heading" style="background-color: #110d56;text-align: center;">
                                <h3 class="panel-title" style="color: #fff;">Registrasi</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                <li style="list-style-type: none;" class="list-group-item"><a href="<?=base_url('main_user');?>">Isi Biodata</a></li>
                                <?php
                                    foreach ($menureg as $row => $data) { 
                                        if ($data !='Registrasi') {
                                ?>
                                        <li style="list-style-type: none;" class="list-group-item"><a href="<?=base_url($row);?>"><?=$data?></a></li>
                                <?php
                                        }
                                    } ?>

                                </div>
                            </div>
                        </div>
                       <?php } ?>                     
                        <div class="panel panel-info">
                            <div class="panel-heading" style="background-color: #110d56;text-align: center;">
                                <h3 class="panel-title"  style="color: #fff;">Menu Utama PMB Tahun Penerimaan <?=$tahun_pmb?></h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                <?php
                                    foreach ($menupmb as $key => $value) { ?>
                                    <li style="list-style-type: none;" class="list-group-item"><a href="<?=base_url($key)?>"><?=$value?></a></li>
                                <?php } ?>
                                    <li style="list-style-type: none;" class="list-group-item"><a href="<?=base_url()?>page/registrasi">Daftar</a></li>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-info">
                            <div class="panel-heading" style="background-color: #110d56;text-align: center;">
                                <h3 class="panel-title"  style="color: #fff;">Direktori Kuliah Umum</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                <?php
                                    foreach ($menukulum as $row => $data) { ?>
                                    <li style="list-style-type: none;" class="list-group-item"><a href="<?=base_url($row);?>"><?=$data?></a></li>
                                <?php } ?>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-info">
                            <div class="panel-heading" style="background-color: #110d56;text-align: center;">
                                <h3 class="panel-title"  style="color: #fff;">Direktori PSU</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                <?php
                                foreach ($menupsu as $rows => $datas) { ?>
                                    <li style="list-style-type: none;" class="list-group-item"><a href="<?=base_url($rows);?>"><?=$datas?></a></li>
                                <?php } 
                                ?>
                                </div>
                            </div>
                        </div>
                        <!--
                        <div class="panel panel-info">
                            <div class="panel-heading" style="background-color: #110d56;text-align: center;">
                                <h3 class="panel-title"  style="color: #fff;">Direktori Download Center</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                <?php
                                foreach ($menudownload as $link => $judul) { ?>
                                    <li style="list-style-type: none;" class="list-group-item"><a href="<?=base_url($link);?>"><?=$judul?></a></li>
                                <?php } ?>
                                </div>
                            </div>
                        </div>
                        -->
                </div>     
            </div>   
        </div>
      <!-- wide-imge showcase -->


             