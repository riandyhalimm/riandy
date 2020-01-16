<?php
$host = "localhost";
$user = "id11209958_sigmedan";
$pass = "sig123";
$name = "id11209958_sig";

//$koneksi = mysqli_connect($host, $user, $pass, $name);
$koneksi = mysqli_connect($host, $user, $pass, $name) or die("Koneksi ke database gagal!");
mysqli_select_db($koneksi, $name) or die("Tidak ada database yang dipilih!");
?>