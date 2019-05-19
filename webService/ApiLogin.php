<?php
include 'koneksi.php';

class usr{}

$email = $_POST["email"];
$password = $_POST["password"];


if ((empty($email)) || (empty($password))) {
    $response = new usr();
    $response->success = 0;
    $response->message = "Kolom tidak boleh kosong";
    die(json_encode($response));
}

$query = mysql_query("SELECT * FROM user WHERE email='$email' AND password='$password'");

$row = mysql_fetch_array($query);

if (!empty($row)){
    $response = new usr();
    $response->success = 1;
    $response->message = "Selamat datang ".$row['username'];
    $response->id = $row['id'];
    $response->username = $row['username'];
    die(json_encode($response));

} else {
    $response = new usr();
    $response->success = 0;
    $response->message = "Username atau password salah";
    die(json_encode($response));
}

mysql_close();



?>