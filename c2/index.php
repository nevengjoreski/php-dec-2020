<?php

// Relaciski / za sporedba ( ==, ===, !=, !== , < , > , <= ...)

// true
$uslov = false;

if ( $uslov ){
    echo 'Se naogam vo uslov !!!';
}

$num = 12;
if( $num === '123' ){
    echo 'Identicno';
} elseif( $num == '123') {
    echo 'Ne e identicno no vrednosta e tocna';
} else {
    echo 'vrednosta Ne e tocna ';
}


// if // switch

// Logicki ( AND && , OR || )

$true = true;
$false = false;

// 
if( $true || $true &&  $true && 1/0){
    // echo 'OK';
}

//echo - stringovi
// print_r - array i objekti
echo '<br>';

$broj = 6;

if ( $broj % 2 === 0 ){
    echo 'brojot e paren <br>';
} else{
    echo 'brojot ne e paren <br>';
}

$action = 'Delete';

if($action === 'Edit'){
    echo 'You have clicked Edit';
} elseif($action === 'Open'){
    echo 'You have clicked Open';
} elseif($action === 'Close'){
    echo 'You have clicked Close';
} elseif($action === 'Delete'){
    echo 'You have clicked Delete';
} else {
    echo 'You have clicked Unknown action';
}

echo '<br>';

switch($action){
    case 'Edit':
        echo 'You have clicked Edit';
        break;
    case 'Open':
        echo 'You have clicked Open';
        break;
    case 'Delete':
        echo 'You have clicked Delete';
        break;
    case 'Close':
        echo 'You have clicked Close';
        break;
    default:
        echo 'You have clicked Unknown action';
}

echo '<h1>Nizi</h1>';

// Indeksirani
                //0   1   2   3  4   5
$niza_broevi = [ 56, 72, 49, 98, 1, 17 ];

echo '<pre>';
print_r($niza_broevi);
echo '</pre>';

echo $niza_broevi[3] . '<br>';
            //      0            1              2
$serii = [ 'The Mandalorian', 'Ashoka', 'Game Of Thrones' ];

echo $serii[0] . '<br>';

// Asocijativni

$person = [ 
    'name' => 'Neven', 
    'lastname' => 'Gjoreski', 
    'age' => 33, 
    'email' => 'n.g@hotmail.com' 
];

echo '<pre>';
print_r($person);
echo '</pre>';

echo $person['email'] . '<br>';
echo $person['age'] . '<br>';

// $niza_broevi = [ 56, 72, 49, 98, 1, 17 ];
// $niza_broevi = [ 
//     0 => 56, 
//     1 => 72,
//     2 => 49,
//     3 => 98,
//     4 => 1,
//     5 => 17
//  ];

// Multidimenzionalni

$serii = [ 'The Mandalorian', 'Ashoka', 'Game Of Thrones' ];

$filmovi = [
    'Saw',
    'Star Wars',
    'La La Land',
    'Brave Heart',
    'Titanik'
];

$multidimensional = [
    'serii' => $serii,
    'filmovi' => $filmovi
];

// $multidimensional = [
//     'serii' => [ 
//         'The Mandalorian',
//         'Ashoka',
//         'Game Of Thrones'
//     ],
//     'filmovi' => [
//         'Saw',
//         'Star Wars',
//         'La La Land',
//         'Brave Heart',
//         'Titanik'
//     ]
// ];

echo '<pre>';
print_r($multidimensional);
echo '</pre>';

echo $multidimensional['filmovi'][1];
echo $multidimensional['serii'][0];


echo '<hr><hr><hr>';
echo '<h1> Ciklusi </h1>';


// for( inicijalizacija ; uslov ; inkrement ){
//     naredbi;
// }
// 0

for( $i = 0 ; $i <= 10 ; $i++ ){
    echo $i . '<br>';
}


$serii = [ 
    'The Mandalorian', 
    'Ashoka', 
    'Game Of Thrones' , 
    'Picky Blinders',
    100 => 'Obi-One Kenobi'
];

echo '<h3>static</h3>';
echo '<ul>';
echo '<li>' . $serii[0] . '</li>';
echo '<li>' . $serii[1] . '</li>';
echo '<li>' . $serii[2] . '</li>';
echo '<li>' . $serii[3] . '</li>';
echo '</ul>';

echo '<h3>For</h3>';
echo count($serii);
echo '<ul>';
for( $i = 0; $i < count($serii) ; $i++ ){
    // echo '<li>' . $serii[$i] . '</li>';
}
echo '</ul>';

echo '<h3>Foreach</h3>';
echo '<ul>';
foreach( $serii as $serija){
    echo '<li> ' . $serija . '</li>';
}
echo '</ul>';

echo '<ul>';
foreach( $serii as $key => $serija){
    echo '<li> ' . $key . ' => '. $serija . '</li>';
}
echo '</ul>';

$persons = [ 
    [
        'name' => 'Neven', 
        'lastname' => 'Gjoreski', 
        'age' => 33, 
        'email' => 'n.g@hotmail.com' 
    ],[
        'name' => 'Albert', 
        'lastname' => 'Ajnshtanos', 
        'age' => 105, 
        'email' => 'a.j@hotmail.com' 
    ],[
        'name' => 'Obi', 
        'lastname' => 'Kenobi', 
        'age' => 45, 
        'email' => 's.w@hotmail.com' 
    ],
];

// echo '<pre>';
// print_r($persons);
// echo '</pre>';

// $ime = 'Neven';
// echo " ova e korisnik so ime $ime <br>";
// echo ' ova e korisnik so ime $ime <br>';


echo '<ul>';
foreach( $persons as $person){
    echo "<li>Korisnikot e {$person['name']}, 
            a godini {$person['age']} </li>";
}
echo '</ul>';