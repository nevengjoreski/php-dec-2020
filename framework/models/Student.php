<?php

class Student {


    function getById(){
        global $db;
        // $GLOBALS['db'];
        $id = 1;

       $sql = 'SELECT * FROM studenti WHERE id = :id';
       $query = $db->prepare($sql);
       $query->execute([
           ':id' => $id
       ]);

        return $query->fetch(PDO::FETCH_ASSOC);
    }
    
}