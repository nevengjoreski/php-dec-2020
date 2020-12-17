<?php
echo 'Hello' . '<br>';

/*
    ova e komentar 
    vo poveke lini
*/

// komentar samo vo edna linija

// DATA TYPES

// Scalar
$string = 'PHP so MySQL 1';
$integer = 12;
$float = 3.14;
$boolean = true; // false

// Compound
$array = [];
$array = array();
$array = [ 123, 'Stavre', true, [1] ];

$object = new stdClass();

// Special
// resource - file - database
// null / NULL


//pecatenje na array
var_dump($array);
echo '<hr>';

echo '<pre>';
print_r($array);
echo '</pre>';


echo '<br>';


// Operatori

// Aritmeticki ( + , - , * , / , % ...)
// Skrateni Aritmeticki ( += , -=, *=, /= ...)
$num = 7;
$num = $num + 10;
echo $num;

echo '<br>';

$num = 7;
$num += 10;
echo $num;

// inkrementiranje , dekrementiranje ( ++ , --)
echo '<br>';

$num = 3;
//$num = $num + 1;
//$num++;

echo $num++;
echo '<br>';
echo $num;

// Relaciski / za sporedba ( ==, ===, !=, !== , < , > , <= ...)

// Logicki ( AND && , OR || )
