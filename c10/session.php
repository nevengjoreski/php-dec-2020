<?php
session_start();
pre($_SESSION);



$_SESSION['user_id'] = 3;
$_SESSION['user_name'] = "Neven";


function pre($arr){
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}
?>

<a href="index.php"> Go to index !!!</a>