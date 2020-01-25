<?php
require("config.php"); //hubungkan kepada file config
 
Script callback Pulsa By adrian57

$ip_nesped = "103.126.226.11"; //Ip server nespedia
 
if( $_SERVER['REMOTE_ADDR'] == $ip_nesped ){
   
    $data_masuk = $_POST['content'];
    $json = json_decode($data_masuk,TRUE);
    file_put_contents('callback_adrian.txt', $_POST['content']); // menyimpan dalam file txt
 
    $oid        = $json['oid'];
    $service    = $json['layanan'];
    $price      = $json['harga'];
    $status     = $json['status'];
    $date       = $json['date'];
    $catatan    = $json['keterangan'];
   
    $sql             = "UPDATE pembelian_pulsa SET status = '$status' , keterangan = '$catatan' WHERE provider_oid = '$oid' AND provider = 'NES-PULSA'";// Memyimpan kepada database (edit sesuaikan)
   
    $ok   = mysqli_query($conn,$sql);
   
    if ( $ok == TRUE){
        echo json_encode([
            "status"    => "ok"
            ]);
           
    }else{
        echo json_encode([
            "status"    => "fail"
            ]);
    }
}
