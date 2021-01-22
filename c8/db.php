<?php

$connection_string = 'mysql:host=127.0.0.1;dbname=php';
$username = 'root';
$password = '';

try{

    $db = new PDO( $connection_string , $username, $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]);

} catch( PDOException $e){
    echo 'Connetion failed : ' . $e->getMessage();
    die;
}