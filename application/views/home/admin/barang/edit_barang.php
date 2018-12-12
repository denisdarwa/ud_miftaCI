        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Data Barang</h1>
                    </div>
                    <table style="margin:20px auto;" border="1">
  <tr>
    <th>No</th>
    <th>Nama Brang</th>
    <th>ID Distributor</th>
    <th>Stok</th>
    <th>Harga Modal</th>
    <th>Harga Eceran</th>
    <th>Harga Grosir</th>
  </tr>
  <?php
  $no = 1;
  foreach($user as $u){
  ?>
  <tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $u->nama_barang; ?></td>
    <td><?php echo $u->id_distributor; ?></td>
    <td><?php echo $u->stok; ?></td>
    <td><?php echo $u->hg_modal; ?></td>
    <td><?php echo $u->hg_ecer;?></td>
    <td><?php echo $u->hg_grosir;?></td>
    <td>
      <?php echo anchor('admin/edit_barang/'.$u->id_barang,'Edit'); ?>
                        <?php echo anchor('admin/hapus/'.$u->id_barang,'Hapus'); ?>
</td>
  </tr>
  <?php } ?>
</table>
                </div>
            </div>

    <!-- Right Panel -->
