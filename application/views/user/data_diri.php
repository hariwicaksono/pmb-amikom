<style type="text/css">
    .error{
        color: red;
    }
</style>
<?php
if ($biodata['syarat2']=='Sudah') $status='Readonly';
$this->data['tahun_pmb']=$this->mtahun->getThaPmb();
$gelombang=$this->mgelombang->cek_daftar(array('thn_akademik'=>'2018/2019'));
 ?>                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><?php echo "Periode Pendaftaran ".$gelombang['gelombang']; ?></h3>
                                    </div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" method="post" action="<?=base_url()?>main_user/setting_biodata" enctype="multipart/form-data" id="form">
                                           <input type="hidden" name="relasi" value="1">
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">Jenis Mahasiswa*</label>
                                                <div class="col-sm-7">
                                                    <select name="jenis_mhs" class="form-control" id=jenis_mhs >
                                                        <option value="">Pilih Jenis Mahasiswa</option>
                                                   <?php
                                                        foreach ($jenis_mhs->result_array() as $key) { ?>
                                                            <option value="<?=$key['KODE_JENIS'].'/'.$key['ID_JENISMHS']?>"  <?php if (!empty($biodata)) { if ($biodata['JENIS_MHS']==$key['KODE_JENIS']) { echo 'selected=selected'; }} ?>><?=$key['NAMA']?></option>
                                                    <?php }
                                                    ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-7" style="width: 50%;">
                                                   Program Studi / Jurusan
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">Pilihan 1*</label>
                                                <div class="col-sm-7">
                                                    <?php
                                                    $list_prodi=$this->db->query("select * from DEPARTMENT")->result_array();
                                                     ?>
                                                    <select name="pilihan1" class="form-control" id="pilihan1" <?php if (empty($biodata['pilihan1'])) echo "disabled"; ?> >
                                                        <option value="">Pilih Program Studi</option>
                                                        <?php 
                                                        foreach ($list_prodi as $key) {
                                                        ?>
                                                            <option value="<?=$key['KD_DEPT']?>" <?php if($biodata['pilihan1']==$key['KD_DEPT']) echo 'selected="selected"'; ?>><?=$key['NAMA_DEPT_id']?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>*Jika pilihan 1 tidak muncul klik kembali form jenis mahaiswa
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">Pilihan 2*</label>
                                                <div class="col-sm-7">
                                                    <select name="pilihan2" class="form-control" id="pilihan2" <?php if (empty($biodata['pilihan2'])) echo "disabled"; ?> >
                                                        <option value="">Pilih Program Studi</option>
                                                         <?php 
                                                        foreach ($list_prodi as $key) {
                                                        ?>
                                                            <option value="<?=$key['KD_DEPT']?>" <?php if($biodata['pilihan2']==$key['KD_DEPT']) echo 'selected="selected"'; ?>><?=$key['NAMA_DEPT_id']?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    *Jika pilihan 2 tidak muncul klik kembali form pilihan 1
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">Kelas*</label>
                                                <div class="col-sm-7">
                                                    <select name="kelas" class="form-control" id="kelas" <?php if (empty($biodata['KELAS'])) echo "disabled"; ?> >
                                                        <option value="">Pilih Kelas</option>
                                                       <?php $kelas=array('Pagi','Transfer','Sore');
                                                            foreach ($kelas as $key) { ?>
                                                            <option value="<?=$key?>" <?php if (!empty($biodata)) { if ($biodata['KELAS']==$key) { echo 'selected=selected'; }} ?>><?=$key?></option>
                                                        <?php
                                                            }
                                                        ?>
                                                    </select>
                                                    *Jika kelas tidak muncul klik kembali form pilihan 2
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">Nama Lengkap*</label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" <?php if (!empty($biodata['nama'])) echo 'value="'.$biodata['nama'].'"'; else echo 'value="'.$akun['nama'].'"';?> >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">NIK KTP*</label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="nik" class="form-control" placeholder="Nomor Kartu Identitas" maxlength="16" <?php if (!empty($biodata['nikktp'])) echo 'value='.$biodata['nikktp']; ?>  >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">Tempat Lahir*</label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="tempatlahir" class="form-control" placeholder="Tempat Lahir" <?php if (!empty($biodata['tempatlahir'])) echo 'value='.$biodata['tempatlahir']; ?> >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3 "> Tanggal Lahir</label>
                                                <div class="col-sm-5">
                                                    <input class="form-control" id="date" type="text" placeholder="DD-MM-YYYY" name="tgllahir" <?php if (!empty($biodata['tgllahir'])) echo 'value='.date('d-m-Y',strtotime($biodata['tgllahir'])); ?> >
                                                </div>*Tanggal-Bulan-Tahun
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">Jenis Kelamin*</label>
                                                <div class="col-sm-5">
                                                    <label class="radio-inline"><input type="radio" name="jk" value="Pria" <?php if (!empty($biodata)) { if ($biodata['jk']=='Pria') { echo 'checked=checked'; }} ?>  >Laki-laki</label>
                                                    <label class="radio-inline"><input type="radio" name="jk" value="Wanita" <?php if (!empty($biodata)) { if ($biodata['jk']=='Wanita') { echo 'checked=checked'; }} ?> >Perempuan</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">Agama*</label>
                                                <div class="col-sm-5">
                                                <?php $agama=array('I','P','K','B','H','L');
                                                      $nama_agama=array('Islam','Protestan','Katholik','Budha','Hindu','Lainnya');  
                                                 ?>
                                                    <select name="agama" class="form-control" >
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
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">Asal Sekolah*</label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="sekolah" class="form-control" placeholder="Nama SMK/SMA/PTS/PTN/DLL" <?php if (!empty($biodata['sekolah'])) echo 'value="'.$biodata['sekolah'].'"'; ?> >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3"> Jurusan SLTA*</label>
                                                <div class="col-sm-5">
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
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">Rata-rata Nem/UAN*</label>
                                                <div class="col-sm-3">
                                                    <input type="text" name="nem" class="form-control" placeholder="0.00" onkeypress="return hanyaAngka(this)" maxlength="4"
                                                     <?php if (!empty($biodata['nem'])) echo 'value='.$biodata['nem']; ?> >
                                                </div>
                                                <label class="control-label col-sm-2" style="width: 15%;">Tahun Lulus*</label>
                                                <div class="col-sm-3">
                                                    <input type="text" name="thn_lulus" class="form-control" placeholder="Tahun Lulus" onkeypress="return hanyaAngka(this)" maxlength="4" <?php if (!empty($biodata['tahun_lulus'])) echo 'value='.$biodata['tahun_lulus']; ?> >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">Alamat lengkap*</label>
                                                <div class="col-sm-5">
                                                    <input type="text" name="alamat" class="form-control" placeholder="Jalan"  <?php if (!empty($biodata['alamat'])) echo 'value="'.$biodata['alamat'].'"'; ?> >
                                                </div>
                                                <label class="control-label col-sm-1" style="width: 5%;">RT*</label>
                                                <div class="col-sm-1">
                                                    <input type="text" name="rt" class="form-control" placeholder="00" maxlength="2" <?php if (!empty($biodata['rt'])) echo 'value="'.$biodata['rt'].'"'; ?> >
                                                </div>
                                                <label class="control-label col-sm-1" style="width: 5%;">RW*</label>
                                                <div class="col-sm-1">
                                                    <input type="text" name="rw" class="form-control" placeholder="00" maxlength="2" <?php if (!empty($biodata['rw'])) echo 'value="'.$biodata['rw'].'"'; ?> >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3"></label>
                                                <label class="control-label col-sm-2" style="text-align: left;">
                                                Kelurahan/Desa*
                                                </label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="kelurahan" class="form-control" placeholder="Kelurahan/Desa" <?php if (!empty($biodata['kelurahan'])) echo 'value="'.$biodata['kelurahan'].'"'; ?> >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3"></label>
                                                <label class="control-label col-sm-2" style="text-align: left;">
                                                    Kecamatan*
                                                </label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" <?php if (!empty($biodata['kecamatan'])) echo 'value="'.$biodata['kecamatan'].'"'; ?> >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3"></label>
                                                <label class="control-label col-sm-2" style="text-align: left;">
                                                    Kabupaten*
                                                </label>
                                                <div class="col-sm-4">
                                                    <select name="kabupaten" class="form-control" id="kab"  >
                                                        <option value="">PILIH</option>
                                                        <?php $kab=$this->model_crud->selectData("kabupaten");
                                                            $i=1;
                                                            foreach ($kab->result() as $key) { ?>
                                                                <option value="<?=$key->KdKab?>" <?php if (!empty($biodata)) { if ($biodata['kabupaten']==$key->KdKab) { echo 'selected=selected'; }} ?>><?=$key->NamaKab?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3"></label>
                                                <label class="control-label col-sm-2" style="text-align: left;">
                                                Propinsi*
                                                </label>
                                                <div class="col-sm-4">
                                                    <select name="propinsi" class="form-control" id="prop" <?php if (empty($biodata['propinsi'])) echo "disabled"; ?> >
                                                        <option value="">PILIH</option>
                                                        <?php
                                                            if (!empty($biodata['propinsi']) ) {
                                                                    $prop=$this->model_crud->selectData("propinsi",array('kdProp'=>$biodata['propinsi']))->row_array();
                                                                    echo '<option value='.$biodata['propinsi'].' selected=selected>'.$prop['NamaProp'].'</option>';
                                                            }
                                                        ?>
                                                    </select>
                                                    *Jika propinsi tidak muncul klik kembali form kabupaten
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3"></label>
                                                <label class="control-label col-sm-2" style="text-align: left;">
                                                    Kode Pos*
                                                </label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="kodepos" class="form-control" placeholder="Kode Pos" <?php if (!empty($biodata['kodepos'])) echo 'value="'.$biodata['kodepos'].'"'; ?> >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3"></label>
                                                <label class="control-label col-sm-2" style="text-align: left;">
                                                    Telp/HP*
                                                </label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="telepon" class="form-control" placeholder="Telp/HP" maxlength="15" <?php if (!empty($biodata['telepon'])) echo 'value="'.$biodata['telepon'].'"'; else echo 'value="'.$akun['telp'],'"' ;?> >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3"> Email </label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="email" class="form-control" placeholder="sample@sample.com" <?php if (!empty($biodata['email'])) echo 'value="'.$biodata['email'].'"'; else echo 'value="'.$this->session->userdata['email'],'"' ; ?> >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-7" style="width: 50%;">
                                                    Informasi pertama tentang Universitas Amikom Purwokerto
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-8" style="text-align: right;width: 60%;">
                                                <?php
                                                    $info=array('Brosur','Televisi','Internet','Teman/Saudara','Lainnya');
                                                    $info2=array('brosur','televisi','internet','teman/Saudara','lainnya');
                                                   
                                                        $i=0;
                                                        foreach ($info2 as $key) { ?>
                                                             <input type="checkbox" name="info[]" value="<?=$key?>" 
                                                             <?php if (!empty($biodata)) { 
                                                                     $pecah=explode(',',$biodata['komentar']);
                                                                     foreach ($pecah as $data_info) {
                                                                          if ($data_info==$key) { echo 'checked=checked'; }
                                                                     }
                                                                    } ?> required><?=$info[$i];?>
                                                <?php   
                                                        $i++;
                                                        }
                                                ?>
                                                   
                                                </label>
                                            </div>
                                            <div class="alert alert-info">
                                                Data Orang Tua Calon Mahasiswa
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">
                                                    Nama Ibu Kandung*
                                                </label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="nama_ortu" class="form-control" placeholder="Nama Orang Tua" <?php if (!empty($biodata['NAMA_ORTU'])) echo 'value="'.$biodata['NAMA_ORTU'].'"'; ?> >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">Alamat lengkap*</label>
                                                <div class="col-sm-5">
                                                    <input type="text" name="alamat_ortu" class="form-control" placeholder="Jalan" <?php if (!empty($biodata['ALAMATORTU'])) echo 'value="'.$biodata['ALAMATORTU'].'"'; ?> >
                                                </div>
                                                <label class="control-label col-sm-1" style="width: 5%;">RT*</label>
                                                <div class="col-sm-1">
                                                    <input type="text" name="rt_ortu" class="form-control" placeholder="00" maxlength="2" <?php if (!empty($biodata['RT_ORTU'])) echo 'value="'.$biodata['RT_ORTU'].'"'; ?> >
                                                </div>
                                                <label class="control-label col-sm-1" style="width: 5%;">RW*</label>
                                                <div class="col-sm-1">
                                                    <input type="text" name="rw_ortu" class="form-control" placeholder="00" maxlength="2" <?php if (!empty($biodata['RW_ORTU'])) echo 'value="'.$biodata['RW_ORTU'].'"'; ?> >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3"></label>
                                                <label class="control-label col-sm-2" style="text-align: left;">
                                                Kelurahan/Desa*
                                                </label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="kelurahan_ortu" class="form-control" placeholder="Kelurahan/Desa" <?php if (!empty($biodata['KELURAHAN_ORTU'])) echo 'value="'.$biodata['KELURAHAN_ORTU'].'"'; ?> >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3"></label>
                                                <label class="control-label col-sm-2" style="text-align: left;">
                                                    Kecamatan*
                                                </label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="kecamatan_ortu" class="form-control" placeholder="Kecamatan" <?php if (!empty($biodata['KECAMATAN_ORTU'])) echo 'value="'.$biodata['KECAMATAN_ORTU'].'"'; ?> >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3"></label>
                                                <label class="control-label col-sm-2" style="text-align: left;">
                                                    Kabupaten*
                                                </label>
                                                <div class="col-sm-4">
                                                    <select name="kabupaten_ortu" class="form-control" id="kab2"  >
                                                        <option value="">PILIH</option>
                                                        <?php $kab=$this->model_crud->selectData("kabupaten");
                                                            $i=1;
                                                            foreach ($kab->result() as $key) { ?>
                                                                <option value="<?=$key->KdKab?>" <?php if (!empty($biodata)) { if ($biodata['KABUPATEN_ORTU']==$key->KdKab) { echo 'selected=selected'; }} ?>><?=$key->NamaKab?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3"></label>
                                                <label class="control-label col-sm-2" style="text-align: left;">
                                                Propinsi*
                                                </label>
                                                <div class="col-sm-4">
                                                    <select name="propinsi_ortu" class="form-control" id="prop2" <?php if (empty($biodata['PROPINSI_ORTU'])) echo "disabled"; ?>>
                                                        <option value="">PILIH</option>
                                                        <?php
                                                            if (!empty($biodata['PROPINSI_ORTU']) ) {
                                                                    $prop=$this->model_crud->selectData("propinsi",array('kdProp'=>$biodata['PROPINSI_ORTU']))->row_array();
                                                                    echo '<option value='.$biodata['PROPINSI_ORTU'].' selected=selected>'.$prop['NamaProp'].'</option>';
                                                            }
                                                        ?>
                                                    </select>
                                                    *Jika propinsi tidak muncul klik kembali form kabupaten
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3"></label>
                                                <label class="control-label col-sm-2" style="text-align: left;">
                                                    Kode Pos*
                                                </label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="kodepos_ortu" class="form-control" placeholder="Kode Pos" <?php if (!empty($biodata['KODEPOS_ORTU'])) echo 'value="'.$biodata['KODEPOS_ORTU'].'"'; ?>>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3"></label>
                                                <label class="control-label col-sm-2" style="text-align: left;">
                                                    Telp/HP*
                                                </label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="telp_ortu" class="form-control" placeholder="Telp/HP" maxlength="15" <?php if (!empty($biodata['TELP_ORTU'])) echo 'value="'.$biodata['TELP_ORTU'].'"'; ?>>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">
                                                    <button class="btn btn-primary"<?php if (!empty($biodata)) { if ($biodata['syarat2']=='Sudah') echo "disabled";} ?>>SIMPAN</button>
                                                </label>
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
            kecamatan : { required : true},
            kabupaten : { required : true },
            alamat_ortu : {required : true},
            rt_ortu : { required : true, number : true, minlength : 2},
            rw_ortu: { required : true, number : true, minlength : 2},
            kecamatan_ortu : { required : true },
            kabupaten_ortu : { required : true },
            kodepos : { required : true, number : true },
            kodepos_ortu : { required : true ,  number : true },
            telepon : {required : true, number : true, minlength : 6},
            telp_ortu : {required : true, number : true, minlength : 6},
            jenis_mhs : {required : true},
            relasi : { required : true},
            kelas : { required : true },
            info : {required : true},
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

    $jne3('#kab').click(function(event){
             event.preventDefault();
        var country_id = $jne3('#kab').val();
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

    $jne3('#kab2').click(function(event){
             event.preventDefault();
        var kab2 = $jne3('#kab2').val();
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

    


    $jne3('#jenis_mhs').click(function(event){
             event.preventDefault();
        var jenis_mhs = $jne3('#jenis_mhs').val();
        if(jenis_mhs != '')
        {
            
         $jne3.ajax({
                type:'post',
                url:"<?php echo base_url(); ?>" + "main/get_kelas",
                data:{jenis_mhs:jenis_mhs},
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
        var pilihan1 = $jne3('#pilihan1').val();
        if(pilihan1 != '')
        {
            
         $jne3.ajax({
                type:'post',
                url:"<?php echo base_url(); ?>" + "main/get_pilihan",
                data:{pilihan1:pilihan1},
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
                                            