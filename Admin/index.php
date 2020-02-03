<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<title>HALAMAN ADMIN</title>
</head>
<body>
	<br>
	<br>
	<br>
	<div class="container" align="center"  >
		<div class="row" align="left" >
		<a href="tambah.php">TAMBAH DATA</a>	
		</div>
		
		<div class="row" >

			<div class="col-md-8" >
				<table class="table table-bordered" border="1" >
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>NIM</th>
				<th>Alamat</th>
				<th>Opsi</th>
			</tr>
				<?php
				include '../config.php';
				$no = 1;
				$data = mysqli_query($koneksi, "select*from mahasiswa");
				while ($d = mysqli_fetch_array($data)) {
					?>
						
			<tr>
				<th><?php echo $no++; ?></th>
				<th><?php echo $d['nama']; ?></th>
				<th><?php echo $d['nim']; ?></th>
				<th><?php echo $d['alamat']; ?></th>
				<th>
					<a href="edit.php?id= <?php echo $d['id']; ?> ">EDIT</a>
					<a href="hapus.php?id= <?php echo $d['id']; ?> ">HAPUS</a>
				</th>
			</tr>
			<?php
				}
				?>
		</table>

</body>
</html>