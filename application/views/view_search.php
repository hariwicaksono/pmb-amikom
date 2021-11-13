<link href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" type="text/javascript"></script> 
<script type="text/javascript">
    var $jQuery=jQuery.noConflict();
    $jQuery(document).ready( function () {
        $jQuery('#myTable').DataTable();
    });
</script>
<div class="container-fluid">
<div class="card shadow mt-2 mb-2">
<div class="card-body">
<h2>Hasil Pencarian</h2>
<table id="myTable" class="table table-striped table-borderless">
                <thead>
                    <tr>
                        <th>Nodaf</th>
                        <th>Nama</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($data as $row):?>
                    <tr>
                        <td><?php echo $row['nodaf'];?></td>
                        <td><?php echo $row['nama'];?></td>
                        <td><?php echo $row['syarat2']=='Sudah'?'Diterima':'Belum Diterima';?></td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
</div>
</div>
</div>