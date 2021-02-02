<?php

$email = 'stavre.stavreski@gmail.com';
print_r(filter_var($email, FILTER_VALIDATE_EMAIL));
echo '<br>';

$integer = '123';
print_r(filter_var($integer, FILTER_VALIDATE_INT));
echo '<br>';

$ip = '127.0.0.256';
print_r(filter_var($ip, FILTER_VALIDATE_IP));
echo '<br>';

$pattern = '/[a-z]+@[a-z]+/';
$subject = 'stavrestavreski@gmail.com';

print_r(preg_match($pattern , $subject));

if( preg_match($pattern , $subject) ){
    echo 'validen email';
}

echo '<br>max execution time => ' . ini_get('max_execution_time') . ' seconds';

// ini_set('max_execution_time', 5);

sleep(10);

?>