<?php



ispecatiNesto();

$i1 = 15;
$i2 = 13;
$i3 = 27;

ispecatiGoZbirotNaBroevite( $i1, $i2, $i3);
ispecatiGoZbirotNaBroevite( -4, 10 , 15);
ispecatiGoZbirotNaBroevite( -4, 10);

$sum_of_sums = [];

$suma = getSumOfNumbers( 1, 3 , 5);
$sum_of_sums[] = $suma;
echo "Sumata e $suma <br>";

$suma = getSumOfNumbers( 2, 5 , 9);
$sum_of_sums[] = $suma;
echo "Sumata e $suma <br>";

$suma = getSumOfNumbers( 5, 9 , 16);
$sum_of_sums[] = $suma;
echo "Sumata e $suma <br>";

print_r($sum_of_sums);
echo array_sum($sum_of_sums);

function ispecatiNesto(){
    echo '<p>ispecati nesto</p>';
}

function ispecatiGoZbirotNaBroevite( $b1, $b2, $b3 = 0){

    echo $b1 + $b2 + $b3 . '<br>';
}

function getSumOfNumbers( $b1, $b2, $b3 = 0 ){
    
    return $b1 + $b2 + $b3;
}

// todo: global variables
// todo: nizata so min max vo funkcija