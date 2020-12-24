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
echo '<br>';
$niza = [ 12 , 45, 65, 87, 72, 3, 99, 54, -1 ];

$presmetana = presmetkiOdNiza($niza);

$niza2 = [ 12 , 45];
$presmetana2 = presmetkiOdNiza($niza2);

echo "  Minimumot e : {$presmetana['min']} <br> 
        Maksimumot e : {$presmetana['max']} <br> 
        Srednata vrednost : {$presmetana['sredna']} <br> 
        Proizvodot e : {$presmetana['proizvod']} <br>";

echo "  Minimumot e : {$presmetana2['min']} <br> 
    Maksimumot e : {$presmetana2['max']} <br> 
    Srednata vrednost : {$presmetana2['sredna']} <br> 
    Proizvodot e : {$presmetana2['proizvod']} <br>";


function presmetkiOdNiza($niza){
    // global $niza;
        
    $min = $niza[0];
    $max = $niza[0];
    
    $broj_na_elementi = count($niza);
    $zbir = 0;
    $proizvod = 1;
    
    foreach( $niza as $element){
    
        if( $min > $element ){
            $min = $element;
        }
    
        if( $max < $element ){
            $max = $element;
        }
    
        $zbir += $element;
        $proizvod *= $element;
    }
    
    $sredna = $zbir / $broj_na_elementi;
    $sredna = round($sredna , 2);

    return [ 
        'min'       => $min ,
        'max'       => $max, 
        'sredna'    => $sredna,
        'proizvod'  => $proizvod
    ];
}