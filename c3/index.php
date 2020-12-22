<?php
// primer 1

$izmesana_niza = ['Stavre', '13', '42' , 'Neven', 91, 'DimitarDimovskiNatrapnik'];

$brojki = $stringovi = [];

foreach( $izmesana_niza  as $value){

    if(is_numeric($value)){
        // $brojki[] = $value;
        array_push( $brojki, $value);
    } else {
        $stringovi[] = $value;
    }    
}
$brojki[60] = 60;

echo '<pre>';
print_r($brojki);
echo '</pre>';
echo '<pre>';
print_r($stringovi);
echo '</pre>';

// primer 2

$niza = [ 12 , 45, 65, 87, 72, 3, 99, 54, -1 ];

// da se zeme min , max, sredna vrednost , proizvod

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

echo " Minimumot e : $min <br> Maksimumot e : $max <br> Srednata vrednost : $sredna <br> Proizvodot e : $proizvod <br>";


// while 

$i = 3;

while($i <= 10){
    echo $i . '<br>';
    $i++;
}

$ovci = [ 'ovca1', 'ovca2', 'ovca3', 'crna', 'ovca4'];

$i = 0;

echo '<hr>';
while( $i < count($ovci)){

    if($ovci[$i] === 'crna'){
        $i++;
        continue;
    }
    echo $ovci[$i] . '<br>';
    $i++;
}

$i = 0;
echo '<hr>';
while( $i < count($ovci)){

    if($ovci[$i] === 'crna'){
        break;
    }
    echo $ovci[$i] . '<br>';
    $i++;
}