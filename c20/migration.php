<?php

require_once('vendor/autoload.php');


$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();



// forcing an error for whoops
// $asd = $aasd;

if( isset($_FILES['document'])){
    $document_name = $_FILES['document']['tmp_name'];
} else {
    $document_name = 'users.xlsx';
}

$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
$spreadsheet = $reader->load($document_name);
$sheetData = $spreadsheet->getActiveSheet()->toArray();


echo '<pre>';
print_r($sheetData);
echo '</pre>';

//dump
dump($sheetData);

//dump and die
// dd($sheetData);

// TODO: INSERT ALL RECORDS INTO DATABASE
