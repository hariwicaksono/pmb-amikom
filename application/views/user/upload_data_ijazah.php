<?php if (!empty($ijazah)) { ?>
    <div class="row">
        <div class="col-md-4">
            <!-- data ditampilkan dalam bentuk gambar -->
            <img src='<?= base_url() ?>dokumen/ijazah/<?= $ijazah['nama_dokumen'] ?>' width="100" />
        </div>
        <div class="col-md-8">
            <!-- data ditampilkan dalam bentuk text  -->
            <p><?= $ijazah['nama_dokumen'] ?></p>
            <a href="<?= base_url() ?>dokumen/ijazah/<?= $ijazah['nama_dokumen'] ?>" target="pdf-frame" class="btn btn-success"><i class="fa fa-print"></i> Preview</a>
            <a href="<?= base_url() ?>main_user/post_dokumen?act=hapus&id=<?= $ijazah['id_dokumen'] ?>" class="btn btn-danger" onclick="return confirm('Hapus dokumen ini?')"><i class="fa fa-times" aria-hidden="true"></i> Hapus</a>
        </div>
    </div>
<?php } ?>