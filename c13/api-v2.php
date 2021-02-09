<?php
require "endpoint.php";

$city = $_REQUEST['city'] ?? 'Skopje';
$mode = $_REQUEST['mode'] ?? 'html';

$modes = [ 'json', 'html'];

$response = getOpenWeatherData($city, $mode);

if($mode === 'json') {
    $background_url = "http://openweathermap.org/img/w/{$response['weather'][0]['icon']}.png";
?>
<table class="table table-dark table-striped container mt-5">
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
            <td><?= $response['name'] ?></td>
            <td><?= $response['weather'][0]['main'] ?></td>
            <td><?= $response['main']['temp'] ?></td>
            <td><?= $response['wind']['speed'] ?></td>
            <td><?= $response['weather'][0]['icon'] ?></td>
            <td>
                <img height="45" width="45" 
                    style="border: medium none; width: 45px; height: 45px; background: url(<?= $background_url ?>) repeat scroll 0% 0% transparent;" 
                    alt="title" src="http://openweathermap.org/images/transparent.png">
            </td>
        </tr>
    </tbody>
</table>
<?php } else { ?>

    <div class="container" style="display:flex; justify-content:center;">
        <div><?= $response ?></div>
    </div>

<?php } ?>

<div class="container">
    <form method="POST">
        <div class="d-grid">
            <label for="">City</label>
            <input type="text" class="form-control" name="city" value="<?= $_REQUEST['city'] ?? '' ?>">
        </div>

        <div class="d-grid">
            <label for="">Mode</label>
            <select name="mode" class="form-control">
                <?php foreach($modes as $mode) { ?>
                    <option><?= $mode ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="d-grid mt-3">
            <input class="btn btn-warning btn-block" type="submit" value="Get API">
        </div>
    </form>
</div>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


