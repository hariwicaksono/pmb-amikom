<?php if (!empty($ijazah)) { ?>
    <div class="row">
        <div class="col-md-4">
            <!-- data ditampilkan dalam bentuk gambar -->
            <?php
            $file = $ijazah['nama_dokumen'];
            $pdfFormat = array("pdf", "PDF");
            $imgFormats = array("jpg", "JPG", "jpeg", "JPEG", "png", "PNG", "gif", "GIF", "tiff", "TIFF", "svg", "SVG");
            if (isset($file) && in_array(pathinfo($file, PATHINFO_EXTENSION), $pdfFormat)) { ?>
                <i class="fa fa-file-pdf-o fa-5x text-danger" aria-hidden="true"></i>
               <small>*Dokumen adalah PDF. Silakan klik preview untuk melihatnya</small>
            <?php } elseif (isset($file) && in_array(pathinfo($file, PATHINFO_EXTENSION), $imgFormats)) { ?>
                <img src='<?= base_url() ?>dokumen/ijazah/<?= $ijazah['nama_dokumen'] ?>' width="100" />
            <?php } else { ?>
            <?php } ?>
        </div>
        <div class="col-md-8">
            <!-- data ditampilkan dalam bentuk text  -->
            <p><?= $ijazah['nama_dokumen'] ?></p>
            <a href="<?= base_url() ?>dokumen/ijazah/<?= $ijazah['nama_dokumen'] ?>" target="pdf-frame" class="btn btn-success"><i class="fa fa-print"></i> Preview</a>
            <a href="<?= base_url() ?>main_user/post_dokumen?act=hapus&id=<?= $ijazah['id_dokumen'] ?>" class="btn btn-danger" onclick="return confirm('Hapus dokumen ini?')"><i class="fa fa-times" aria-hidden="true"></i> Hapus</a>
        </div>
    </div>
<?php } ?>