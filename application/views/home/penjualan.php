<table>
  <tr>
    <th>No Faktur</th>
    <th>Id Barang</th>
    <th>Nama Barang</th>
    <th>Jumlah Jual</th>
    <th>Jual Barang</th>
  </tr>
  <?php
  $no = 1;
  foreach($user as $u){
  ?>
  <tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $u->no_faktur; ?></td>
    <td><?php echo $u->id_barang; ?></td>
    <td><?php echo $u->nama_barang;?></td>
    <td><?php echo $u->jml_barang;?></td>
    <td><?php echo $u->jual_barang;?></td>
  </tr>
  <?php } ?>
</table>