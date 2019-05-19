<?php
include 'koneksi.php';

class usr{}

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$password = $_POST["password"];
$country = $_POST["country"];
$confirm_password = $_POST["confirm_password"];

if ((empty($first_name))) {
    $response = new usr();
    $response->success = 0;
    $response->message = "Kolom first name tidak boleh kosong";
    die(json_encode($response));
}else if ((empty($last_name))) {
    $response = new usr();
    $response->success = 0;
    $response->message = "Kolom last name tidak boleh kosong";
    die(json_encode($response));
}else if ((empty($email))) {
    $response = new usr();
    $response->success = 0;
    $response->message = "Kolom email tidak boleh kosong";
    die(json_encode($response));
}else if ((empty($mobile))) {
    $response = new usr();
    $response->success = 0;
    $response->message = "Kolom telepon tidak boleh kosong";
    die(json_encode($response));
} else if ((empty($password))) {
    $response = new usr();
    $response->success = 0;
    $response->message = "Kolom password tidak boleh kosong";
    die(json_encode($response));
} else if ((empty($confirm_password)) || $password != $confirm_password) {
    $response = new usr();
    $response->success = 0;
    $response->message = "Konfirmasi password tidak sama";
    die(json_encode($response));
//}else if ((empty($country))) {
//    $response = new usr();
//    $response->success = 0;
//    $response->message = "Kolom country tidak boleh kosong";
//    die(json_encode($response));
} else {
    if (!empty($first_name) && $password == $confirm_password){
        $num_rows = mysql_num_rows(mysql_query("SELECT * FROM user WHERE first_name='".$first_name."'"));

        if ($num_rows == 0){
            $query = mysql_query("INSERT INTO user (id,first_name, last_name, mobile, country, email, password) VALUES(0,','".$first_name."','".$last_name."','".$mobile."','".$country."','".$email."','".$password."'')");


            if ($query){
                $response = new usr();
                $response->success = 1;
                $response->message = "Register berhasil, silahkan login.";
                die(json_encode($response));

            } else {
                $response = new usr();
                $response->success = 0;
                $response->message = "Username sudah ada";
                die(json_encode($response));
            }
        } else {
            $response = new usr();
            $response->success = 0;
            $response->message = "Username sudah ada";
            die(json_encode($response));
        }
    }
}

mysql_close();

?>