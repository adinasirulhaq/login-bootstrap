<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<title>HALAMAN UTAMA</title>
</head>
<body>
	<?php
	session_start();

		if ($_SESSION['status']!="login")
		{
			header("location:index.php?pesan=belum_login ");
		}
	?>
	<br>
	<br>
	<div class="container" align="center"     >
		<h2>SELAMAT DATANG DI HALAMAN ADMIN</h2>
		<div  class="row" align="left">
			<b><a href="logout.php">KELUAR</a></b>
		</div>
		<div style="font-family: times new roman " class="row" align="left">
			<b><a href="admin/index.php">MENU ADMIN</a></b>
		</div>

		
	</div>
</body>
</html>