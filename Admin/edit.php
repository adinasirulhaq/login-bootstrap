<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>EDIT DATA</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
	<br>
	<br>
	<br>
	<br>
	<div class="container" >
		<div class="row">
			<div class="col-md-8">
				
					<?php
					include '../config.php';
					$id = $_GET['id'];
					$data = mysqli_query($koneksi, "select*from mahasiswa where id ='$id' ");
					while ($d = mysqli_fetch_array($data)  ) {
						?>
					<form method="post" action="update.php" >
						<table border="1" align="center">
							
							<tr>
							<td>Nama</td>
							<td><input type="hidden" name="id" value="<?php echo $d['id']; ?>" >
								<input type="text" name="nama" value="<?php echo $d['nama']; ?>" >
							</td>
							</tr>
							<tr>
							</tr>
							<tr>
							<td>NIM</td>
							<td><input type="number" name="nim" value="<?php echo $d['nim']; ?>"></td>
							</tr>
							<td>Alamat</td>
							<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?> " ></td>
							</tr>
							<tr>
								<td></td><td><input type="submit" value="SIMPAN  "></td>
							</tr>
						</table>
					</form>
						<?php
					}

					?>
				
			</div>
		</div>

	</div>

</body>
</html>