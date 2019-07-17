<?php
if($_SERVER['REQUEST_METHOD']=='POST') {

   $response = array();
   //mendapatkan data
   $user_id = $_POST['user_id'];
   $jenis_tanaman = $_POST['jenis_tanaman'];
   $warna_daun = 'green';
   $bwd_range = '0';
   $solusi = $_POST['solusi'];
   $pic_compare = 'daun/default.jpg';
   $kondisi = date('Y-m-d H:i:s');
   $penulis = $_POST['penulis'];
   date_default_timezone_set('Asia/Jakarta');  
   $tanggal_upload =  date('Y-m-d H:i:s');
   

   require_once('koneksi.php');

        
         $sql = "INSERT INTO daun (id, user_id,jenis_tanaman,warna_daun,bwd_range,solusi,pic_compare,kondisi,penulis,tanggal_upload) VALUES(0,'$user_id', '$jenis_tanaman', '$warna_daun', '$bwd_range', '$solusi', '$pic_compare', '$kondisi', '$penulis', '$tanggal_upload')";
         if(mysqli_query($con,$sql)) {
           $response["value"] = 1;
           $response["message"] = "Sukses, cek data daun anda di Menu beranda";
           echo json_encode($response);
         } else {
           $response["value"] = 0;
           $response["message"] = "oops! Coba lagi!";
           echo json_encode($response);
         }

   // tutup database
   mysqli_close($con);
} else {
  $response["value"] = 0;
  $response["message"] = "oops! Coba lagi!";
  echo json_encode($response);
}