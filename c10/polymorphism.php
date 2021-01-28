<?php

abstract class Blago {

    public $calories;
    public $type;
    protected $price;

    function printAttributes(){

        echo " Ova Blago ima $this->calories kalorii, <br>
                e od tipot $this->type <br>
                so cena od $this->price
        ";
    }

    function setPrice($price){
        $this->price = $price;
    }

    abstract public function log();

}


interface isAvailableForSell{
    public function isAvailable();
}


class Torta extends Blago implements isAvailableForSell{

    public $pieces = 10;

    function printAttributes(){

        echo " Ova Blago ima $this->calories kalorii, <br>
                e od tipot $this->type <br>
                so cena od $this->price <br>
                i ima $this->pieces parcinja <br>
        ";
    }

    public function log(){
        // log in file
    }

    function isAvailable(){
        return true;
    }
}


class Kolac extends Blago{
    
    public function log(){
        // log in database
    }
}

class Tocak implements isAvailableForSell{
    function isAvailable(){
        return true;
    }
}

$torta = new Torta;
$torta->type = 'Tiramisu';
$torta->calories = 1500;
$torta->setPrice(1000);


$kolac = new Kolac;
$kolac->type = 'Snikers';
$kolac->calories = 488;
$kolac->setPrice(50);

$torta->printAttributes();
echo '<hr>';
$kolac->printAttributes();

pre($kolac);
pre($torta);




function pre($arr){
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}
