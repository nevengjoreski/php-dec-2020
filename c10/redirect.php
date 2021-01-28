<?php

$tracking_sites = [
    'google' => 'https://google.com'
];

if(isset($_GET['site'])){

    logUserTracking();

    header("Location: " . $tracking_sites[$_GET['site']]);
}


function logUserTracking(){
    // ke go logiram vo baza ili kaj i da e 
}
