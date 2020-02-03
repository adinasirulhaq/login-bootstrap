<?php
	session_start();

	include '../config.php';
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$alamat = $_POST['alamat'];

	$sql = "insert into mahasiswa values ('', '$nama', '$nim', '$alamat') ";
	$data = mysqli_query($koneksi, $sql);
	header("location:index.php");


?>