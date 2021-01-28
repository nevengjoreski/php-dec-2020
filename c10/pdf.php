<?php

header("Content-Type: application/pdf");

if(isset($_GET['download'])){
    header("Content-Disposition: attachment;filename=ill.pdf");
}


readfile('illuminati.pdf');