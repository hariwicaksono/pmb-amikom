<form method="post" action="<?= base_url() ?>main_user/save_sekolah" enctype="multipart/form-data" id="form">
    <div class="form-group">
        <label class="control-label">Nama Sekolah *</label>
        <input type="text" name="sekolah" class="form-control" placeholder="Nama SMK/SMA/PTS/PTN/DLL" <?php if (!empty($biodata['sekolah'])) echo 'value="' . htmlspecialchars($biodata['sekolah']) . '"'; ?> required>
    </div>

    <div class="form-group">
        <select class="select2 form-control" name="jurusan" id="jurusan" style="width:100%;">
            <option value="">Pilih Jurusan</option>
            <?php
            $jurusan = array('IPA', 'IPS', 'BAHASA', 'AKUNTANSI', 'ADMINISTRASI', 'OTKP', 'PERKANTORAN', 'KEUANGAN', 'PERBANKAN', 'PERBANKAN SYARIAH', 'BISNIS PEMASARAN', 'BISNIS DARING DAN PEMASARAN', 'MANAJEMEN', 'OTOMOTIF', 'TKR', 'TSM', 'MESIN', 'TEKNIK MEKANIK INDUSTRI', 'LISTRIK', 'ELEKTRO', 'BANGUNAN', 'INDUSTRI', 'AIRCRAFT ELECTRICITY', 'GEOMATIKA GEOSPASIAL', 'MIPA', 'KEPERAWATAN', 'KEPERAWATAN GIGI', 'FARMASI', 'FARMASI INDUSTRI', 'KESEHATAN', 'TKJ', 'MULTIMEDIA', 'RPL', 'INFORMATIKA', 'SISTEM INFORMASI', 'TEKNOLOGI INFORMASI', 'TELEKOMUNIKASI', 'TEKNIK JARINGAN AKSES TELEKOMUNIKASI', 'TAV', 'BROADCASTING', 'PERTANIAN', 'TEKNIK PERMINYAKAN', 'GEOLOGI PERTAMBANGAN', 'TEKNIK ENERGI', 'AGRIBISNIS', 'PELAYARAN', 'PARIWISATA', 'TATA BOGA', 'TATA KECANTIKAN', 'TATA BUSANA', 'PERHOTELAN', 'SENI RUPA', 'SENI MUSIK', 'SENI TARI', 'SENI TEATER', 'SENI PERTUNJUKAN', 'Lainnya');
            foreach ($jurusan as $jrs) { ?>
                <option value="<?= $jrs ?>" <?php if (!empty($biodata)) {
                                                if ($biodata['jurusan'] == $jrs) {
                                                    echo 'selected=selected';
                                                }
                                            } ?>><?= $jrs ?></option>
            <?php
            }
            ?>
        </select>
        <div id="jurusan-box" style="display:none;">
            <div class="form-group">
                <input type="text" id="jurusanlain" name="jurusanlain" class="form-control" placeholder="Jurusan Sekolah" <?php if (!empty($biodata['jurusan'])) echo 'value="' . $biodata['jurusan'] . '"'; ?>>
            </div>
        </div>
    </div>

    <div class="form-row form-group">
        <div class="col-md-6">
            <label class="control-label">Rata-rata RAPOR/NEM/UAN *</label>
            <input id="nem" type="text" name="nem" class="form-control" placeholder="00.00" onkeypress="return hanyaAngka(this)" maxlength="5" <?php if (!empty($biodata['nem'])) echo 'value=' . htmlspecialchars($biodata['nem']); ?>>
        </div>
        <div class="col-md-6">
            <label class="control-label">Tahun Lulus *</label>
            <input type="text" name="thn_lulus" class="form-control" placeholder="Tahun Lulus" onkeypress="return hanyaAngka(this)" maxlength="4" <?php if (!empty($biodata['tahun_lulus'])) echo 'value=' . htmlspecialchars($biodata['tahun_lulus']); ?>>
        </div>
    </div>

    <a href="<?= base_url('main_user/daftar?act=step2') ?>" class="btn btn-primary" type="button">Sebelumnya</a>
    <button type="submit" class="btn btn-success" type="button" <?php if (!empty($biodata)) {
                                                                            if ($biodata['syarat2'] == 'Sudah') echo "disabled";
                                                                        } ?>>Lanjut ke Data Alamat <i class="fa fa-chevron-right" aria-hidden="true"></i></button>
</form>