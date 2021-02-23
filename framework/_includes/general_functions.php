<?php

if( !function_exists('pre')){
    function pre($array){
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
}
