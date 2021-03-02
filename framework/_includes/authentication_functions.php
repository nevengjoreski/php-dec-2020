<?php


function require_auth_db(){

    return (
        !empty($_SERVER['PHP_AUTH_USER']) &&
        !empty($_SERVER['PHP_AUTH_PW']) &&
        checkUserAndPassword($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW'])
    );
}

function checkUserAndPassword( $user, $pass ){
    global $db;

    $sql = 'SELECT username, password
            FROM users
            WHERE username = :username and password = :password
    ';

    $hashed_password = md5( $pass );

    $query = $db->prepare($sql);
    $query->execute([
        ':username' => $user,
        ':password' => $hashed_password
    ]);

    return $query->fetch(PDO::FETCH_ASSOC);
}


function reject(){
    header('HTTP/1.1 401 Authentication Required');
    header('WWW-Authenticate: Basic realm="Access denied"');

    echo "Access Denied Mister";
    die;
}