        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Data Barang</h1>
                    </div>
                    <table style="margin:20px auto;" border="1">
  <tr>
    <th>No</th>
    <th>Nama Karyawan</th>
    <th>Alamat</th>
  </tr>
  <?php
  $no = 1;
  foreach($user as $u){
  ?>
  <tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $u->nama_karyawan; ?></td>
    <td><?php echo $u->alamat; ?></td>
    <td>
      <?php echo anchor('admin/edit_karyawan/'.$u->id,'Edit'); ?>
      <?php echo anchor('admin/hapus_karyawan/'.$u->id,'Hapus'); ?>
</td>
  </tr>
  <?php } ?>
</table>
                </div>
            </div>

    <!-- Right Panel -->
