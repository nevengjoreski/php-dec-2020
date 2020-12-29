<?php

function pre($array){
    echo '<pre>';
    print_r($array);
    echo '<pre>';
}

pre($_REQUEST);

$ceni = [
    'hamburger' => 200,
    'chicken'   => 280,
    'hotdog'    => 170,
    'pomfrit'   => 50,
    'pavlaka'   => 35,
    'pecurki'   => 30,
    'majonez'   => 20,
    'kecap'     => 20,
    'senf'      => 25
];


$glaven_obrok = $_REQUEST['glaven_obrok'];
$dodatoci = $_REQUEST['dodatoci'];
$sosovi = $_REQUEST['sosovi'];

$dodatoci_print     = implode( ', ' , $dodatoci);
$sosovi_print       = implode( ', ' , $sosovi);

$smetka = 0;
$smetka += $ceni[$glaven_obrok];

foreach( $dodatoci as $dodatok){
    $smetka += $ceni[$dodatok];
}

foreach( $sosovi as $sos){
    $smetka += $ceni[$sos];
}

echo "
    Naracavte : $glaven_obrok kako glaven obrok,
    so dodatoci : $dodatoci_print, 
    a sosovi : $sosovi_print ! <br>
    Cenata na vasata smetka e $smetka denari!
";
/*
    Naracavte : GLAVEN_OBROK kako glaven obrok, ( Hamburger )
    so dodatoci : DODATOCI,                     ( pomfrit, pavlaka, pecurki )
    a sosovi : SOSOVI ! <br>                    ( senf, kecap ) 
    Cenata na vasata smetka e SMETKA denari!    ( 450 )
*/