


<?php
	session_start();

	require 'config.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "select*from user where username = '$username' and password ='$password' ";
	$data = mysqli_query($koneksi, $query);
	$cek = mysqli_num_rows($data);

	if ($cek > 0) {

		$_SESSION['username']=$username;
		$_SESSION['status']= "login" ;

		header("location:utama.php" );
	}
	else
	{
		header("location:index.php?pesan=gagal");
	}
?>