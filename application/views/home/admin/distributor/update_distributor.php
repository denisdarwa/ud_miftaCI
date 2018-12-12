<!DOCTYPE html>
<html>
<body>
	<center>
		<h3>Edit Data Distributor</h3>
	</center>
	<?php foreach($user as $u){ ?>
	<form action="<?php echo base_url().'admin/update_distributor'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>ID Distributor</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" name="id_distributor" value="<?php echo $u->id_distributor ?>">
				</td>
			</tr>
			<tr>
				<td>Nama Distributor</td>
				<td><input type="" name="nama_distributor" value="<?php echo $u->nama_distributor ?>"></td>
			</tr>
			<tr>
				<td>Perusahaan</td>
				<td><input type="" name="perusahaan" value="<?php echo $u->perusahaan ?>"></td>
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
