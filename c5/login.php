<?php
function pre($array){
    echo '<pre>';
    print_r($array);
    echo '<pre>';
}

pre($_POST);
pre($_GET);
pre($_REQUEST);

$username = $_POST['username'];
$password = $_POST['password'];

$database_saved_pass = password_hash( 'password123' , PASSWORD_DEFAULT);
$database_saved_username = 'adminadmin';

if( validateInput( $username, $password, $database_saved_pass, $database_saved_username) ){
    echo 'Successful Login ' . $username;
} else {
    echo 'Unsucssfull login : Wrong username or password !';
}


function validateInput($username, $password, $database_saved_pass, $database_saved_username){
    
    $no_of_chars_username = strlen($username);
    $no_of_chars_password = strlen($password);

    return isset($username) && isset($password) &&
            password_verify($password , $database_saved_pass) &&
            $database_saved_username === $username &&
            $no_of_chars_password >= 8 &&
            $no_of_chars_username >= 8;
}

?>

<h1>Dobredojdovte <?= $username?></h1>