<?php
if ($biodata['syarat2'] == 'Sudah') $status = 'Readonly';
$this->data['tahun_pmb'] = $this->mtahun->getThaPmb();
$tha = $this->data['tahun_pmb'];
$gelombang = $this->mgelombang->cek_daftar(array('thn_akademik' => $tha));
?>

<form method="post" action="<?= base_url() ?>main_user/save_nodaf" enctype="multipart/form-data" id="form">
    <input type="hidden" name="relasi" value="1">
    <input type="hidden" name="kode_gelombang" value="<?= $gelombang['kode'] ?>">
    <input type="hidden" name="email" value="<?=$this->session->userdata['email']?>">
    <input type="hidden" name="nama" value="<?=$this->session->userdata['nama']?>">

    <div class="form-group">
        <label class="control-label">Jenis Pendaftaran *</label>
        <select name="status_reg" class="form-control" id="status_reg">
            <option value="">-- Pilih Jenis Pendaftaran --</option>
            <?php foreach ($list_statusreg->result_array() as $key) { ?>
                <option value="<?= $key['status_registrasi'] ?>" <?php if (!empty($biodata)) {
                                                                        if ($biodata['status_registrasi'] == $key['status_registrasi']) {
                                                                            echo 'selected=selected';
                                                                        }
                                                                    } ?>><?= $key['status_registrasi'] ?></option>
            <?php } ?>
        </select>
    </div>

    <div class="form-group">
        <label class="control-label">Jenis Mahasiswa *</label>
        <select name="jenis_mhs" class="form-control" id="jenis_mhs">
            <option value="">-- Pilih Jenis Pendaftaran dahulu --</option>
            <?php if (!empty($biodata['JENIS_MHS'])) {
                foreach ($jenis_mhs->result_array() as $key) { ?>
                    <option value="<?= $key['KODE_JENIS'] . '/' . $key['ID_JENISMHS'] ?>" <?php if (!empty($biodata)) {
                                                                                                if ($biodata['JENIS_MHS'] == $key['KODE_JENIS']) {
                                                                                                    echo 'selected=selected';
                                                                                                }
                                                                                            } ?>><?= $key['NAMA'] ?></option>
            <?php }
            }
            ?>
        </select>

    </div>

    <div class="form-row form-group">

        <div class="col-sm-4">
            <label class="control-label">Pilihan 1 *</label>
            <?php
            $list_prodi = $this->db->query("select * from DEPARTMENT")->result_array();
            ?>
            <select name="pilihan1" class="form-control" id="pilihan1" <?php //if (empty($biodata['pilihan1'])) echo "disabled"; 
                                                                        ?>>
                <option value="">-- Pilih Jenis mahasiswa dahulu --</option>
                <?php if (!empty($biodata['pilihan1'])) {
                    foreach ($list_prodi as $key) {
                ?>
                        <option value="<?= $key['KD_DEPT'] ?>" <?php if ($biodata['pilihan1'] == $key['KD_DEPT']) echo 'selected="selected"'; ?>><?= $key['NAMA_DEPT'] ?></option>
                <?php
                    }
                }
                ?>
            </select>

        </div>

        <div class="col-sm-4">
            <label class="control-label">Pilihan 2 *</label>
            <select name="pilihan2" class="form-control" id="pilihan2" <?php //if (empty($biodata['pilihan2'])) echo "disabled"; 
                                                                        ?>>
                <option value="">-- Pilih Pilihan 1 dahulu --</option>
                <?php if (!empty($biodata['pilihan2'])) {
                    foreach ($list_prodi as $key) {
                ?>
                        <option value="<?= $key['KD_DEPT'] ?>" <?php if ($biodata['pilihan2'] == $key['KD_DEPT']) echo 'selected="selected"'; ?>><?= $key['NAMA_DEPT'] ?></option>
                <?php
                    }
                }
                ?>
            </select>

        </div>

        <div class="col-sm-4">
            <label class="control-label">Pilihan 3 *</label>
            <select name="pilihan3" class="form-control" id="pilihan3" <?php //if (empty($biodata['pilihan3'])) echo "disabled"; 
                                                                        ?>>
                <option value="">-- Pilih Pilihan 2 dahulu --</option>
                <?php if (!empty($biodata['pilihan3'])) {
                    foreach ($list_prodi as $key) {
                ?>
                        <option value="<?= $key['KD_DEPT'] ?>" <?php if ($biodata['pilihan3'] == $key['KD_DEPT']) echo 'selected="selected"'; ?>><?= $key['NAMA_DEPT'] ?></option>
                <?php
                    }
                }
                ?>
            </select>

        </div>

    </div>

    <div class="form-group">
        <label class="control-label">Pilih Kelas *</label>
        <select name="kelas" class="form-control" id="kelas" <?php //if (empty($biodata['KELAS'])) echo "disabled"; 
                                                                ?>>
            <option value="">-- Pilih Pilihan 3 dahulu --</option>
            <?php if (!empty($biodata['KELAS'])) {
                $kelas = array('Pagi', 'Transfer', 'Sore');
                foreach ($kelas as $key) { ?>
                    <option value="<?= $key ?>" <?php if (!empty($biodata)) {
                                                    if ($biodata['KELAS'] == $key) {
                                                        echo 'selected=selected';
                                                    }
                                                } ?>>Kelas <?= $key ?></option>
            <?php
                }
            }
            ?>
        </select>

    </div>

    <div id="kipk-box" style="display:none;">
        <div class="form-group">
            <label>Nomor KIP-Kuliah *</label>
            <input type="text" name="no_kipk" class="form-control" placeholder="Nomor KIP-Kuliah, Contoh: 6012.0000.0000.0000" <?php if (!empty($biodata['no_kipk'])) echo 'value=' . $biodata['no_kipk']; ?>>
            <span id="kipk-info" class="text-secondary" style="font-size:10px; font-weight: 500"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Pastikan nomor anda terdaftar pada website: <a href="https://kip-kuliah.kemdikbud.go.id" target="_blank" style="color: #007bff;line-height:0;">https://kip-kuliah.kemdikbud.go.id</a>.</span>
        </div>
    </div>

    <div class="form-group" id="jk">
        <label class="control-label">Ukuran Jas Almamater</label><br />
        <?php
        $info = array('S&nbsp;', 'M&nbsp;', 'L&nbsp;', 'XL&nbsp;', 'XXL&nbsp;', '3L&nbsp;', '5L&nbsp;');
        $info2 = array('S', 'M', 'L', 'XL', 'XXL', '3L', '5L');

        $i = 0;
        foreach ($info2 as $key) { ?>
            <label class="radio-inline">
                <input type="radio" name="ukuran_jas" value="<?= $key ?>" <?php if (!empty($biodata)) {
                                                                                $pecah = explode(',', $biodata['ukuran_jas']);
                                                                                foreach ($pecah as $data_info) {
                                                                                    if ($data_info == $key) {
                                                                                        echo 'checked=checked';
                                                                                    }
                                                                                }
                                                                            } ?> required><?= $info[$i]; ?>
            </label>
        <?php
            $i++;
        }
        ?>
    </div>

    <div class="form-group" id="informasi">
        <label class="control-label">Info tentang Universitas Amikom Purwokerto</label><br />
        <?php
        $info = array('Brosur&nbsp;', 'Surat&nbsp;', 'Televisi&nbsp;', 'Internet&nbsp;', 'FB', 'IG', 'Teman/Saudara&nbsp;', 'Lainnya&nbsp;');
        $info2 = array('brosur', 'surat', 'televisi', 'internet', 'fb', 'ig', 'teman/saudara', 'lainnya');

        $i = 0;
        foreach ($info2 as $key) { ?>
            <label class="checkbox-inline">
                <input type="checkbox" name="info[]" value="<?= $key ?>" <?php if (!empty($biodata)) {
                                                                                $pecah = explode(',', $biodata['komentar']);
                                                                                foreach ($pecah as $data_info) {
                                                                                    if ($data_info == $key) {
                                                                                        echo 'checked=checked';
                                                                                    }
                                                                                }
                                                                            } ?> required><?= $info[$i]; ?>
            </label>
        <?php
            $i++;
        }
        ?>
    </div>

    <button type="submit" class="btn btn-success btn-lg" type="button">Simpan & Lanjut</button>
</form>