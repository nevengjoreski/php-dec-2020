<?php

$tracking_number = 'CM537476600DE';

$endpoint = 'https://www.posta.com.mk/tnt/api/query?id=' . $tracking_number;


$curl = curl_init();
curl_setopt( $curl , CURLOPT_URL, $endpoint);
curl_setopt( $curl , CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);

if(curl_errno($curl)){
    echo 'Curl error: '. curl_error($curl). '<br>';
}

curl_close($curl);

$parsed_response = simplexml_load_string($response);

?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


<div class="container">
    <h3>Tracking Number - <?= $tracking_number ?></h3>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Од</th>
                <th>До</th>
                <th>Датум</th>
                <th>Забелешка</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($parsed_response->TrackingData as $record) { ?>
                <tr>
                    <td><?= $record->Begining ?></td>
                    <td><?= $record->End ?></td>
                    <td><?= $record->Date ?></td>
                    <td><?= checkAndReplaceChars($record->Notice) ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php

function checkAndReplaceChars($string){
    $return = '';

    foreach(str_split($string) as $char){
        $return .= replaceChar($char);
    }

    return $return;
}

function replaceChar($char){

    $replacements = [
        '}' => 'kj',
        '!' => 'ch',
        '{' => 'sh',
        '~' => 'ch',
    ];

    return $replacements[$char] ?? $char;
}


