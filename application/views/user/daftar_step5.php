<label class="control-label">Data Ibu Kandung dan Ayah *</label>
<div class="form-row form-group">
    <div class="col-md-6">
        <input type="text" name="nama_ortu" class="form-control" placeholder="Nama Ibu Kandung" <?php if (!empty($biodata['NAMA_ORTU'])) echo 'value="' . htmlspecialchars($biodata['NAMA_ORTU']) . '"'; ?>>
    </div>

    <div class="col-md-3">
        <input type="number" name="telp_ortu" class="form-control" placeholder="No Telp/HP WA Ibu" maxlength="15" <?php if (!empty($biodata['TELP_ORTU'])) echo 'value="' . htmlspecialchars($biodata['TELP_ORTU']) . '"'; ?> required>
    </div>

    <div class="col-md-3">
        <select class="form-control" name="pekerjaan_ortu">
            <option value="">Pilih Pekerjaan Ibu</option>
            <?php
            $pekerjaan1 = array('IRT', 'WIRASWASTA', 'WIRAUSAHA', 'PEDAGANG', 'BURUH', 'KARYAWAN SWASTA', 'PEGAWAI SWASTA', 'PNS', 'PEGAWAI BUMN', 'PEGAWAI BUMD', 'GURU', 'TNI', 'POLRI', 'PENSIUNAN', 'NELAYAN', 'PETANI', 'PETERNAK', 'PENGRAJIN', 'TENAGA KERJA INDONESIA', 'PILOT', 'PRAMUGARI', 'CHEF', 'SENIMAN', 'ARSITEK', 'PENGACARA', 'NOTARIS');
            foreach ($pekerjaan1 as $kerja1) { ?>
                <option value="<?= $kerja1 ?>" <?php if (!empty($biodata)) {
                                                    if ($biodata['PEKERJAAN_ORTU'] == $kerja1) {
                                                        echo 'selected=selected';
                                                    }
                                                } ?>><?= $kerja1 ?></option>
            <?php
            }
            ?>
        </select>
    </div>
</div>

<div class="form-row form-group">
    <div class="col-md-6">
        <input type="text" name="nama_ayah" class="form-control" placeholder="Nama Ayah" <?php if (!empty($biodata['NAMA_AYAH'])) echo 'value="' . htmlspecialchars($biodata['NAMA_AYAH']) . '"'; ?>>
    </div>

    <div class="col-md-3">
        <input type="number" name="telp_ayah" class="form-control" placeholder="No Telp/HP WA Ayah" maxlength="15" <?php if (!empty($biodata['TELP_AYAH'])) echo 'value="' . htmlspecialchars($biodata['TELP_AYAH']) . '"'; ?> required>
    </div>

    <div class="col-md-3">
        <select class="form-control" name="pekerjaan_ayah">
            <option value="">Pilih Pekerjaan Ayah</option>
            <?php
            $pekerjaan2 = array('WIRASWASTA', 'WIRAUSAHA', 'PEDAGANG', 'BURUH', 'KARYAWAN SWASTA', 'PEGAWAI SWASTA', 'PNS', 'PEGAWAI BUMN', 'PEGAWAI BUMD', 'GURU', 'TNI', 'POLRI', 'PENSIUNAN', 'NELAYAN', 'PETANI', 'PETERNAK', 'PENGRAJIN', 'TENAGA KERJA INDONESIA', 'PILOT', 'PRAMUGARA', 'CHEF', 'SENIMAN', 'FOTOGRAFER', 'ARSITEK', 'PENGACARA', 'NOTARIS', 'SUPIR', 'PEKERJA PERTAMBANGAN', 'PEKERJA KONSTRUKSI');
            foreach ($pekerjaan2 as $kerja2) { ?>
                <option value="<?= $kerja2 ?>" <?php if (!empty($biodata)) {
                                                    if ($biodata['PEKERJAAN_AYAH'] == $kerja2) {
                                                        echo 'selected=selected';
                                                    }
                                                } ?>><?= $kerja2 ?></option>
            <?php
            }
            ?>
        </select>
    </div>

</div>

<label class="control-label">Alamat Orang Tua *</label>

