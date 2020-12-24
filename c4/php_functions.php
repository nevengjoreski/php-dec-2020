<?php

function pre($array){
    echo '<pre>';
    print_r($array);
    echo '<pre>';
}

function br(){
    echo '<br>';
}


// trim - removes whitespaces
$trim = ' Neven ';
$trimmed_string = trim($trim); // 'Neven'

if( $trimmed_string === $trim){
    echo 'OK';
}

br();

// ucfirst - converts first char of the string to uppercase

// Open, OPEN, open, skOPje

$ucfirst = 'skopje';
echo ucfirst($ucfirst);
br();

// strlen - returns length of a string
echo strlen('Stavre ! @');
br();

// substr - return part of a string
$sub = substr( "Go sakam PHP !", 9, 3);
echo $sub;
br();

// strpos - retrn position of desired string
echo strpos( 'Go sakam PHP', 'sakam');
br();

// strtolower // strtoupper
$str = 'opEN';
echo strtolower($str);
br();
echo strtoupper($str);
br();


// explode() - converts string to array by given charachter
$url = "name=Neven&lastname=Gjoreski&age=33&email=n.g@gmail.com";
$response = "name:Neven##lastname:Gjoreski##age:33##email:n.g@gmail.com";

pre($url);

$result_option_1 = $result_option_2 = [];

$exploded_url = explode( '&' , $url);
pre($exploded_url);
foreach($exploded_url as $element){
    $exploded_element = explode( '=', $element);
    $key = $exploded_element[0];
    $value = $exploded_element[1];
    $result_option_2[$key] = $value;
    // $result_option_2[$exploded_element[0]] = $exploded_element[1] ;
}
// echo '<h2> Result 1</h2>';
// pre($result_option_1);

echo '<h2> Result 2</h2>';
pre($result_option_2);
echo $result_option_2['name'];
br();


// implode - make string from array

$colors = [ 'red', 'green', 'blue', 'yellow'];

echo "We have the colors : " . implode( ', ' , $colors);
br();

// str_replace - replace a part of a string
$str = "Neven e najlosiot predavac vo Semos !";

echo str_replace( 'najlosiot', 'najdobriot', $str);
br();

// count - number of array elements

// str_word_count - number of words in a string

$broj_na_zborovi = 'Ova e string so zborovi !';
$broj = count(explode( ' ', $broj_na_zborovi));
echo $broj;
br();
echo "pravilen nacin na broenje na zborovi e str_word_count : " . str_word_count($broj_na_zborovi);
br();

// die('Tuke umiram');
// exit('Tuke umiram');
// sleep(5);
// phpinfo();


// round() 4.4 / 4 , 4.6 / 5
// ceil()  4.1 / 5 , 4.999 / 5
// floor() 4.1 / 4 , 4.999 / 4 
// abs()  -1/ 1
// count()


// in_array - check if specified value is found in the array
$colors = [ 'red', 'green', 'blue', 'yellow'];
$picked = 'pink';

if( !in_array( $picked , $colors) ){
    echo 'Vnesovte nepostoecka boja : ' . $picked . ", a mozete da odberete samo pomegu : " . implode(', ', $colors);
    br();
}

$colors = [ 'red', 'green', 'blue', 'yellow'];
$picked = ['pink', 'brown'];
// array_merge( $a1 , $a2); - merges arrays into one array
$merged = array_merge( $colors , $picked);

pre($merged);

// unset - remove element from array

unset($merged[2]);
pre($merged);

// todo: reset the keys of array



