$api_key = "api_key_Lo";
$postdata = "key=$api_key&action=service";
 
//SCRIPT AUTO OPER(SERVICE) NESPEDIA BY ADRIAN57
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://nespedia-panel.com/api/sosial-media/service");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$chresult = curl_exec($ch);
curl_close($ch);
$json_result = json_decode($chresult, true);
$indeks=0;
$i = 1;
// get data service
while($indeks < count($json_result['data'])){
   
$category=$json_result['data'][$indeks]['category'];
$id =$json_result['data'][$indeks]['sid'];
$service = $json_result['data'][$indeks]['service'];
$min_order =$json_result['data'][$indeks]['min'];
$max_order = $json_result['data'][$indeks]['max'];
$price = $json_result['data'][$indeks]['price'];
$note = $json_result['data'][$indeks]['note'];
$indeks++;
$i++;
// end get data service
// setting price
$rate = $price;
$rate_asli = $rate + 800; // Masukan Penambahan Harga Sesukamu
// setting price