<div class="form-group">
    <input type="text" name="alamat_ortu" class="form-control otom" id="alamat_ortu" placeholder="Alamat Lengkap Orang Tua" <?php if (!empty($biodata['ALAMATORTU'])) echo 'value="' . htmlspecialchars($biodata['ALAMATORTU']) . '"'; ?>>
</div>

<div class="form-row form-group">
    <div class="col-sm-3">
        <input type="text" name="rt_ortu" class="form-control otom" id="rt_ortu" placeholder="RT" maxlength="2" <?php if (!empty($biodata['RT_ORTU'])) echo 'value="' . htmlspecialchars($biodata['RT_ORTU']) . '"'; ?>>
    </div>

    <div class="col-sm-3">
        <input type="text" name="rw_ortu" class="form-control otom" id="rw_ortu" placeholder="RW" maxlength="2" <?php if (!empty($biodata['RW_ORTU'])) echo 'value="' . htmlspecialchars($biodata['RW_ORTU']) . '"'; ?>>
    </div>

    <div class="col-sm-6">
        <input type="text" name="kelurahan_ortu" class="form-control otom" id="desa_ortu" placeholder="Kelurahan/Desa" <?php if (!empty($biodata['KELURAHAN_ORTU'])) echo 'value="' . htmlspecialchars($biodata['KELURAHAN_ORTU']) . '"'; ?>>
    </div>

</div>

<div class="form-row form-group">
    <div class="col-sm-6">
        <input type="text" name="kecamatan_ortu" class="form-control otom" id="kecamatan_ortu" placeholder="Kecamatan" <?php if (!empty($biodata['KECAMATAN_ORTU'])) echo 'value="' . htmlspecialchars($biodata['KECAMATAN_ORTU']) . '"'; ?>>
    </div>
    <div class="col-sm-6">
        <input type="text" name="kodepos_ortu" class="form-control otom" id="kodepos_ortu" placeholder="Kode Pos" <?php if (!empty($biodata['KODEPOS_ORTU'])) echo 'value="' . htmlspecialchars($biodata['KODEPOS_ORTU']) . '"'; ?>>
    </div>
</div>

<div class="form-group">
    <select name="kabupaten_ortu" class="form-control select2" id="kab_ortu" required>
        <option value="">Pilih Kabupaten</option>
        <?php $kab = $this->model_crud->selectData("kabupaten");
        $i = 1;
        foreach ($kab->result() as $key) {
            //$idprop2 = $key->Kdprop;
        ?>
            <option value="<?= $key->KdKab ?>" <?php if (!empty($biodata)) {
                                                    if ($biodata['KABUPATEN_ORTU'] == $key->KdKab) {
                                                        echo 'selected=selected';
                                                    }
                                                } ?>><?= $key->NamaKab ?></option>
        <?php } ?>
    </select>
</div>
<div class="form-group">
    <!--<select name="propinsi_ortu" class="form-control" id="prop2" <?php //if (empty($biodata['PROPINSI_ORTU'])) echo "disabled"; 
                                                                        ?> >-->
    <select name="propinsi_ortu" class="form-control" id="prop2" required>
        <option value="">Pilih Provinsi</option>
        <?php  //$prop2=$this->model_crud->selectData("propinsi");
        if (!empty($biodata['PROPINSI_ORTU'])) {
            $prop = $this->model_crud->selectData("propinsi", array('kdProp' => $biodata['PROPINSI_ORTU']))->row_array();
            echo '<option value=' . $biodata['PROPINSI_ORTU'] . ' selected=selected>' . $prop['NamaProp'] . '</option>';
            //}
            //$i=1;
            //foreach ($prop2->result() as $key) { 
        ?>
            <!--<option value="<? //=$key->kdProp
                                ?>" class="<? //=$idprop2
                                                                    ?>" <?php //if (!empty($biodata)) { if ($biodata['PROPINSI_ORTU']==$key->kdProp) { echo 'selected=selected'; }} 
                ?>><? //=$key->NamaProp
                    ?></option>-->
        <?php } ?>
    </select>
    <span style="font-size:11px">Jika propinsi tidak muncul klik kembali form Kabupaten</span>

</div>