<?php

class Student {

    // PROPERTIES

    // pristap - public , private , protected

    //$id
    public $name;
    // $lastname
    // $age
    public $email;
    public $phone;
    private $cache;
    public static $no_of_instances = 0;


    function __construct( $name , $email, $phone){

        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->cache = 99;


        self::$no_of_instances++;

        // echo 'Creating new Object from Studenti';
    }


    // METHODS

    function printName(){
        echo 'Isprintuvam nesto  vo metoda';
    }

    function printFullName(){
        echo " Name of Student is : $this->name , email is : $this->email and phone is $this->phone";
    }

    public function setCache($kes){

        // log that the user cache has been changed;
        $this->logCacheChange();
        $this->cache = $kes;
    }

    function getCache(){
        return $this->cache;
    }

    private function logCacheChange(){
        // log that the user cache has been changed;
        echo "logging user $this->name";
    }
}

function printName(){
    echo 'Isprintuvam nesto vo funkcija';
}

function pre($arr){
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}
