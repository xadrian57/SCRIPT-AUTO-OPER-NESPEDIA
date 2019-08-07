 $apikey = "api_Key_Lo"; //Api Key
    $id =  "123"; //id order
$api_postdata = "key=$apikey&action=status&id=$id";
//SCRIPT AUTO OPER(STATUS) NESPEDIA BY ADRIAN57
$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://nespedia-panel.com/api/sosial-media/status');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $api_postdata);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $chresult = curl_exec($ch);
    curl_close($ch);
    $json_result = json_decode($chresult);
 
      if ($o_provider == "NESPED") {
          $u_status = $json_result->data->status;
          $u_start = ($json_result->data->start_count == null) ? "0" : $json_result->data->start_count;
          $u_remains = $json_result->data->remains;
         if ($u_status == "Pending") {
            $un_status = "Pending";
         } else if ($u_status == "Processing") {
            $un_status = "Processing";
         } else if ($u_status == "Partial") {
            $un_status = "Partial";
         } else if ($u_status == "Error") {
            $un_status = "Error";
         } else if ($u_status == "Success") {
            $un_status = "Success";
         } else {
             $un_status = "Pending";
         }
        }
