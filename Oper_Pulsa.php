// api data
            $service_id = 123; //id service
            $api_key = "api_key";
            $target = "080000000";
            // end api data
//SCRIPT AUTO OPER(ORDER SOSMED) NESPEDIA BY ADRIAN57
           
                $api_postdata = "api_key=$api_key&action=pemesanan&layanan=$service_id&target=$target";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "https://nespedia-panel.com/api/pulsa");
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $api_postdata);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                $chresult = curl_exec($ch);
                curl_close($ch);
                $json_result = json_decode($chresult);
                 if ($json_result['status'] == true) {
    echo "ORDER SUKSES, ORDER ID : ".$json_result['data']['id'];
} else {
    echo "ORDER GAGAL, PESAN : ".$json_result['data']['pesan'];
}
