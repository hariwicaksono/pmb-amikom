<link href="<?= base_url('assets/css'); ?>/select2.min.css" rel="stylesheet">
<link href="<?= base_url('assets/css'); ?>/select2-bootstrap4.min.css" rel="stylesheet">

<?php if (!empty($biodata)) {
    $start = "4";
} else {
    $start = "0";
}

?>

<style type="text/css">
    input[type="radio"],
    input[type="checkbox"] {
        -ms-transform: scale(1.4);
        /* IE 9 */
        -webkit-transform: scale(1.4);
        /* Chrome, Safari, Opera */
        transform: scale(1.4);
        margin: 0 0.5rem;
    }
</style>

<?php
if ($biodata['syarat2'] == 'Sudah') $status = 'Readonly';
$this->data['tahun_pmb'] = $this->mtahun->getThaPmb();
$tha = $this->data['tahun_pmb'];
$gelombang = $this->mgelombang->cek_daftar(array('thn_akademik' => $tha));
?>

<div class="card">
    <div class="card-body">
        <form class="row justify-content-around wizard" method="post" action="<?= base_url() ?>main_user/setting_biodata" enctype="multipart/form-data" id="form">
            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">

            <input type="hidden" name="relasi" value="1">
            <input type="hidden" name="kode_gelombang" value="<?= $gelombang['kode'] ?>">

            <ul class="col-12 col-md-auto nav nav-tabs flex-md-column justify-content-between justify-content-md-start">
                <li><a href="#first" class="step-circle step-circle-sm">1</a>
                </li>
                <li><a href="#second" class="step-circle step-circle-sm">2</a>
                </li>
                <li><a href="#third" class="step-circle step-circle-sm">3</a>
                </li>
                <li><a href="#fourth" class="step-circle step-circle-sm">4</a>
                </li>
                <li><a href="#fifth" class="step-circle step-circle-sm">5</a>
                </li>
            </ul>
            <!--end of col-->
            <div class="col col-lg-10 tab-content">
                <div id="first">
                    <div class="row align-items-center mb-1">
                        <div class="col-10">
                            <h6 class="title-decorative mb-1">Step 1</h6>
                            <h2 class="mb-0">Program Studi</h2>
                            <!--<span class="lead">Pilih Jenis Pendaftaran dan Program Studi Sesuai Minat Anda</span>-->
                        </div>
                        <!--end of col-->
                        <div class="col-2">

                        </div>
                        <!--end of col-->
                    </div>
                    <!--end of row-->
                    <div id="form-step-1">

                        <div class="form-group">
                            <label class="control-label">Jenis Pendaftaran *</label>
                            <select name="status_reg" class="form-control" id="status_reg">
                                <option value="">-- Pilih Jenis Pendaftaran --</option>
                                <?php foreach ($list_statusreg->result_array() as $key) { ?>
                                    <option value="<?= $key['status_registrasi'] ?>" <?php if (!empty($biodata)) {
                                                                                            if ($biodata['status_registrasi'] == $key['status_registrasi']) {
                                                                                                echo 'selected=selected';
                                                                                            }
                                                                                        } ?>><?= $key['nama_registrasi'] ?></option>
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
                            <label class="control-label">Informasi tentang Universitas Amikom Purwokerto</label><br />
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

                    </div>

                    <div class="mt-2">
                        <button class="btn btn-success sw-btn-next" type="button">Selanjutnya</button>
                    </div>
                </div>

                <div id="second">
                    <div class="row align-items-center mb-1">
                        <div class="col-10">
                            <h6 class="title-decorative mb-1">Step 2</h6>
                            <h2 class="mb-0">Data Diri</h2>
                            <!--<span class="lead">Mari mulai dengan mengisi Data Diri Anda. Semua Kolom Harus Diisi</span>-->
                        </div>
                        <!--end of col-->
                        <div class="col-2">

                        </div>
                        <!--end of col-->
                    </div>
                    <!--end of row-->
                    <div id="form-step-0">
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
                            <div class="col-sm-4">
                                <select name="tgllahir" class="form-control">
                                    <option value="">Tanggal Lahir</option>
                                    <?php
                                    for ($i = 1; $i <= 31; $i++) {
                                        $i = str_pad($i, 2, 0, STR_PAD_LEFT); ?>
                                        <option value='<?php echo $i; ?>' <?php if (!empty($biodata)) {
                                                                                if (date('d', strtotime($biodata['tgllahir'])) == $i) {
                                                                                    echo 'selected=selected';
                                                                                }
                                                                            } ?>><?php echo $i; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="col-sm-4">
                                <select name="blnlahir" class="form-control">
                                    <option value="">Bulan Lahir</option>
                                    <?php
                                    for ($i = 1; $i <= 12; $i++) {
                                        $i = str_pad($i, 2, 0, STR_PAD_LEFT); ?>
                                        <option value='<?php echo $i; ?>' <?php if (!empty($biodata)) {
                                                                                if (date('m', strtotime($biodata['tgllahir'])) == $i) {
                                                                                    echo 'selected=selected';
                                                                                }
                                                                            } ?>><?php echo $i; ?></option>

                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <select name="thnlahir" class="form-control">
                                    <option value="">Tahun Lahir</option>
                                    <?php
                                    for ($i = date('Y'); $i >= date('Y', strtotime('-100 years')); $i--) { ?>
                                        <option value='<?php echo $i; ?>' <?php if (!empty($biodata)) {
                                                                                if (date('Y', strtotime($biodata['tgllahir'])) == $i) {
                                                                                    echo 'selected=selected';
                                                                                }
                                                                            } ?>><?php echo $i ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                        </div>


                        <div class="form-row form-group mb-1">

                        <div class="col-6">
                            <input class="radio-btn positive" type="radio" name="kewargaan" value="WNI" <?php if (!empty($biodata)) {
                                            if ($biodata['kewargaan'] == 'WNI') {
                                                                                                            echo 'checked=checked';
                                                                                                        }
                                                                                                    } ?> id="radio-wni">
                            <label class="radio-label" for="radio-wni">WNI</label>
                        </div>

                        <div class="col-6">
                            <input class="radio-btn positive" type="radio" name="kewargaan" value="WNA" <?php if (!empty($biodata)) {
                                                if ($biodata['kewargaan'] == 'WNA') {
                                                                                                            echo 'checked=checked';
                                                                                                        }
                                                                                                    } ?> id="radio-wna">
                            <label class="radio-label" for="radio-wna">WNA</label>
                        </div>

                    </div>

                        <div class="form-row form-group mb-1" id="jk">

                            <div class="col-md-6">
                                <input class="radio-btn positive" type="radio" name="jk" value="Pria" <?php if (!empty($biodata)) {
                                                                                                            if ($biodata['jk'] == 'Pria') {
                                                                                                                echo 'checked=checked';
                                                                                                            }
                                                                                                        } ?> id="radio-1">
                                <label class="radio-label" for="radio-1">Laki-Laki</label>
                            </div>

                            <div class="col-md-6">
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
                                                                        } ?>><?= $status ?></option>
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
                    </div>
                    <button class="btn btn-secondary sw-btn-prev" type="button">Sebelumnya</button>
                    <button class="btn btn-success sw-btn-next" type="button">Selanjutnya</button>
                </div>

                <div id="third">
                    <div class="row align-items-center mb-1">
                        <div class="col-10">
                            <h6 class="title-decorative mb-1">Step 3</h6>
                            <h2 class="mb-0">Asal Sekolah</h2>
                            <!--<span class="lead">Informasi Pendidikan Terakhir Anda.</span>-->
                        </div>
                        <!--end of col-->
                        <div class="col-2">

                        </div>
                        <!--end of col-->
                    </div>
                    <!--end of row-->
                    <div id="form-step-2">
                        <div class="form-group">
                            <label class="control-label">Nama Sekolah *</label>
                            <input type="text" name="sekolah" class="form-control" placeholder="Nama SMK/SMA/PTS/PTN/DLL" <?php if (!empty($biodata['sekolah'])) echo 'value="' . htmlspecialchars($biodata['sekolah']) . '"'; ?> required>
                        </div>

                        <div class="form-group">
                            <select class="form-control" name="jurusan">
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
                    </div>

                    <div class="mt-3">
                        <button class="btn btn-secondary sw-btn-prev" type="button">Sebelumnya</button>
                        <button class="btn btn-success sw-btn-next" type="button">Selanjutnya</button>
                    </div>

                </div>

                <div id="fourth" class="step-3">
                    <div class="row align-items-center mb-1">
                        <div class="col-10">
                            <h6 class="title-decorative mb-1">Step 4</h6>
                            <h2 class="mb-0">Alamat</h2>
                            <!--<span class="lead">Informasi Alamat Rumah/Domisili</span>-->
                        </div>
                        <!--end of col-->
                        <div class="col-2">

                        </div>
                        <!--end of col-->
                    </div>
                    <!--end of row-->
                    <div id="form-step-3">
                        <div class="form-group">
                            <label>Alamat *</label>
                            <input type="text" name="alamat" class="form-control otom" id="alamat_siswa" placeholder="Alamat Lengkap Jalan" <?php if (!empty($biodata['alamat'])) echo 'value="' . htmlspecialchars($biodata['alamat']) . '"'; ?>>
                        </div>

                        <div class="form-row form-group">
                            <div class="col-sm-3">
                                <input type="text" name="rt" class="form-control otom" id="rt_siswa" placeholder="RT" maxlength="2" <?php if (!empty($biodata['rt'])) echo 'value="' . htmlspecialchars($biodata['rt']) . '"'; ?>>
                            </div>

                            <div class="col-sm-3">
                                <input type="text" name="rw" class="form-control otom" id="rw_siswa" placeholder="RW" maxlength="2" <?php if (!empty($biodata['rw'])) echo 'value="' . htmlspecialchars($biodata['rw']) . '"'; ?>>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="kelurahan" class="form-control otom" id="desa_siswa" placeholder="Kelurahan/Desa" <?php if (!empty($biodata['kelurahan'])) echo 'value="' . htmlspecialchars($biodata['kelurahan']) . '"'; ?>>
                            </div>

                        </div>

                        <div class="form-row form-group">
                            <div class="col-lg-6">
                                <input type="text" name="kecamatan" class="form-control otom" id="kecamatan_siswa" placeholder="Kecamatan" <?php if (!empty($biodata['kecamatan'])) echo 'value="' . htmlspecialchars($biodata['kecamatan']) . '"'; ?>>
                            </div>
                            <div class="col-lg-6">
                                <input type="number" name="kodepos" class="form-control otom" id="kodepos_siswa" placeholder="Kode Pos" <?php if (!empty($biodata['kodepos'])) echo 'value="' . htmlspecialchars($biodata['kodepos']) . '"'; ?>>
                            </div>
                        </div>

                        <div class="form-group">
                            <select name="kabupaten" class="form-control select2" id="kab_siswa" style="width: 100%" required>
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
                                <option value="">-- Pilih Kabupaten dahulu --</option>
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

                    </div>

                    <div class="mt-2">
                        <button class="btn btn-secondary sw-btn-prev" type="button">Sebelumnya</button>
                        <button class="btn btn-success sw-btn-next" type="button">Selanjutnya</button>
                    </div>
                </div>

                <div id="fifth" class="step-4">
                    <div class="row align-items-center mb-1">
                        <div class="col-10">
                            <h6 class="title-decorative mb-1">Step 5</h6>
                            <h2 class="mb-0">Orang Tua/Wali</h2>
                            <!--<span class="lead">Data Nama Orang Tua dan Alamat Orang Tua</span>-->
                        </div>
                        <!--end of col-->
                        <div class="col-2">

                        </div>
                        <!--end of col-->
                    </div>
                    <!--end of row-->
                    <div id="form-step-4">
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
                                    $pekerjaan1 = array('IBU RUMAH TANGGA', 'WIRASWASTA', 'WIRAUSAHA', 'PEDAGANG', 'BURUH', 'DIREKTUR', 'MANAGER', 'KARYAWAN SWASTA', 'PEGAWAI SWASTA', 'PNS', 'GUBERNUR', 'BUPATI', 'PEGAWAI BUMN', 'PEGAWAI BUMD', 'PENSIUNAN', 'GURU', 'DOSEN', 'TNI', 'POLRI', 'SATPAM', 'PEMADAM KEBAKARAN', 'DOKTER', 'PERAWAT', 'BIDAN', 'APOTEKER', 'NELAYAN', 'PETANI', 'PETERNAK', 'PENGRAJIN', 'TENAGA KERJA INDONESIA', 'PILOT', 'PRAMUGARA', 'MASINIS', 'PPKA KAI', 'KONDEKTUR', 'SOPIR', 'NAKHODA', 'PELAUT', 'KURIR', 'ULAMA', 'PASTOR', 'PENDETA', 'CHEF', 'SENIMAN', 'FOTOGRAFER', 'ARSITEK', 'PENGACARA', 'NOTARIS', 'WARTAWAN', 'KONSULTAN', 'POLITIKUS', 'PENULIS', 'PENERJEMAH', 'PEKERJA PERTAMBANGAN', 'PEKERJA KONSTRUKSI');
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
                                    $pekerjaan2 = array('WIRASWASTA', 'WIRAUSAHA', 'PEDAGANG', 'BURUH', 'DIREKTUR', 'MANAGER', 'KARYAWAN SWASTA', 'PEGAWAI SWASTA', 'PNS', 'GUBERNUR', 'BUPATI', 'PEGAWAI BUMN', 'PEGAWAI BUMD', 'PENSIUNAN', 'GURU', 'DOSEN', 'TNI', 'POLRI', 'SATPAM', 'PEMADAM KEBAKARAN', 'DOKTER', 'PERAWAT', 'BIDAN', 'APOTEKER', 'NELAYAN', 'PETANI', 'PETERNAK', 'PENGRAJIN', 'TENAGA KERJA INDONESIA', 'PILOT', 'PRAMUGARA', 'MASINIS', 'PPKA KAI', 'KONDEKTUR', 'SOPIR', 'NAKHODA', 'PELAUT', 'KURIR', 'ULAMA', 'PASTOR', 'PENDETA', 'CHEF', 'SENIMAN', 'FOTOGRAFER', 'ARSITEK', 'PENGACARA', 'NOTARIS', 'WARTAWAN', 'KONSULTAN', 'POLITIKUS', 'PENULIS', 'PENERJEMAH', 'PEKERJA PERTAMBANGAN', 'PEKERJA KONSTRUKSI');
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
                            <select name="kabupaten_ortu" class="form-control select2" id="kab_ortu" style="width: 100%" required>
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
                                <option value="">-- Pilih Kabupaten dahulu --</option>
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
                    </div>

                    <button class="btn btn-secondary sw-btn-prev" type="button">Sebelumnya</button>
                    <button id="submit-btn" type="submit" class="btn btn-success" <?php if (!empty($biodata)) {
                                                                                        if ($biodata['syarat2'] == 'Sudah') echo "disabled";
                                                                                    } ?>><i class="fa fa-check" aria-hidden="true"></i> Selesai &amp; Simpan</button>

                </div>
            </div>
            <!--end of col-->
        </form>

    </div>
</div>


<script type="text/javascript" src="<?php echo base_url('assets/js'); ?>/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js'); ?>/jquery.chained.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js'); ?>/select2.min.js"></script>
<script type="text/javascript" charset="utf-8">
    var $j = jQuery.noConflict();
    $j(document).ready(function() {
        //$j("#prop").chained("#kab_siswa");  
        //$j("#prop2").chained("#kab_ortu");       
        $j('.select2').select2({
            theme: 'bootstrap4',
        });
    });
</script>
<script>
    function hanyaAngka(evt) {
        if (!/^[0-9.]+$/.test(evt.value)) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    }
</script>

<script>
    var $jne3 = jQuery.noConflict();
    $jne3(document).ready(function() {

        $jne3('#kab_siswa').change(function(event) {
            event.preventDefault();
            var country_id = $jne3('#kab_siswa').val();
            var KdProp = $jne3('#prop').val();
            if (country_id != '') {

                $jne3.ajax({
                    type: 'post',
                    url: "<?php echo base_url(); ?>" + "main/getprop",
                    data: {
                        kab: country_id,
                        prop: KdProp
                    },
                    cache: false,
                    success: function(returndata) {
                        $jne3('#prop').html(returndata);
                        $jne3("#prop").attr('disabled', false);
                    }
                });

            }
        });

        $jne3('#kab_ortu').change(function(event) {
            event.preventDefault();
            var kab2 = $jne3('#kab_ortu').val();
            if (kab2 != '') {

                $jne3.ajax({
                    type: 'post',
                    url: "<?php echo base_url(); ?>" + "main/getprop2",
                    data: {
                        kab2: kab2
                    },
                    cache: false,
                    success: function(returndata) {
                        $jne3('#prop2').html(returndata);
                        $jne3("#prop2").attr('disabled', false);
                    }
                });

            }
        });

        $jne3('#status_reg').change(function(event) {
            event.preventDefault();
            var status_reg = $jne3('#status_reg').val();
            if (status_reg != '') {

                $jne3.ajax({
                    type: 'post',
                    url: "<?php echo base_url(); ?>" + "main/get_jenismhs",
                    data: {
                        status_reg: status_reg
                    },
                    cache: false,
                    beforeSend: function() {
                        $jne3('#pilihan1').attr('disabled', false);
                    },
                    success: function(returndata) {
                        $jne3('#jenis_mhs').html(returndata);
                        $jne3("#jenis_mhs").attr('disabled', false);
                    }
                });

            }
        });

        $jne3('#jenis_mhs').change(function(event) {
            event.preventDefault();
            var status_reg = $jne3('#status_reg').val();
            var jenis_mhs = $jne3('#jenis_mhs').val();
            if (jenis_mhs != '') {

                $jne3.ajax({
                    type: 'post',
                    url: "<?php echo base_url(); ?>" + "main/get_kelas",
                    data: {
                        status_reg: status_reg,
                        jenis_mhs: jenis_mhs
                    },
                    cache: false,
                    beforeSend: function() {
                        $jne3('#kelas').attr('disabled', true);
                    },
                    success: function(returndata) {
                        $jne3('#pilihan1').html(returndata);
                        $jne3("#pilihan1").attr('disabled', false);
                    }
                });

            }
        });


        $jne3('#pilihan1').click(function(event) {
            event.preventDefault();
            var status_reg = $jne3('#status_reg').val();
            var jenis_mhs = $jne3('#jenis_mhs').val();
            var pilihan1 = $jne3('#pilihan1').val();
            if (pilihan1 != '') {

                $jne3.ajax({
                    type: 'post',
                    url: "<?php echo base_url(); ?>" + "main/get_kelas",
                    data: {
                        status_reg: status_reg,
                        jenis_mhs: jenis_mhs,
                        pilihan1: pilihan1
                    },
                    cache: false,
                    success: function(returndata) {
                        $jne3('#pilihan2').html(returndata);
                        $jne3("#pilihan2").attr('disabled', false);
                        $jne3('#pilihan3').html(returndata);
                        $jne3("#pilihan3").attr('disabled', false);
                    }
                });

            }
        });

        $jne3('#pilihan2').click(function(event) {
            event.preventDefault();
            var status_reg = $jne3('#status_reg').val();
            var jenis_mhs = $jne3('#jenis_mhs').val();
            var pilihan1 = $jne3('#pilihan1').val();
            var pilihan2 = $jne3('#pilihan2').val();
            if (pilihan2 != '') {

                $jne3.ajax({
                    type: 'post',
                    url: "<?php echo base_url(); ?>" + "main/get_kelas",
                    data: {
                        status_reg: status_reg,
                        jenis_mhs: jenis_mhs,
                        pilihan1: pilihan1,
                        pilihan2: pilihan2
                    },
                    cache: false,
                    success: function(returndata) {
                        //$jne3('#pilihan2').html(returndata);
                        //$jne3("#pilihan2").attr('disabled',false);
                        $jne3('#pilihan3').html(returndata);
                        $jne3("#pilihan3").attr('disabled', false);
                    }
                });

            }
        });

        $jne3('#pilihan3').click(function(event) {
            event.preventDefault();
            var pilihan3 = $jne3('#pilihan3').val();
            var jenis_mhs = $jne3('#jenis_mhs').val();
            if (pilihan3 != '') {

                $jne3.ajax({
                    type: 'post',
                    url: "<?php echo base_url(); ?>" + "main/get_kelas_sore",
                    data: {
                        pilihan3: pilihan3,
                        jenis_mhs: jenis_mhs
                    },
                    cache: false,
                    success: function(returndata) {
                        $jne3('#kelas').html(returndata);
                        $jne3("#kelas").attr('disabled', false);
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
    jQuery(document).ready(function($) {
        $("#status_reg").on('change', function() {
            if (this.value == "KIP-Kuliah" || this.value == "KIP-Kuliah2") {
                $("#kipk-box").show();
            } else {
                $("#kipk-box").hide();
            }

        });

        var elemStatusreg = document.getElementById("status_reg");
        if (elemStatusreg != null && elemStatusreg.value == "KIP-Kuliah" || elemStatusreg != null && elemStatusreg.value == "KIP-Kuliah2") {
            $('#kipk-box').show();
        }
    });

    jQuery(document).ready(function($) {
        $("#jurusan").on('change', function() {
            if (this.value == "Lainnya") {
                $("#jurusan-box").show();
            } else {
                $("#jurusan-box").hide();
            }

        });

        var elemJur = document.getElementById("jurusan");
        var elemJurlain = document.getElementById("jurusanlain");
        if (elemJurlain != null && elemJur.value == '') {
            $('#jurusan-box').show();
        }
    });
</script>

<script>
    jQuery(document).ready(function($) {
        $('input#nem').keyup(function(event) {

            if (event.which >= 37 && event.which <= 40) return;

            $(this).val(function(index, value) {
                return value
                    .replace(/\D/g, "")
                    .replace(/\B(?=(\d{2})+(?!\d))/g, ".");
            });
        });

    });
</script>
<script type="text/javascript" src="<?php echo base_url('assets/js'); ?>/jquery.limitText.js"></script>
<script>
    var $jquery = jQuery.noConflict();
    $jquery(document).ready(function() {
        $jquery("#deskripsialamat_siswa").limitText({
            limit: 150,
            warningLimit: 10,
            counterClass: 'text-dark',
            warningClass: 'text-danger'
        });
    });
</script>
<!-- jQuery smartWizard facilitates steppable wizard content -->
<script type="text/javascript" src="<?php echo base_url('assets/js'); ?>/jquery.smartWizard.min.js"></script>
<script type="text/javascript">
    var $jquery = jQuery.noConflict();
    $jquery(document).ready(function() {

        $jquery(".wizard").smartWizard({
            selected: <?php echo $start; ?>,
            transitionEffect: "fade",
            //showStepURLhash: !1, 
            toolbarSettings: {
                toolbarPosition: "none"
            }
        });

        $jquery("#form").validate({
            //ignore: "",
            rules: {
                nama: "required",
                nik: {
                    required: true,
                    number: true,
                    minlength: 16
                },
                pilihan1: {
                    required: true
                },
                pilihan2: {
                    required: true
                },
                pilihan3: {
                    required: true
                },
                tempatlahir: {
                    required: true
                },
                tgllahir: {
                    required: true
                },
                blnlahir: {
                    required: true
                },
                thnlahir: {
                    required: true
                },
                jk: {
                    required: true
                },
                status_pernikahan: {
                    required: true
                },
                agama: {
                    required: true
                },
                nama_ortu: {
                    required: true
                },
                nama_ayah: {
                    required: true
                },
                sekolah: {
                    required: true
                },
                jurusan: {
                    required: true
                },
                nem: {
                    required: true
                },
                thn_lulus: {
                    required: true,
                    number: true,
                    minlength: 4
                },
                alamat: {
                    required: true
                },
                rt: {
                    required: true,
                    number: true,
                    minlength: 2
                },
                rw: {
                    required: true,
                    number: true,
                    minlength: 2
                },
                kelurahan: {
                    required: true
                },
                kecamatan: {
                    required: true
                },
                kabupaten: {
                    required: true
                },
                alamat_ortu: {
                    required: true
                },
                rt_ortu: {
                    required: true,
                    number: true,
                    minlength: 2
                },
                rw_ortu: {
                    required: true,
                    number: true,
                    minlength: 2
                },
                kelurahan_ortu: {
                    required: true
                },
                kecamatan_ortu: {
                    required: true
                },
                kabupaten_ortu: {
                    required: true
                },
                kodepos: {
                    required: true,
                    number: true
                },
                kodepos_ortu: {
                    required: true,
                    number: true
                },
                telepon: {
                    required: true,
                    number: true,
                    minlength: 6
                },
                telp_ortu: {
                    required: true,
                    number: true,
                    minlength: 6
                },
                telp_ayah: {
                    required: true,
                    number: true,
                    minlength: 6
                },
                pekerjaan_ortu: {
                    required: true
                },
                pekerjaan_ayah: {
                    required: true
                },
                status_reg: {
                    required: true
                },
                jenis_mhs: {
                    required: true
                },
                relasi: {
                    required: true
                },
                kelas: {
                    required: true
                },
                ukuran_jas: {
                    required: true
                },
                'info[]': {
                    required: true
                },
            },
            messages: {
                nama: {
                    required: '<span>Nama Mahasiswa wajib diisi</span>'
                },
                nik: {
                    required: '<span>NIK KTP wajib diisi</span>',
                    number: '<span>Wajib Berupa Angka</span>',
                    minlength: '<span>Min 16 Angka</span>',
                },
                pilihan1: {
                    required: '<span>Program Studi Wajib dipilih</span>'
                },
                pilihan2: {
                    required: '<span>Program Studi Wajib dipilih</span>'
                },
                pilihan3: {
                    required: '<span>Program Studi Wajib dipilih</span>'
                },
                tempatlahir: {
                    required: '<span>Tempat lahir wajib diisi</span>'
                },
                tgllahir: {
                    required: '<span>Tanggal lahir wajib diisi</span>'
                },
                blnlahir: {
                    required: '<span>Bulan lahir wajib diisi</span>'
                },
                thnlahir: {
                    required: '<span>Tahun lahir wajib diisi</span>'
                },
                jk: {
                    required: '<span>Jenis kelamin wajib dipilih</span>'
                },
                status_pernikahan: {
                    required: '<span>Status Pernikahan wajib dipilih</span>'
                },
                agama: {
                    required: '<span>Agama wajib dipilih</span>'
                },
                nama_ortu: {
                    required: '<span>Nama Ibu Kandung wajib diisi</span>'
                },
                nama_ayah: {
                    required: '<span>Nama Ayah wajib diisi</span>'
                },
                sekolah: {
                    required: '<span>Asal Sekolah wajib diisi</span>'
                },
                jurusan: {
                    required: '<span>Jurusan wajib dipilih</span>'
                },
                nem: {
                    required: '<span>Nilai UAS wajib diisi</span>',
                },
                thn_lulus: {
                    required: '<span>Tahun lulus wajib diisi</span>',
                    number: '<span>Tahun lulus wajib berupa angka</span>',
                    minlength: '<span>Tahun lulus min 4 angka</span>'
                },
                alamat: {
                    required: '<span>Jalan wajib diisi</span>',
                },
                rt: {
                    required: '<span>RT wajib diisi</span>',
                    number: '<span>RT wajib berupa angka</span>',
                    minlength: '<span>RT min 2 angka</span>',
                },
                rw: {
                    required: '<span>RW wajib diisi</span>',
                    number: '<span><RW wajib berupa angka</span>',
                    minlength: '<span>RW min 2 angka</span>',
                },
                kelurahan: {
                    required: '<span>Kelurahan/Desa wajib diisi</span>',
                },
                kecamatan: {
                    required: '<span>Kecamatan wajib diisi</span>',
                },
                kabupaten: {
                    required: '<span>Kabupaten wajib dipilih</span>',
                },
                propinsi: {
                    required: '<span>Provinsi wajib dipilih</span>',
                },
                kodepos: {
                    required: '<span>Kodepos wajib diisi</span>',
                    number: '<span>Kodepos wajib berupa angka</span>',
                },
                telepon: {
                    required: '<span>Telepon wajib diisi</span>',
                    number: '<span>Telepon wajib berupa angka</span>',
                    minlength: '<span>Telepon min 6 angka</span>',
                },
                alamat_ortu: {
                    required: '<span>Alamat Orang Tua wajib diisi</span>',
                },
                rt_ortu: {
                    required: '<span>RT Orang Tua wajib diisi</span>',
                    number: '<span>RT wajib berupa angka</span>',
                    minlength: '<span>RT min 2 angka</span>',
                },
                rw_ortu: {
                    required: '<span>RW Orang Tua wajib diisi</span>',
                    number: '<span><RW wajib berupa angka</span>',
                    minlength: '<span>RW min 2 angka</span>',
                },
                kelurahan_ortu: {
                    required: '<span>Kelurahan/Desa Orang Tua wajib diisi</span>',
                },
                kecamatan_ortu: {
                    required: '<span>Kecamatan Orang Tua wajib diisi</span>',
                },
                kodepos_ortu: {
                    required: '<span>Kodepos Orang Tua wajib diisi</span>',
                    number: '<span>Kodepos wajib berupa angka</span>',
                },
                telp_ortu: {
                    required: '<span>Nomor Telp/HP Ibu wajib diisi</span>',
                    number: '<span>Telepon wajib berupa angka</span>',
                    minlength: '<span>Telepon min 6 angka</span>',
                },
                telp_ayah: {
                    required: '<span>Nomor Telp/HP Ayah wajib diisi</span>',
                    number: '<span>Telepon wajib berupa angka</span>',
                    minlength: '<span>Telepon min 6 angka</span>',
                },
                pekerjaan_ortu: {
                    required: '<span>Pekerjaan Ibu wajib dipilih</span>',
                },
                pekerjaan_ayah: {
                    required: '<span>Pekerjaan Ayah wajib dipilih</span>',
                },
                kabupaten_ortu: {
                    required: '<span>Kabupaten Orang Tua wajib dipilih</span>',
                },
                propinsi_ortu: {
                    required: '<span>Provinsi Orang Tua wajib dipilih</span>',
                },
                status_reg: {
                    required: '<span>Jenis Pendaftaran wajib dipilih</span>'
                },
                jenis_mhs: {
                    required: '<span>Jenis Mahasiswa wajib dipilih</span>'
                },
                relasi: {
                    required: '<span>Relasi wajib dipilih</span>'
                },
                kelas: {
                    required: '<span>Kelas wajib dipilih</span>'
                },
                ukuran_jas: {
                    required: '<span>Ukuran Jas Almamater harus dipilih</span>'
                },
                'info[]': {
                    required: '<span>Informasi Wajib dipilih</span>'
                }

            },
            errorPlacement: function(error, element) {
                if (element.is(":radio")) {
                    error.appendTo(element.parents('#jk'));
                } else if (element.is(":checkbox")) {
                    error.appendTo(element.parents('#informasi'));
                } else {
                    error.insertAfter(element);
                }
            }
        });

        $jquery('.wizard').on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
            var elmForm = $jquery("#form-step-" + stepNumber);
            if (stepDirection === 'forward' && elmForm) {
                if ($jquery('#form').valid()) {
                    return true
                } else {
                    return false
                }
            }
            return true;
        })


    });
</script>