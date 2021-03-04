<?php

$password = 'randomPass123';

$hashed = password_hash( $password, PASSWORD_DEFAULT);

$hashed2 = '$2y$10$8ocHSmQhDd0KEi0g/X74G.JDvoWcf52GPQRdBJOwYqhUK962Bv0B2';
echo '<br>';
echo $hashed2;
echo '<br>';
echo $hashed;
echo '<br>';
echo strlen($hashed);

if( password_verify($password , $hashed2)){
    echo 'ok';
} else {
    echo 'not ok';
}