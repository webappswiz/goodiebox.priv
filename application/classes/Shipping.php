<?php

class Shipping extends Singleton {

   public function send_request($data_string) {
        $ch = curl_init('http://furgefutar.hu/webservices/webshop2.ashx');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data_string))
        );
        return $result = curl_exec($ch);
    }

}
