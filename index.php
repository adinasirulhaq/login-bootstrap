<!DOCTYPE html>
<html>
<head>
	<title>BOOTSTRAP</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<?php
		session_start();
		if (isset($_GET['pesan'])){
			if ($_GET['pesan']=="gagal"){
				echo "Gagal Login, Periksa Username dan Password Anda";
			}
			elseif ($_GET['pesan']=="belum_login") {
				echo "Anda Harus Login dahulu untuk masuk";
			}
			elseif ($_GET['pesan']=="logout") {
				# code...
				echo "Anda Berhasil Keluar..,";
			}
		}
	?>
	<br>
	<br>
	<br>
	<div class="container">

		<center> <h2>SILAHKAN LOGIN</h2></center>
		<form  action="prs_login.php" method="post">
			<div class="form-group">
			<div class="col-md-4 col-md-offset-4 form-login ">
			<label for="username" >Username :</label>
			<input type="text" name="username" id="username" class="form-control">
			</div>
			</div>

			<div class="form-group">
			<div class="col-md-4 col-md-offset-4 form-login">
			<label>Password :</label>
			<input align="center" type="password" name="password" class="form-control">
			</div>
			</div>
			<div class="col-md-4 col-md-offset-4 form-login ">
				<br>
			<button type="submit" value="login" class="btn btn-danger" >Submit</button>
			</div>
		</form>
	</div>



</body>
</html>