<?php

// require_auth() ? logInUser() : reject();
require_auth_db() ? logInUser() : reject();

function require_auth(){
    $AUTH_USER = 'admin';
    $AUTH_PW = 'admin';

    return (
        !empty($_SERVER['PHP_AUTH_USER']) &&
        !empty($_SERVER['PHP_AUTH_PW']) &&
        $_SERVER['PHP_AUTH_USER'] === $AUTH_USER &&
        $_SERVER['PHP_AUTH_PW'] === $AUTH_PW 
    );
}

function require_auth_db(){

    return (
        !empty($_SERVER['PHP_AUTH_USER']) &&
        !empty($_SERVER['PHP_AUTH_PW']) &&
        checkUserAndPassword($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW'])
    );
}

function checkUserAndPassword( $user, $pass ){

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

    $sql = 'SELECT email, phone
            FROM studenti
            WHERE email = :email and phone = :phone
    ';

    $query = $db->prepare($sql);
    $query->execute([
        ':email' => $user,
        ':phone' => $pass
    ]);

    return $query->fetch(PDO::FETCH_ASSOC);
}



function logInUser(){
    echo 'Successfull log in';
}

function reject(){
    header('HTTP/1.1 401 Authentication Required');
    header('WWW-Authenticate: Basic realm="Access denied"');

    echo "Access Denied Mister";
    die;
}

