<?php
session_start();
// session_start();
// pre($_SESSION);

// destroying a session
// session_destroy();

// nacini na unisuvanje na sesija
// 1 ako pominat 24 min neaktivnost
// 2 ako se zatvori browser windows
// 3 ako povikame session_destroy() // na logout najcesto

function pre($arr){
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}
?>

<a href="session.php"> Go to session !!!</a>