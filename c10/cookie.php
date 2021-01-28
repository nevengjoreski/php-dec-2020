<?php

pre($_COOKIE);

// cookie name , cookie value , cookie time to expire in seconds
// setcookie('theme' , 'pink' , time() + 3600 );
// setcookie('user' , 'Neven' , time() + 3600 );

// delete cookie
// setcookie('user' , '' , time() - 60 );


// echo "Wellcome {$_COOKIE['user']}";

function pre($arr){
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

if(isset($_COOKIE['theme'])){
    echo "
    <style>
        body {
            background-color: {$_COOKIE['theme']}
        }
    </style>        
    ";
}

?>



