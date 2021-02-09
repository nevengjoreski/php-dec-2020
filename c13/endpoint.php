<?php

function getOpenWeatherData($city){

    $api_key = 'e8b5e755995d25633d3ae9f52219fd0c';
    // $mode = 'html';
    $mode = 'json';
    $units = 'metric';

    $url = 'http://api.openweathermap.org/data/2.5/weather';

    $data = [
        'q' => $city,
        'appid' => $api_key,
        'mode' => $mode,
        'units' => $units,
    ];

    $complete_url = $url . '?' . http_build_query($data);

    $curl = curl_init();
    curl_setopt( $curl , CURLOPT_URL, $complete_url);
    curl_setopt( $curl , CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);

    return json_decode($response, true);

}