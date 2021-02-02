<?php

// $file_contents = file_get_contents('tekst.txt');

// $file_contents = file_get_contents('https://nba.com');
// $file_contents = file_get_contents('https://jsonplaceholder.typicode.com/posts');

// echo $file_contents;


// reading from a file
// $my_file = fopen('tekst.txt', 'r');
// echo fread($my_file, filesize('tekst.txt'));
// fclose($my_file);

// writing to a file
// $my_file = fopen('tekst.txt', 'w');
// fwrite($my_file, ' Ova e nov tekst vo fajlot !');
// fclose($my_file);

//appending to a file
// $my_file = fopen('tekst.txt', 'a');
// fwrite($my_file, ' Ova e append text vo fajlot' . PHP_EOL);
// fclose($my_file);


$my_file = fopen('tekst.txt', 'r');
while(!feof($my_file)){
    // echo "<p>" . fgets($my_file) ."</p>";
    // echo "<p>" . fgetc($my_file) ."</p>";
}
fclose($my_file);

// $file_contents = file_get_contents('tekst.txt');
// echo $file_contents;