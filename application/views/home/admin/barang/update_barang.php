<!DOCTYPE html>
<html>
<body>
	<center>
		<h3>Edit Data Barang</h3>
	</center>
	<?php foreach($user as $u){ ?>
	<form action="<?php echo base_url().'admin/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama Barang</td>
				<td>
					<input type="hidden" name="id_barang" value="<?php echo $u->id_barang ?>">
					<input type="text" name="nama_barang" value="<?php echo $u->nama_barang ?>">
				</td>
			</tr>
			<tr>
				<td>ID Distributor</td>
				<td><input type="" name="id_distributor" value="<?php echo $u->id_distributor ?>"></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td><input type="" name="stok" value="<?php echo $u->stok ?>"></td>
			</tr>
			<tr>
				<td>Modal</td>
				<td><input type="" name="hg_modal" value="<?php echo $u->hg_modal ?>"></td>
			</tr>
      		<tr>
				<td>Harga Eceran</td>
				<td><input type="" name="hg_ecer" value="<?php echo $u->hg_ecer ?>"></td>
			</tr>
			<tr>
				<td>Harga Grosir</td>
				<td><input type="" name="hg_grosir" value="<?php echo $u->hg_grosir ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<?php } ?>
</body>
</html>
