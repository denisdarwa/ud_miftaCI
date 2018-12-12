<div class="container-fluid text-center">
		<h3>Edit Data Barang</h3>
	<?php foreach($user as $u){ ?>
	<form action="<?php echo base_url().'admin/update'; ?>" method="post">
		<table style="margin:20px auto;" class="table">
			<tr>
				<td>Nama Barang</td>
				<td>
					<input type="hidden" name="id_barang" class="form-control" value="<?php echo $u->id_barang ?>">
					<input type="text" name="nama_barang" class="form-control" value="<?php echo $u->nama_barang ?>">
				</td>
			</tr>
			<tr>
				<td>ID Distributor</td>
				<td><input type="text" name="id_distributor" class="form-control" value="<?php echo $u->id ?>"></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td><input type="text" name="stok" class="form-control" value="<?php echo $u->stok ?>"></td>
			</tr>
			<tr>
				<td>Modal</td>
				<td><input type="text" name="hg_modal" class="form-control" value="<?php echo $u->hg_modal ?>"></td>
			</tr>
      		<tr>
				<td>Harga Eceran</td>
				<td><input type="text" name="hg_ecer" class="form-control" value="<?php echo $u->hg_ecer ?>"></td>
			</tr>
			<tr>
				<td>Harga Grosir</td>
				<td><input type="text" name="hg_grosir" class="form-control" value="<?php echo $u->hg_grosir ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-success" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<?php } ?>
</div>