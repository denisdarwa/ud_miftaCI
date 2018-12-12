        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Data Barang</h1>
                    </div>
                    <table style="margin:20px auto;" border="1">
  <tr>
    <th>No</th>
    <th>ID Distributor</th>
    <th>Nama Distributor</th>
    <th>Perusahaan</th>
  </tr>
  <?php
  $no = 1;
  foreach($user as $u){
  ?>
  <tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $u->id_distributor; ?></td>
    <td><?php echo $u->nama_distributor; ?></td>
    <td><?php echo $u->perusahaan; ?></td>
    <td>
      <?php echo anchor('admin/edit_distributor/'.$u->id,'Edit'); ?>
      <?php echo anchor('admin/hapus_distributor/'.$u->id,'Hapus'); ?>
</td>
  </tr>
  <?php } ?>
</table>
                </div>
            </div>

    <!-- Right Panel -->
