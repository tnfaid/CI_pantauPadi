<?php
/* ===== pantaupadi.000webhostapp.com ===== */
//$server		= "https://pantaupadi.000webhostapp.com"; //sesuaikan dengan nama server
//$user		= "id9578241_padi"; //sesuaikan username
//$password	= "padi123"; //sesuaikan password
//$database	= "id9578241_padi"; //sesuaikan target databese

$server		= "localhost"; //sesuaikan dengan nama server
$user		= "root"; //sesuaikan username
$password	= ""; //sesuaikan password
$database	= "ci_pantaupadi"; //sesuaikan target databese

$connect = mysql_connect($server, $user, $password, "Konekasi berhasil") or die ("Koneksi gagal!");
mysql_select_db($database) or die ("Database belum siap!");

/* ====== UNTUK MENGGUNAKAN MYSQLI DI UNREMARK YANG INI, YANG MYSQL_CONNECT DI REMARK ======= */
// $con = mysqli_connect($server, $user, $password, $database);
// if (mysqli_connect_errno()) {
// 	echo "Gagal terhubung MySQL: " . mysqli_connect_error();
// }

?>