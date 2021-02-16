<?php

$edndpoint = 'http://www.nbrm.mk/klservice/kurs.asmx?WSDL';

$web_service = new SoapClient($edndpoint);

$data = [
    'StartDate' => '16.02.2021',
    'EndDate' => '16.02.2021',
];

$response = $web_service->GetExchangeRate($data);

// da se ispecati tablela koja sto ke ni gi prikaze NazivMak, Drzava, Sreden kurs kako podatoci

$response = simplexml_load_string($response->GetExchangeRateResult);

// echo '<pre>';
// print_r($response);
// echo '</pre>';

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<div class="container">
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>NazivMak</th>
                <th>Drzava</th>
                <th>Sreden</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($response->KursZbir as $record) { ?>
                <tr>
                    <td><?= $record->NazivMak ?></td>
                    <td><?= $record->Drzava ?></td>
                    <td><?= $record->Sreden ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


