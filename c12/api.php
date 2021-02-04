<?php

$api_key = 'e8b5e755995d25633d3ae9f52219fd0c';

$city = 'Lviv';
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

//http://api.openweathermap.org/data/2.5/weather?q=Skopje&appid=e8b5e755995d25633d3ae9f52219fd0c&mode=html&units=metric
// echo $complete_url;

$response = file_get_contents($complete_url);
if($mode === 'html'){
    echo $response;
} elseif($mode === 'json'){
    $json_encoded = json_decode($response, true);
    echo '<pre>';
    print_r($json_encoded);
    echo '</pre>';
}

// city name , 
// discription , temperature, 
// wind speed, icon name
?>

<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th>City Name</th>
            <th>Discription</th>
            <th>Temperature</th>
            <th>Wind Speed</th>
            <th>Icon Name</th>
            <th>Secret</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td><?= $json_encoded['name'] ?></td>
            <td><?= $json_encoded['weather'][0]['main'] ?></td>
            <td><?= $json_encoded['main']['temp'] ?></td>
            <td><?= $json_encoded['wind']['speed'] ?></td>
            <td><?= $json_encoded['weather'][0]['icon'] ?></td>
            <td>Secret</td>
        </tr>
    </tbody>
</table>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


