<form method="post" action="<?= base_url() ?>main_user/save_biodata" enctype="multipart/form-data" id="form">
<label class="control-label">Biodata *</label>
    <div class="form-group">
        <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" <?php if (!empty($biodata['nama'])) echo 'value="' . $biodata['nama'] . '"';
                                                                                        else echo 'value="' . htmlspecialchars($akun['nama']) . '"'; ?> required>
    </div>

    <div class="form-row form-group">
        <div class="col-sm-6">
            <input type="text" name="nik" class="form-control" placeholder="Nomor NIK/KTP" maxlength="16" <?php if (!empty($biodata['nikktp'])) echo 'value=' . htmlspecialchars($biodata['nikktp']); ?> required="required">
        </div>
        <div class="col-sm-6">
            <input type="text" name="tempatlahir" class="form-control" placeholder="Tempat Lahir" <?php if (!empty($biodata['tempatlahir'])) echo 'value=' . htmlspecialchars($biodata['tempatlahir']); ?> required>
        </div>
    </div>

    <div class="form-row form-group">
        <div class="col-4">
            <select name="tgllahir" class="form-control">
                <option value="">Tanggal Lahir</option>
                <?php
                for ($i = 1; $i <= 31; $i++) {
                    $i = str_pad($i, 2, 0, STR_PAD_LEFT); ?>
                    <option value="<?= $i; ?>" <?php if (!empty($biodata)) {
                                                    if (date('d', strtotime($biodata['tgllahir'])) == $i) {
                                                        echo 'selected=selected';
                                                    }
                                                } ?>><?= $i; ?>
                    </option>
                <?php
                }
                ?>
            </select>
        </div>

        <div class="col-4">
            <select name="blnlahir" class="form-control">
                <option value="">Bulan Lahir</option>
                <?php
                for ($i = 1; $i <= 12; $i++) {
                    $i = str_pad($i, 2, 0, STR_PAD_LEFT); ?>
                    <option value="<?= $i; ?>" <?php if (!empty($biodata)) {
                                                    if (date('m', strtotime($biodata['tgllahir'])) == $i) {
                                                        echo 'selected=selected';
                                                    }
                                                } ?>><?= $i; ?>
                    </option>

                <?php
                }
                ?>
            </select>
        </div>
        <div class="col-4">
            <select name="thnlahir" class="form-control">
                <option value="">Tahun Lahir</option>
                <?php
                for ($i = date('Y'); $i >= date('Y', strtotime('-100 years')); $i--) { ?>
                    <option value="<?= $i; ?>" <?php if (!empty($biodata)) {
                                                    if (date('Y', strtotime($biodata['tgllahir'])) == $i) {
                                                        echo 'selected=selected';
                                                    }
                                                } ?>><?= $i ?>
                    </option>
                <?php } ?>
            </select>
        </div>

    </div>

    <div class="form-row form-group mb-1" id="jk">

        <div class="col-6">
            <input class="radio-btn positive" type="radio" name="jk" value="Pria" <?php if (!empty($biodata)) {
                                                                                        if ($biodata['jk'] == 'Pria') {
                                                                                            echo 'checked=checked';
                                                                                        }
                                                                                    } ?> id="radio-1">
            <label class="radio-label" for="radio-1">Laki-Laki</label>
        </div>

        <div class="col-6">
            <input class="radio-btn positive" type="radio" name="jk" value="Wanita" <?php if (!empty($biodata)) {
                                                                                        if ($biodata['jk'] == 'Wanita') {
                                                                                            echo 'checked=checked';
                                                                                        }
                                                                                    } ?> id="radio-2">
            <label class="radio-label" for="radio-2">Perempuan</label>
        </div>

    </div>

    <div class="form-row form-group">
        <div class="col-md-6">
            <?php $agama = array('I', 'P', 'K', 'B', 'H', 'KH', 'L');
            $nama_agama = array('Islam', 'Protestan', 'Katholik', 'Buddha', 'Hindu', 'Konghucu', 'Lainnya');
            ?>
            <select name="agama" class="form-control">
                <option value="">Pilih Agama</option>
                <?php
                $i = 0;
                foreach ($agama as $agm) { ?>
                    <option value="<?= $agm ?>" <?php if (!empty($biodata)) {
                                                    if ($biodata['AGAMA'] == $agm) {
                                                        echo 'selected=selected';
                                                    }
                                                } ?>><?= $nama_agama[$i] ?></option>
                <?php
                    $i++;
                }
                ?>
            </select>
        </div>
        <div class="col-md-6">
            <?php
            $status_pernikahan = array('Belum Menikah', 'Menikah');
            ?>
            <select name="status_pernikahan" class="form-control">
                <option value="">Pilih Status Pernikahan</option>
                <?php
                $i = 0;
                foreach ($status_pernikahan as $status) { ?>
                    <option value="<?= $status ?>" <?php if (!empty($biodata)) {
                                                        if ($biodata['status_pernikahan'] == $status) {
                                                            echo 'selected=selected';
                                                        }
                                                    } ?>><?= $status ?>
                    </option>
                <?php
                    $i++;
                }
                ?>
            </select>
        </div>
    </div>

    <div class="form-row form-group">
        <div class="col-sm-6">
            <input type="text" name="telepon" class="form-control" placeholder="No HP/WA" maxlength="15" <?php if (!empty($biodata['telepon'])) echo 'value="' . $biodata['telepon'] . '"';
                                                                                                            else echo 'value="' . htmlspecialchars($akun['telp']) . '"'; ?> required>
        </div>

        <div class="col-sm-6">
            <input type="text" name="email" class="form-control" placeholder="Alamat Email" <?php if (!empty($biodata['email'])) echo 'value="' . $biodata['email'] . '"';
                                                                                            else echo 'value="' . htmlspecialchars($this->session->userdata['email']) . '"'; ?> readonly>
        </div>
    </div>
    
    <a href="<?= base_url('main_user/daftar?act=step1') ?>" class="btn btn-primary btn-lg" type="button">Sebelumnya</a>
    <button type="submit" class="btn btn-success btn-lg" type="button">Simpan & Lanjut</button>
</form>