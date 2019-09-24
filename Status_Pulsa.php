 $apikey = "api_Key_Lo"; //Api Key
    $id =  "123"; //id order

$api_postdata = "api_key=$apikey&action=status&id=$id";

//SCRIPT AUTO OPER(STATUS PULSA) NESPEDIA BY ADRIAN

$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://nespedia-panel.com/api/pulsa');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $api_postdata);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $chresult = curl_exec($ch);
    curl_close($ch);
    $json_result = json_decode($chresult);
 
      if ($provider == "NESPED") {
          $status = $json_result['data']['status'];
          $catatan = $json_result['data']['catatan'];
          
         if ($status == "Pending") {
            $u_status = "Pending";
         } else if ($status == "Error") {
            $u_status = "Error";
         } else if ($status == "Success") {
            $u_status = "Success";
         } else {
             $u_status = "Pending";
         }
        }
