<form method="post" action="<?= base_url() ?>main_user/save_alamat" enctype="multipart/form-data" id="form">
    <div class="form-group">
        <label>Alamat *</label>
        <input type="text" name="alamat" class="form-control otom" id="alamat_siswa" placeholder="Alamat Lengkap Jalan" <?php if (!empty($biodata['alamat'])) echo 'value="' . htmlspecialchars($biodata['alamat']) . '"'; ?>>
    </div>

    <div class="form-row form-group">
        <div class="col-4">
            <input type="text" name="rt" class="form-control otom" id="rt_siswa" placeholder="RT" maxlength="2" <?php if (!empty($biodata['rt'])) echo 'value="' . htmlspecialchars($biodata['rt']) . '"'; ?>>
        </div>

        <div class="col-4">
            <input type="text" name="rw" class="form-control otom" id="rw_siswa" placeholder="RW" maxlength="2" <?php if (!empty($biodata['rw'])) echo 'value="' . htmlspecialchars($biodata['rw']) . '"'; ?>>
        </div>
        <div class="col-4">
            <input type="number" name="kodepos" class="form-control otom" id="kodepos_siswa" placeholder="Kode Pos" <?php if (!empty($biodata['kodepos'])) echo 'value="' . htmlspecialchars($biodata['kodepos']) . '"'; ?>>
        </div>
    </div>

    <div class="form-row form-group">
        <div class="col-sm-6">
            <input type="text" name="kelurahan" class="form-control otom" id="desa_siswa" placeholder="Kelurahan/Desa" <?php if (!empty($biodata['kelurahan'])) echo 'value="' . htmlspecialchars($biodata['kelurahan']) . '"'; ?>>
        </div>
        <div class="col-sm-6">
            <input type="text" name="kecamatan" class="form-control otom" id="kecamatan_siswa" placeholder="Kecamatan" <?php if (!empty($biodata['kecamatan'])) echo 'value="' . htmlspecialchars($biodata['kecamatan']) . '"'; ?>>
        </div>
    </div>

    <div class="form-group">
        <select name="kabupaten" class="form-control select2" id="kab_siswa" style="width:100%;" required>
            <option value="">Pilih Kabupaten</option>
            <?php $kab = $this->model_crud->selectData("kabupaten");
            $i = 1;
            foreach ($kab->result() as $key) {
                //$idprop = $key->Kdprop;
            ?>
                <option value="<?= $key->KdKab ?>" <?php if (!empty($biodata)) {
                                                        if ($biodata['kabupaten'] == $key->KdKab) {
                                                            echo 'selected=selected';
                                                        }
                                                    } ?>><?= $key->NamaKab ?></option>
            <?php } ?>
        </select>
    </div>

    <div class="form-group">
        <!--<select name="propinsi" class="form-control" id="prop" <?php //if (empty($biodata['propinsi'])) echo "disabled"; 
                                                                    ?> >-->
        <select name="propinsi" class="form-control" id="prop" required>
            <option value="">Pilih Provinsi</option>
            <?php  //$prop=$this->model_crud->selectData("propinsi");
            if (!empty($biodata['propinsi'])) {
                $prop = $this->model_crud->selectData("propinsi", array('kdProp' => $biodata['propinsi']))->row_array();
                echo '<option value=' . $biodata['propinsi'] . ' selected=selected>' . $prop['NamaProp'] . '</option>';
                // }
                //$i=1;
                //foreach ($prop->result() as $key) { 
            ?>
                <!--<option value="<? //=$key->kdProp
                                    ?>" class="<? //=$idprop
                                            ?>" <?php //if (!empty($biodata)) { if ($biodata['propinsi']==$key->kdProp) { echo 'selected=selected'; }} 
                                                                        ?>><? //=$key->NamaProp
                    ?></option>-->
            <?php } ?>
        </select>
        <span style="font-size:11px">Jika propinsi tidak muncul klik kembali form Kabupaten</span>
    </div>

    <div class="form-group">
        <textarea rows="2" name="deskripsi_alamat" class="form-control" id="deskripsialamat_siswa" placeholder="Deskripsi Alamat (Dari Fasilitas Umum)" data-status-message="#counter" maxlength="150"><?php if (!empty($biodata['deskripsi_alamat'])) echo htmlspecialchars($biodata['deskripsi_alamat']); ?></textarea>
        <div id="counter" class="text-right"></div>
    </div>

    <a href="<?= base_url('main_user/daftar?act=step3') ?>" class="btn btn-primary btn-lg" type="button">Sebelumnya</a>
    <button type="submit" class="btn btn-success btn-lg" type="button" <?php if (!empty($biodata)) {
                                                                                        if ($biodata['syarat2'] == 'Sudah') echo "disabled";
                                                                                    } ?>>Simpan & Lanjut</button>
</form>