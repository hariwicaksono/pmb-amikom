<style type="text/css">
h4{font-size:18px;font-weight:600}
.error{
color: red;
font-size: 1.1rem;
display: block;
    margin-top: 2px;
}
input.form-control,
.form-control
{
    font-size:14px;
    color: #212121;
    font-weight:500;
}
input[type="radio"],input[type="checkbox"] {
    -ms-transform: scale(1.4); /* IE 9 */
    -webkit-transform: scale(1.4); /* Chrome, Safari, Opera */
    transform: scale(1.4);
}
.radio {
    width: 100%;
}
.card-input-element+.panel {
    height: calc(36px + 2*1rem);
    color: #212121;
    -webkit-box-shadow: none;
    box-shadow: none;
    border: 2px solid #ced4da;
    border-radius: 4px;
    margin-bottom: -10px;
}
  
.card-input-element+.panel:hover {
    cursor: pointer;
}
  
.card-input-element:checked+.panel {
    border: 3px solid #6FA970;
    font-weight: 600;
    -webkit-transition: border .3s;
    -o-transition: border .3s;
    transition: border .3s;
}
  
.card-input-element:checked+.panel::after {
    content: '\f00c';
    color: #3c763d;
    font-family: 'FontAwesome';
    font-size: 24px;
    font-weight: 400;
    -webkit-animation-name: fadeInCheckbox;
    animation-name: fadeInCheckbox;
    -webkit-animation-duration: .5s;
    animation-duration: .5s;
    -webkit-animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}
  
@-webkit-keyframes fadeInCheckbox {
    from {
      opacity: 0;
      -webkit-transform: rotateZ(-20deg);
    }
    to {
      opacity: 1;
      -webkit-transform: rotateZ(0deg);
    }
  }
  
@keyframes fadeInCheckbox {
    from {
      opacity: 0;
      transform: rotateZ(-20deg);
    }
    to {
      opacity: 1;
      transform: rotateZ(0deg);
    }
}

</style>

<?php
if ($biodata['syarat2']=='Sudah') $status='Readonly';
$this->data['tahun_pmb']=$this->mtahun->getThaPmb();
$gelombang=$this->mgelombang->cek_daftar(array('thn_akademik'=>'2018/2019'));
?>     


