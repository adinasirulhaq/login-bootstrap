<?php
$host ="localhost";
$user ="root";
$pass ="";
$db ="bs";

$koneksi = new mysqli ($host, $user, $pass, $db);

if (mysqli_connect_error()) {

	echo "Koneksi Gagal";
}

?>