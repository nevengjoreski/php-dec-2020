<?php

$url = 'http://localhost/php-dec-2020/c14/auth.php';

$user = 'm.v@yahoo.com';
$pwd = '075458796';

$userpwd = "$user:$pwd";
// $userpwd = "m.v@yahoo.com:075458796";


$curl = curl_init();
curl_setopt( $curl , CURLOPT_URL, $url);
curl_setopt( $curl , CURLOPT_RETURNTRANSFER, true);
curl_setopt( $curl , CURLOPT_USERPWD, $userpwd);
$response = curl_exec($curl);

if(curl_errno($curl)){
    echo 'Curl error: '. curl_error($curl). '<br>';
}

curl_close($curl);

echo $response;