<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-wpforms" aria-hidden="true"></i> <?php echo "Form Pendaftaran ".$gelombang['gelombang']; ?></h3>
    </div>
    <div class="panel-body">
        <form  method="post" action="<?=base_url()?>main_user/setting_biodata" enctype="multipart/form-data" id="form">

    <input type="hidden" name="relasi" value="1">

    <div class="row-fluid">
        <div class="col-md-7">

        <div class="panel panel-default">

            <div class="panel-body">
            <h4><i class="fa fa-user" aria-hidden="true"></i> Data Diri Pendaftar</h4>

            <div class="form-group">

            <div class="row">
                <div class="col-sm-7">
                <label class="control-label">Nama Lengkap*</label>
               
                <input type="text" name="nama" class="form-control input-lg" placeholder="Nama Lengkap" <?php if (!empty($biodata['nama'])) echo 'value="'.$biodata['nama'].'"'; else echo 'value="'.$akun['nama'].'"';?> required>
                </div>
                
                <div class="col-sm-5">
                <label class="control-label">NIK KTP*</label>
                
                <input type="text" name="nik" class="form-control input-lg" placeholder="Nomor Kartu Identitas" maxlength="16" <?php if (!empty($biodata['nikktp'])) echo 'value='.$biodata['nikktp']; ?> required>
                </div>
            </div>
  
            </div>

            <div class="form-group">
                <label class="control-label">Tempat Lahir*</label>
                <input type="text" name="tempatlahir" class="form-control input-lg" placeholder="Tempat Lahir" <?php if (!empty($biodata['tempatlahir'])) echo 'value='.$biodata['tempatlahir']; ?> required>
            </div> 

            <div class="form-group">    
                <label class="control-label">Tanggal Lahir* (Tanggal - Bulan - Tahun)</label>
                <div class="row">
                <div class="col-sm-4">
                <select name="tgllahir" class="form-control">
                <option></option>
                    <?php 
                    for($i = 1; $i <= 31; $i++){
                        $i = str_pad($i, 2, 0, STR_PAD_LEFT);?>
                        <option value='<?php echo $i;?>' <?php if (!empty($biodata)) { if (date('d',strtotime($biodata['tgllahir']))==$i) { echo 'selected=selected'; }} ?> ><?php echo $i;?></option>
                    <?php 
                    }
                    ?>
                </select>
                </div>

                <div class="col-sm-4">
                <select name="blnlahir" class="form-control">
                <option></option>
                    <?php
                    for($i = 1; $i <= 12; $i++){
                    $i = str_pad($i, 2, 0, STR_PAD_LEFT);?>
                     <option value='<?php echo $i;?>' <?php if (!empty($biodata)) { if (date('m',strtotime($biodata['tgllahir']))==$i) { echo 'selected=selected'; }} ?> ><?php echo $i;?></option>

                    <?php 
                    }
                    ?>
                </select>
                </div>
                <div class="col-sm-4">
                <select name="thnlahir" class="form-control">

                   <option></option>
                   <?php
                        for($i = date('Y'); $i >= date('Y', strtotime('-100 years')); $i--){?>
                       <option value='<?php echo $i;?>' <?php if (!empty($biodata)) { if (date('Y',strtotime($biodata['tgllahir']))==$i) { echo 'selected=selected'; }} ?> ><?php echo $i ?></option>
                        <?php } ?>
                </select>
                </div>

            </div>
            </div>

            <div class="form-group">

            <div class="row">
                <div class="col-sm-6">
                <label class="control-label">Jenis Kelamin*</label><br/>
               
                <label class="radio-inline"><input type="radio" name="jk" value="Pria" <?php if (!empty($biodata)) { if ($biodata['jk']=='Pria') { echo 'checked=checked'; }} ?>  >Laki-laki</label>
                <label class="radio-inline"><input type="radio" name="jk" value="Wanita" <?php if (!empty($biodata)) { if ($biodata['jk']=='Wanita') { echo 'checked=checked'; }} ?> >Perempuan</label>
                </div>
                
                <div class="col-sm-6">
                <label class="control-label">Agama*</label>
               
                <?php $agama=array('I','P','K','B','H','L');
                        $nama_agama=array('Islam','Protestan','Katholik','Budha','Hindu','Lainnya');  
                    ?>
                <select name="agama" class="form-control input-lg" >
                    <option value="">PILIH</option>
                        <?php
                            $i=0;
                            foreach ($agama as $agm) { ?>
                                <option value="<?=$agm?>" <?php if (!empty($biodata)) { if ($biodata['AGAMA']==$agm) { echo 'selected=selected'; }} ?> ><?=$nama_agama[$i]?></option>
                        <?php
                            $i++;
                            }
                        ?>
                </select>
                </div>
            </div> 
                
            </div>



            <div class="form-group">

            <div class="row">
                <div class="col-sm-6">
                <label class="control-label">
                    Telp/HP*
                </label>
            
                <input type="text" name="telepon" class="form-control input-lg" placeholder="Telp/HP" maxlength="15" <?php if (!empty($biodata['telepon'])) echo 'value="'.$biodata['telepon'].'"'; else echo 'value="'.$akun['telp'],'"' ;?> required>
                </div>
                
                <div class="col-sm-6">
                <label class="control-label">Email</label>
               
                <input type="text" name="email" class="form-control input-lg" placeholder="sample@sample.com" <?php if (!empty($biodata['email'])) echo 'value="'.$biodata['email'].'"'; else echo 'value="'.$this->session->userdata['email'],'"' ; ?> >
                </div>
            </div> 

            </div>

            </div><!--panelbody-->
            </div><!--panel-->

        </div><!--col-->

        <div class="col-md-5">

        <div class="panel panel-default">
    
        <div class="panel-body">
            <h4><i class="fa fa-graduation-cap" aria-hidden="true"></i> Data Pendidikan</h4>
        <div class="form-group">
             
                <label class="control-label">Asal Sekolah*</label>
                
                    <input type="text" name="sekolah" class="form-control" placeholder="Nama SMK/SMA/PTS/PTN/DLL" <?php if (!empty($biodata['sekolah'])) echo 'value="'.$biodata['sekolah'].'"'; ?> required>
            </div>

        <div class="form-group">
                <label class="control-label"> Jurusan SLTA*</label>
                
                    <select class="form-control" name="jurusan" >
                        <option value="">PILIH</option>
                        <?php
                        $jurusan=array('IPA','IPS','BAHASA','AKUNTANSI','PERKANTORAN','MESIN','LISTRIK','ELEKTRO','TKJ','MULTIMEDIA','RPL','Lainnya');
                        foreach ($jurusan as $jrs) { ?>
                                    <option value="<?=$jrs?>" <?php if (!empty($biodata)) { if ($biodata['jurusan']==$jrs) { echo 'selected=selected'; }} ?>><?=$jrs?></option>
                        <?php   
                        }
                            ?>
                    </select>
             
               
            </div>

            <div class="form-group">

                <label class="control-label">Rata-rata Nem/UAN*</label>
                    <input id="nem" type="text" name="nem" class="form-control" placeholder="00.00" onkeypress="return hanyaAngka(this)" maxlength="5"
                        <?php if (!empty($biodata['nem'])) echo 'value='.$biodata['nem']; ?> >
            </div>
                
            <div class="form-group">
                <label class="control-label">Tahun Lulus*</label>
                    <input type="text" name="thn_lulus" class="form-control" placeholder="Tahun Lulus" onkeypress="return hanyaAngka(this)" maxlength="4" <?php if (!empty($biodata['tahun_lulus'])) echo 'value='.$biodata['tahun_lulus']; ?> >
               
            </div>

            </div><!--panelbody-->
            </div><!--panel-->

        </div><!--col-->


    </div><!--row-->


    <div class="row-fluid">

    <div class="col-md-12">

        <div class="panel panel-default">

        <div class="panel-body">
        <h4><i class="fa fa-university" aria-hidden="true"></i> Pilihan Program Studi</h4>
        <div class="form-group">

        
            <label class="control-label" style="font-weight:600">Jenis Pendaftaran *</label><br/>
            <label class="control-label">Pilih Jenis Pendaftaran</label>
            <select name="status_reg" class="form-control" id="status_reg">
                <option value="">Pilih</option>
                
                    <option value="Hanya Daftar" <?php if (!empty($biodata)) { if ($biodata['status_registrasi']=="Hanya Daftar") { echo 'selected=selected'; }} ?>>REGULER</option>
                    <option value="Bidikmisi" <?php if (!empty($biodata)) { if ($biodata['status_registrasi']=="Bidikmisi") { echo 'selected=selected'; }} ?> disabled>BEASISWA KIP-K</option>
            </select>
            
        </div>

        <div id="kipk-box" style="display:none;">
        <div class="form-group">
            <label>Nomor KIP-Kuliah *</label>
            <input type="text" name="no_kipk" class="form-control" placeholder="Nomor KIP-Kuliah, Contoh: 6012.0000.0000.0000"  <?php if (!empty($biodata['no_kipk'])) echo 'value='.$biodata['no_kipk']; ?> readonly>
            <span id="kipk-info" class="text-info" style="font-size:11px"><i class="fa fa-info-circle" aria-hidden="true"></i> Pastikan nomor anda telah terdaftar pada akun KIP Kuliah di website: <a href="https://kip-kuliah.kemdikbud.go.id" target="_blank">https://kip-kuliah.kemdikbud.go.id</a>. Nomor tersebut juga terdapat pada Kartu KIPK anda.</span>
        </div>
        </div>

       
       
        <div class="form-group">
            <label class="control-label">Jenis Mahasiswa*</label>
                    
            
            <select name="jenis_mhs" class="form-control" id="jenis_mhs" >
                <option value="">Pilih Jenis Mahasiswa</option>
                    <?php
                        foreach ($jenis_mhs->result_array() as $key) { ?>
                                <option value="<?=$key['KODE_JENIS'].'/'.$key['ID_JENISMHS']?>"  <?php if (!empty($biodata)) { if ($biodata['JENIS_MHS']==$key['KODE_JENIS']) { echo 'selected=selected'; }} ?>><?=$key['NAMA']?></option>
                        <?php }
                        ?>
            </select>  
        </div>
    
        <div class="form-group">

            <div class="row">
                <div class="col-sm-4">
                <label class="control-label">Pilihan 1*</label>
                
                <?php
                $list_prodi=$this->db->query("select * from DEPARTMENT")->result_array();
                    ?>
                <select name="pilihan1" class="form-control" id="pilihan1" <?php //if (empty($biodata['pilihan1'])) echo "disabled"; ?> >
                    <option value="">Pilih Program Studi</option>
                    <?php 
                    foreach ($list_prodi as $key) {
                    ?>
                        
                        <option  value="<?=$key['KD_DEPT']?>" <?php if($biodata['pilihan1']==$key['KD_DEPT']) echo 'selected="selected"'; ?>><?=$key['NAMA_DEPT_id']?></option>
                   
                    <?php
                    }
                    ?>
                </select>
           
                <span style="font-size:10px">*Jika pilihan 1 tidak muncul klik Jenis Mahasiswa</span>
               
                </div>
                
                <div class="col-sm-4">
                <label class="control-label">Pilihan 2*</label>
            
                <select name="pilihan2" class="form-control" id="pilihan2" <?php //if (empty($biodata['pilihan2'])) echo "disabled"; ?> >
                    <option value="">Pilih Program Studi</option>
                        <?php 
                    foreach ($list_prodi as $key) {
                    ?>
                        <option value="<?=$key['KD_DEPT']?>" <?php if($biodata['pilihan2']==$key['KD_DEPT']) echo 'selected="selected"'; ?>><?=$key['NAMA_DEPT_id']?></option>
                    <?php
                    }
                    ?>
                </select>
                <span style="font-size:10px">*Jika pilihan 2 tidak muncul klik kembali form pilihan 1</span>
                </div>

                <div class="col-sm-4">

                <label class="control-label">Kelas*</label>
            
            <select name="kelas" class="form-control" id="kelas" <?php //if (empty($biodata['KELAS'])) echo "disabled"; ?>>
                <option value="">Pilih Kelas</option>
                <?php $kelas=array('Pagi','Transfer','Sore');
                    foreach ($kelas as $key) { ?>
                    <option value="<?=$key?>" <?php if (!empty($biodata)) { if ($biodata['KELAS']==$key) { echo 'selected=selected'; }} ?>><?=$key?></option>
                <?php
                    }
                ?>
            </select>
            <span style="font-size:10px">*Jika kelas tidak muncul klik kembali form pilihan 2</span>
        

                </div>
            </div>  
        
        </div>

        <div class="form-group">
        <label class="control-label">Informasi tentang Universitas Amikom Purwokerto</label><br/>

            <?php
                $info=array(' Brosur',' Televisi',' Internet',' Teman/Saudara',' Lainnya');
                $info2=array('brosur','televisi','internet','teman/Saudara','lainnya');
                
                    $i=0;
                    foreach ($info2 as $key) { ?>
                            <label class="checkbox-inline">
                            <input type="checkbox" name="info[]" value="<?=$key?>" 
                            <?php if (!empty($biodata)) { 
                                    $pecah=explode(',',$biodata['komentar']);
                                    foreach ($pecah as $data_info) {
                                        if ($data_info==$key) { echo 'checked=checked'; }
                                    }
                                } ?> ><?=$info[$i];?>
                            </label>
                    <?php   
                            $i++;
                            }
                    ?>
        </div>

    
    </div>
    </div>
    </div><!--row-->


    <div class="row-fluid">

    <div class="col-md-6">

        <div class="panel panel-default">
        <div class="panel-body">
        <h4><i class="fa fa-home" aria-hidden="true"></i> Data Alamat</h4>
        <div class="form-group">
                <label class="control-label">Alamat lengkap*</label>
                
                <input type="text" name="alamat" class="form-control input-lg otom" id="alamat_siswa" placeholder="Jalan"  <?php if (!empty($biodata['alamat'])) echo 'value="'.$biodata['alamat'].'"'; ?> >
               
            </div>

            <div class="form-group">
            
                <div class="row">
                <div class="col-sm-3">
                <label class="control-label">RT*</label>
                    <input type="text" name="rt" class="form-control input-lg otom" id="rt_siswa" placeholder="00" maxlength="2" <?php if (!empty($biodata['rt'])) echo 'value="'.$biodata['rt'].'"'; ?> >
                </div>
                
                <div class="col-sm-3">
                <label class="control-label">RW*</label>
                    <input type="text" name="rw" class="form-control input-lg otom" id="rw_siswa" placeholder="00" maxlength="2" <?php if (!empty($biodata['rw'])) echo 'value="'.$biodata['rw'].'"'; ?> >
                </div>
                <div class="col-sm-6">
                <label class="control-label">Kelurahan/Desa*</label>
                
                <input type="text" name="kelurahan" class="form-control input-lg otom" id="desa_siswa" placeholder="Kelurahan/Desa" <?php if (!empty($biodata['kelurahan'])) echo 'value="'.$biodata['kelurahan'].'"'; ?> >
                </div>
                </div>
                
            </div>

            <div class="form-group">

            <div class="row">
                
                
                <div class="col-sm-6">
                <label class="control-label">Kecamatan*</label>
                
                <input type="text" name="kecamatan" class="form-control input-lg otom" id="kecamatan_siswa" placeholder="Kecamatan" <?php if (!empty($biodata['kecamatan'])) echo 'value="'.$biodata['kecamatan'].'"'; ?> >
                </div>

                <div class="col-sm-6">
                <label class="control-label">Kabupaten*</label>
                
                    <select name="kabupaten" class="form-control input-lg" id="kab_siswa" required >
                        <option value="">PILIH</option>
                        <?php $kab=$this->model_crud->selectData("kabupaten");
                            $i=1;
                            foreach ($kab->result() as $key) { ?>
                                <option value="<?=$key->KdKab?>" <?php if (!empty($biodata)) { if ($biodata['kabupaten']==$key->KdKab) { echo 'selected=selected'; }} ?>><?=$key->NamaKab?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>  
                
            </div>

            <div class="form-group">
                
                <label class="control-label">Propinsi*</label>
               
                <!--<select name="propinsi" class="form-control" id="prop" <?php //if (empty($biodata['propinsi'])) echo "disabled"; ?> >-->
                <select name="propinsi" class="form-control input-lg" id="prop" required>
                        <option value="">PILIH</option>
                        <?php
                            if (!empty($biodata['propinsi']) ) {
                                    $prop=$this->model_crud->selectData("propinsi",array('kdProp'=>$biodata['propinsi']))->row_array();
                                    echo '<option value='.$biodata['propinsi'].' selected=selected>'.$prop['NamaProp'].'</option>';
                            }
                        ?>
                </select>
                <span class="text-muted" style="font-size:11px">*Jika propinsi tidak muncul klik kembali form Kabupaten</span>
               
            </div>

            <div class="form-group">
                
                <label class="control-label">
                    Kode Pos*
                </label>

                <div class="row">
                <div class="col-sm-6">
                <input type="text" name="kodepos" class="form-control input-lg otom" id="kodepos_siswa" placeholder="Kode Pos" <?php if (!empty($biodata['kodepos'])) echo 'value="'.$biodata['kodepos'].'"'; ?> >
                </div>
                </div>
                
            </div>

            </div><!--panelbody-->
            </div><!--panel-->
                        
             
        </div><!--col-->

        
        <div class="col-md-6">

        <div class="panel panel-default">
            <div class="panel-body">
            <h4><i class="fa fa-home" aria-hidden="true"></i> Data Orang Tua/Wali</h4>
            <div class="form-group">
            <label class="control-label">
                Nama Ibu Kandung*
            </label>
            
            <input type="text" name="nama_ortu" class="form-control" placeholder="Nama Orang Tua" <?php if (!empty($biodata['NAMA_ORTU'])) echo 'value="'.$biodata['NAMA_ORTU'].'"'; ?> required>
            
        </div>
        <div class="form-group">
            <label class="control-label">Alamat lengkap*</label>
            
            <input type="text" name="alamat_ortu" class="form-control otom" id="alamat_ortu" placeholder="Jalan" <?php if (!empty($biodata['ALAMATORTU'])) echo 'value="'.$biodata['ALAMATORTU'].'"'; ?> >
            
            
        </div>

        <div class="form-group">

        <div class="row">
                <div class="col-sm-3">
                <label class="control-label">RT*</label>
            
                <input type="text" name="rt_ortu" class="form-control otom" id="rt_ortu" placeholder="00" maxlength="2" <?php if (!empty($biodata['RT_ORTU'])) echo 'value="'.$biodata['RT_ORTU'].'"'; ?> >
                </div>
                
                <div class="col-sm-3">
                <label class="control-label">RW*</label>
            
            <input type="text" name="rw_ortu" class="form-control otom" id="rw_ortu" placeholder="00" maxlength="2" <?php if (!empty($biodata['RW_ORTU'])) echo 'value="'.$biodata['RW_ORTU'].'"'; ?> >
                </div>
                <div class="col-sm-6">
                <label class="control-label">
            Kelurahan/Desa*
            </label>
            
            <input type="text" name="kelurahan_ortu" class="form-control otom" id="desa_ortu" placeholder="Kelurahan/Desa" <?php if (!empty($biodata['KELURAHAN_ORTU'])) echo 'value="'.$biodata['KELURAHAN_ORTU'].'"'; ?> >
                </div>
            </div>
            
        </div>

        <div class="form-group">

        <div class="row">
                
                
                <div class="col-sm-6">
                <label class="control-label">
                Kecamatan*
            </label>
        
            <input type="text" name="kecamatan_ortu" class="form-control otom" id="kecamatan_ortu" placeholder="Kecamatan" <?php if (!empty($biodata['KECAMATAN_ORTU'])) echo 'value="'.$biodata['KECAMATAN_ORTU'].'"'; ?> >
                </div>

                <div class="col-sm-6">
                <label class="control-label">
                Kabupaten*
            </label>
            
                <select name="kabupaten_ortu" class="form-control" id="kab_ortu" required >
                    <option value="">PILIH</option>
                    <?php $kab=$this->model_crud->selectData("kabupaten");
                        $i=1;
                        foreach ($kab->result() as $key) { ?>
                            <option value="<?=$key->KdKab?>" <?php if (!empty($biodata)) { if ($biodata['KABUPATEN_ORTU']==$key->KdKab) { echo 'selected=selected'; }} ?>><?=$key->NamaKab?></option>
                    <?php } ?>
                </select>
                </div>


            </div>
            
            
        </div>

        <div class="form-group">

            
            
        </div>

        <div class="form-group">

        <label class="control-label">
            Propinsi*
            </label>
            <!--<select name="propinsi_ortu" class="form-control" id="prop2" <?php //if (empty($biodata['PROPINSI_ORTU'])) echo "disabled"; ?> >-->
                <select name="propinsi_ortu" class="form-control" id="prop2" required>
                    <option value="">PILIH</option>
                    <?php
                        if (!empty($biodata['PROPINSI_ORTU']) ) {
                                $prop=$this->model_crud->selectData("propinsi",array('kdProp'=>$biodata['PROPINSI_ORTU']))->row_array();
                                echo '<option value='.$biodata['PROPINSI_ORTU'].' selected=selected>'.$prop['NamaProp'].'</option>';
                        }
                    ?>
                </select>
                <span class="text-muted" style="font-size:11px">*Jika propinsi tidak muncul klik kembali form Kabupaten</span>
        </div>

        <div class="form-group">

        <div class="row">
                <div class="col-sm-6">
                <label class="control-label">
                Kode Pos*
            </label>
            
                <input type="text" name="kodepos_ortu" class="form-control otom" id="kodepos_ortu" placeholder="Kode Pos" <?php if (!empty($biodata['KODEPOS_ORTU'])) echo 'value="'.$biodata['KODEPOS_ORTU'].'"'; ?>>
                </div>
                
                <div class="col-sm-6">
                <label class="control-label">
                Telp/HP Orang Tua*
            </label>
            
                <input type="text" name="telp_ortu" class="form-control" placeholder="Telp/HP" maxlength="15" <?php if (!empty($biodata['TELP_ORTU'])) echo 'value="'.$biodata['TELP_ORTU'].'"'; ?> required>
                </div>
            </div>    
            
        </div>


            </div>
            </div>


        </div><!--col-->

        
    </div><!--row-->


    <div class="row-fluid">
        <div class="col-md-12">

            <div class="form-group">    
            <button class="btn btn-primary btn-lg"<?php if (!empty($biodata)) { if ($biodata['syarat2']=='Sudah') echo "disabled";} ?>><i class="fa fa-floppy-o" aria-hidden="true"></i>SIMPAN</button>     
            </div>

        </div>
    </div>

    </form>
        
    </div>
</div>

<script src="http://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/datepicker/css/datepicker.css">
<script type="text/javascript"
src="<?=base_url(); ?>assets/datepicker/js/bootstrap-datepicker.js">
</script>    

<script type="text/javascript">
var $jne=jQuery.noConflict();
$jne(document).ready(function() {
$jne("#form").validate({
rules:{     
nama:"required",
nik : { required : true, number : true, minlength:16},
pilihan1 : {required:true},
pilihan2 : {required:true},
tempatlahir :{required : true},
tgllahir : {required: true},
blnlahir : {required: true},
thnlahir : {required: true},
jk : {required : true},
agama :{required : true},
nama_ortu : {required : true},
sekolah : {required : true},
jurusan : { required : true },
nem : { required : true },
thn_lulus : { required : true, number : true, minlength:4},
alamat : {required : true},
rt : { required : true, number : true, minlength : 2},
rw : { required : true, number : true, minlength : 2},
kelurahan : { required : true},
kecamatan : { required : true},
kabupaten : { required : true },
alamat_ortu : {required : true},
rt_ortu : { required : true, number : true, minlength : 2},
rw_ortu: { required : true, number : true, minlength : 2},
kelurahan_ortu : { required : true },
kecamatan_ortu : { required : true },
kabupaten_ortu : { required : true },
kodepos : { required : true, number : true },
kodepos_ortu : { required : true ,  number : true },
telepon : {required : true, number : true, minlength : 6},
telp_ortu : {required : true, number : true, minlength : 6},
status_reg : {required : true},
jenis_mhs : {required : true},
relasi : { required : true},
kelas : { required : true },
'info[]' : {required : true},
},
messages:{ 
nama: {
    required:'<span>Nama Mahasiswa wajib diisi</span>'},
nik : {
    required:'<span>NIK KTP wajib diisi</span>',
    number :'<span>Wajib Berupa Angka</span>',
    minlength:'<span>Min 16 Angka</span>',
},
pilihan1: {
    required:'<span>Program Studi Wajib dipilih</span>'},
pilihan2: {
    required:'<span>Progaram Studi Wajib dipilih</span>'},
tempatlahir :{
    required :'<span>Tempat lahir wajib diisi</span>'
},
tgllahir :{
    required :'<span>Tanggal lahir wajib diisi</span>'
},
blnlahir :{
    required :'<span>Bulan lahir wajib diisi</span>'
},
thnlahir :{
    required :'<span>Tahun lahir wajib diisi</span>'
},
jk : {
    required : '<span>Jenis kelamin wajib dipilih</span>'
},
agama : {
    required : '<span>Agama wajib dipilih</span>'
},
nama_ortu : {
    required : '<span>Nama Orang Tua (Ibu) wajib diisi</span>'
},
sekolah : {
    required : '<span>Asal Sekolah wajib diisi</span>'
},
jurusan : {
    required : '<span>Jurusan wajib dipilih</span>'
},
nem : {
    required : '<span>Nilai UAS wajib diisi</span>',
},
thn_lulus : {
    required : '<span>Tahun lulus wajib diisi</span>',
    number : '<span>Tahun lulus wajib berupa angka</span>',
    minlength : '<span>Tahun lulus min 4 angka</span>'
},
alamat : {
    required : '<span>Jalan wajib diisi</span>',
},
rt : {
    required : '<span>RT wajib diisi</span>',
    number : '<span>RT wajib berupa angka</span>',
    minlength : '<span>RT min 2 angka</span>',
},
rw : {
    required : '<span>RW wajib diisi</span>',
    number : '<span><RW wajib berupa angka</span>',
    minlength : '<span>RW min 2 angka</span>',
},
kodepos : {
    required : '<span>Kodepos wajib diisi</span>',
    number : '<span>Kodepos wajib berupa angka</span>',
},
    telepon : {
    required : '<span>Telepon wajib diisi</span>',
    number : '<span>Telepon wajib berupa angka</span>',
    minlength : '<span>Telepon min 6 angka</span>',
},
    alamat_ortu : {
    required : '<span>Jalan wajib diisi</span>',
},
rt_ortu : {
    required : '<span>RT wajib diisi</span>',
    number : '<span>RT wajib berupa angka</span>',
    minlength : '<span>RT min 2 angka</span>',
},
rw_ortu : {
    required : '<span>RW wajib diisi</span>',
    number : '<span><RW wajib berupa angka</span>',
    minlength : '<span>RW min 2 angka</span>',
},
kodepos_ortu : {
    required : '<span>Kodepos wajib diisi</span>',
    number : '<span>Kodepos wajib berupa angka</span>',
},
telp_ortu : {
    required : '<span>Telepon wajib diisi</span>',
    number : '<span>Telepon wajib berupa angka</span>',
    minlength : '<span>Telepon min 6 angka</span>',
},
status_reg : {
    required: '<span>Jenis Pendaftaran wajib dipilih</span>'
},
jenis_mhs : {
    required: '<span>Jenis Mahasiswa wajib dipilih</span>'
},
relasi : {
    required: '<span>Relasi wajib dipilih</span>'
},
kelas : {
    required : '<span>Kelas wajib dipilih</span>'
},
info : {
    required : '<span>Wajib dipilih</span>'
}

},

});
});
</script>
<script>
function hanyaAngka(evt) {
if(!/^[0-9.]+$/.test(evt.value))
{
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))
return false;
return true;
}
}
</script>

