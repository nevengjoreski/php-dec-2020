<?php

$db = new class() extends PDO {

    function __construct(){

        $config             = file_get_contents('config.json');
        $config_data        = json_decode($config);
        $database_config    = $config_data->database;

        $connection_string  = $database_config->connection_string;
        $username           = $database_config->username;
        $password           = $database_config->password;

        try {
            parent::__construct(
                $connection_string,
                $username,
                $password,
                [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ]
            );
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }
};