<div class="container-fluid">
      <div class="row-fluid">
        <div class="span9">
          <div class="row-fluid">
            <div class="span12">
               
                <p>
                    <a href="<?=site_url('admin/agama/add')?>" class="btn btn-outline-primary"><i class="fas fa-plus fa-lg"></i> Tambah</a>
                </p>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th></th>
                        <th>ID User</th>
                        <th></th>
                        <th></th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $key => $row) { ?>
                    <tr>
                        <td><?=$row->id?></td>
                        <td><?=$row->id_user?></td>
                        <td><?=$row->waktu_mulai?></td>
                        <td><?=$row->waktu_selesai?></td>
                        <td width="85px">
                            <div class="btn-group" role="group" aria-label="button-agama">
                            <div>
                            <a href="<?=site_url('admin/agama/edit/'.$row->id)?>" class="btn btn-primary btn-sm" title="edit"><i class="far fa-edit fa-md"></i> Ubah</a></div>
                            <div><a href="<?=site_url('main_user/deleteattempt/'.$row->id)?>" class="btn btn-danger btn-sm" title="delete" onclick="return confirm('Hapus data?');"><i class="far fa-trash-alt fa-md"></i> Hapus</a></div>
                        </td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div><!--/span-->
          </div><!--/row-->
        </div><!--/span-->
      </div><!--/row-->

      <hr>

    </div><!--/.fluid-container-->
