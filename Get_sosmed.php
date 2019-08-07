// api data
            $service_id = 123; //id service
            $api_key = "api_key";
            $target = "adrian_abdllh";
             $jumlah = 100;
            // end api data
//SCRIPT AUTO OPER(ORDER SOSMED) NESPEDIA BY ADRIAN57
           
                $api_postdata = "key=$api_key&action=order&service=$service_id&target=$target&quantity=$jumlah";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $api_link);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $api_postdata);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                $chresult = curl_exec($ch);
                curl_close($ch);
                $json_result = json_decode($chresult);
                 if ($json_result['error'] == true) {
    echo "ORDER GAGAL, PESAN : ".$json_result['error'];
} else {
    echo "ORDER SUKSES, ORDER ID : ".$json_result['data']['id'];
}