<script>
var $jne2=jQuery.noConflict();
$jne2('#date').datepicker({
format: 'dd-mm-yyyy',
startDate: '-3d'
})

</script>

<script>
var $jne3=jQuery.noConflict();
$jne3(document).ready(function(){

$jne3('#kab_siswa').click(function(event){
    event.preventDefault();
var country_id = $jne3('#kab_siswa').val();
var KdProp = $jne3('#prop').val();
if(country_id != '')
{

$jne3.ajax({
    type:'post',
    url:"<?php echo base_url(); ?>" + "main/getprop",
    data:{kab:country_id,prop:KdProp},
    cache:false,
    success: function(returndata){
        $jne3('#prop').html(returndata);
        $jne3("#prop").attr('disabled',false);
    }
});

}
});

$jne3('#kab_ortu').click(function(event){
    event.preventDefault();
var kab2 = $jne3('#kab_ortu').val();
if(kab2 != '')
{

$jne3.ajax({
    type:'post',
    url:"<?php echo base_url(); ?>" + "main/getprop2",
    data:{kab2:kab2},
    cache:false,
    success: function(returndata){
        $jne3('#prop2').html(returndata);
        $jne3("#prop2").attr('disabled',false);
    }
});

}
});

$jne3('#status_reg').click(function(event){
    event.preventDefault();
var kipk = $jne3('#status_reg').val();
if(kipk != '')
{

$jne3.ajax({
    type:'post',
    url:"<?php echo base_url(); ?>" + "main/get_jenismhs",
    data:{kipk:kipk},
    cache:false,
    beforeSend:function(){
        $jne3('#pilihan1').attr('disabled',false);
    },
    success: function(returndata){
        $jne3('#jenis_mhs').html(returndata);
        $jne3("#jenis_mhs").attr('disabled',false);
    }
});

}
});

$jne3('#jenis_mhs').click(function(event){
    event.preventDefault();
var status_reg = $jne3('#status_reg').val();
var jenis_mhs = $jne3('#jenis_mhs').val();
if(jenis_mhs != '')
{

$jne3.ajax({
    type:'post',
    url:"<?php echo base_url(); ?>" + "main/get_kelas",
    data:{status_reg:status_reg,jenis_mhs:jenis_mhs},
    cache:false,
    beforeSend:function(){
        $jne3('#kelas').attr('disabled',true);
    },
    success: function(returndata){
        $jne3('#pilihan1').html(returndata);
        $jne3("#pilihan1").attr('disabled',false);
    }
});

}
});


$jne3('#pilihan1').click(function(event){
    event.preventDefault();
var status_reg = $jne3('#status_reg').val();
var jenis_mhs = $jne3('#jenis_mhs').val();
var pilihan1 = $jne3('#pilihan1').val();
if(pilihan1 != '')
{

$jne3.ajax({
    type:'post',
    url:"<?php echo base_url(); ?>" + "main/get_kelas",
    data:{status_reg:status_reg,jenis_mhs:jenis_mhs,pilihan1:pilihan1},
    cache:false,
    success: function(returndata){
        $jne3('#pilihan2').html(returndata);
        $jne3("#pilihan2").attr('disabled',false);
    }
});

}
});

$jne3('#pilihan2').click(function(event){
    event.preventDefault();
var pilihan2 = $jne3('#pilihan2').val();
var jenis_mhs= $jne3('#jenis_mhs').val();
if(pilihan2 != '')
{

$jne3.ajax({
    type:'post',
    url:"<?php echo base_url(); ?>" + "main/get_kelas_sore",
    data:{pilihan2:pilihan2,jenis_mhs:jenis_mhs},
    cache:false,
    success: function(returndata){
        $jne3('#kelas').html(returndata);
        $jne3("#kelas").attr('disabled',false);
    }
});

}
});


})
</script>

<script>
jQuery(document).ready(function ($) {
$(".otom").change(function() {
    vals = $(this).val();
    id = $(this).attr('id').split("_");
    $("#"+id[0]+"_ortu").val(vals);
});
});
</script>     

<script>
jQuery(document).ready(function ($) {
    $("#status_reg").on('change', function() {
    if(this.value == "Bidikmisi") {
        
        $("#kipk-box").show();           
    } else  {
        $("#kipk-box").hide();           
    }

    });

    if(document.getElementById('status_reg').value == "Bidikmisi") {
        $('#kipk-box').show();  
    }

});

</script>

<script>
jQuery(document).ready(function ($) { 
$('input#nem').keyup(function(event) {

if(event.which >= 37 && event.which <= 40) return;

$(this).val(function(index, value) {
  return value
  .replace(/\D/g, "")
  .replace(/\B(?=(\d{2})+(?!\d))/g, ".")
  ;
});
});

});
</script>