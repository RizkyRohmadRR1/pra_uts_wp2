<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Crud Dengan Codeignater</title>
</head>
<body>
	<center>
		<h1>CRUD</h1>
		<h3>Form Edit Data</h3>
	</center>
	<?php foreach ($user as $u) { ?>
	<center>
		<form action="<?php echo base_url(). "crud/update" ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>NIM</td>
				<td>=</td>
				<td><input type="text" name="nim" value="<?php echo $u->nim ?>"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>=</td>
				<td><input type="text" name="nama" value="<?php echo $u->nama ?>"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>=</td>
				<td><input type="text" name="kelas" value="<?php echo $u->kelas ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>=</td>
				<td><input type="text" name="alamat" value="<?php echo $u->alamat ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
		</form>
	</center>
	<?php } ?>
</body>
</html>