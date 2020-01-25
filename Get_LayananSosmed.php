<?php
//Get Service(layanan) Sosmed Nespedia By Adrian57



//api data
$api_key = "api_key_Lo";
//end api data

//postdata
$postdata = array('api_key' => $api_key,
                  'action'  => 'layanan'
                  );
//end postdata


//Curl
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://nespedia-panel.com/api/sosial-media");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$chresult = curl_exec($ch);
curl_close($ch);
$json_result = json_decode($chresult, true);
//end curl

$indeks=0;
$i = 1;
// get data service

while($indeks < count($json_result['data'])){
   
$sid=$json_result['data'][$indeks]['sid'];
$kategori =$json_result['data'][$indeks]['kategori'];
$service = $json_result['data'][$indeks]['layanan'];
$min = $json_result['data'][$indeks]['min'];
$max = $json_result['data'][$indeks]['max'];
$price = $json_result['data'][$indeks]['harga'];
$desc = $json_result['data'][$indeks]['catatan'];
$indeks++;
$i++;
// end get data service

// setting price
$rate = $price;
$rate_asli = $rate + 800; // Masukan Penambahan Harga Sesukamu
// setting price

?>
