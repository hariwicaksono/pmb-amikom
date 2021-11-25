<?php if (!empty($bukti)) { ?>
    <div class="row">
        <div class="col-md-4">
            <!-- data ditampilkan dalam bentuk gambar -->
            <img src='<?= base_url() ?>dokumen/bukti_bayar/<?= $bukti['nama_dokumen'] ?>' width="100" />
        </div>
        <div class="col-md-8">
            <!-- data ditampilkan dalam bentuk text  -->
            <p><?= $bukti['nama_dokumen'] ?></p>
            <a href="<?= base_url() ?>dokumen/bukti_bayar/<?= $bukti['nama_dokumen'] ?>" target="pdf-frame" class="btn btn-success"><i class="fa fa-print"></i> Preview</a>
            <a href="<?= base_url() ?>main_user/post_dokumen?act=hapus&id=<?= $bukti['id_dokumen'] ?>" class="btn btn-danger" onclick="return confirm('Hapus dokumen ini?')"><i class="fa fa-times" aria-hidden="true"></i> Hapus</a>
        </div>
    </div>
<?php } ?>