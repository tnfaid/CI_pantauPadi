<?php

//database constants
 define('DB_HOST', 'localhost');
 define('DB_USER', 'root');
 define('DB_PASS', '');
 define('DB_NAME', 'ci_pantaupadi');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
 
 //Checking if any error occured while connecting
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 die();
 }
 
 //creating a query
 $stmt = $conn->prepare("SELECT * FROM daun;");
 
 //executing the query 
 $stmt->execute();
 
 //binding results to the query 
 $stmt->bind_result($id, $id_user, $jenis_tanaman, $warna_daun, $bwd_range, $solusi, $pic_compare, $kondisi, $penulis, $tanggal_upload);
 
 $daun = array(); 
 
 //traversing through all the result 
 while($stmt->fetch()){
 $temp = array();
 $temp['id'] = $id; 
 $temp['id_user'] = $id_user; 
 $temp['jenis_tanaman'] = $jenis_tanaman; 
 $temp['warna_daun'] = $warna_daun; 
 $temp['bwd_range'] = $bwd_range; 
 $temp['solusi'] = $solusi;
 $temp['pic_compare'] = $pic_compare; 
 $temp['kondisi'] = $kondisi; 
 $temp['penulis'] = $penulis; 
 $temp['tanggal_upload'] = $tanggal_upload; 
 array_push($daun, $temp);
 }
 
 //displaying the result in json format 
 echo json_encode($daun);