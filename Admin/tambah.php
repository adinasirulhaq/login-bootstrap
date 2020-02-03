<?php
	

?>
<!DOCTYPE html>
<html>
<head>
	<title>HALAMAN TAMBAH</title>
</head>
<body>
	<?php
	include '../config.php';

	?>
	<br>
	<br>
	<form action="prs_tambah.php " method="post">
		<table align="center">
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td><input type="number" name="nim"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type="text" name="alamat"></td>
		</tr>
		<tr>
			<td></td><td><input type="submit" value="SIMPAN" ></td>
			</tr>
	</table>
	</form>
	

</body>
</html>