<!DOCTYPE html>
<html>
<body>
	<center>
		<h3>Edit Data Karyawan</h3>
	</center>
	<?php foreach($user as $u){ ?>
	<form action="<?php echo base_url().'admin/update_karyawan'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama Karyawan</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" name="nama_karyawan" value="<?php echo $u->nama_karyawan ?>">
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="" name="alamat" value="<?php echo $u->alamat ?>"></td>
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
