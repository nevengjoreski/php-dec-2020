<?php

class Student {


    function getById($id){
        global $db;
        // $GLOBALS['db'];

       $sql = 'SELECT * FROM studenti WHERE id = :id';
       $query = $db->prepare($sql);
       $query->execute([
           ':id' => $id
       ]);

        return $query->fetch(PDO::FETCH_ASSOC);
    }

    function getAll(){
        global $db;

        $sql = 'SELECT * FROM studenti';
        $query = $db->prepare($sql);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function insert(array $data) : bool{
        global $db;

        $sql = '
            INSERT INTO studenti
                (name, lastname, age, email, phone )
            VALUES
                (:name, :lastname, :age, :email, :phone )
        ';
        $query = $db->prepare($sql);

        $return = $query->execute([
            ':name'     => $data['name'],
            ':lastname' => $data['lastname'],
            ':age'      => $data['age'],
            ':email'    => $data['email'],
            ':phone'    => $data['phone'],
        ]);

        $_SESSION['message'] = 'Successfully created student with ID => ' . $db->lastInsertId();
        $_SESSION['message_type'] = $return ? 'success' : 'danger';
    
        return $return;
    }
    
}