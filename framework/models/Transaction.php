<?php

class Transaction {


    function getById($id){
        global $db;
        // $GLOBALS['db'];

       $sql = 'SELECT t.*, CONCAT( s.name, " ", s.lastname) as student_name  
               FROM transactions t
               JOIN studenti s
                ON s.id = t.student_id
               WHERE t.id = :id';
       $query = $db->prepare($sql);
       $query->execute([
           ':id' => $id
       ]);

        return $query->fetch(PDO::FETCH_ASSOC);
    }

    function getAll(){
        global $db;

        $sql = 'SELECT t.* , CONCAT( s.name, " ", s.lastname) as student_name  
                FROM transactions t
                JOIN studenti s
                ON s.id = t.student_id';
        $query = $db->prepare($sql);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function insert(array $data) : bool{
        global $db;

        $sql = '
            INSERT INTO transactions
                (transaction_number, type, sum, student_id )
            VALUES
                (:transaction_number, :type, :sum, :student_id )
        ';
        $query = $db->prepare($sql);

        $return = $query->execute([
            ':transaction_number'     => $data['transaction_number'],
            ':type' => $data['type'],
            ':sum'      => $data['sum'],
            ':student_id'    => $data['student_id']
        ]);

        $_SESSION['message'] = 'Successfully created transaction with ID => ' . $db->lastInsertId();
        $_SESSION['message_type'] = $return ? 'success' : 'danger';
    
        return $return;
    }

    
    function delete($id){
        global $db;
        // $GLOBALS['db'];

       $sql = 'DELETE FROM transactions WHERE id = :id';
       $query = $db->prepare($sql);
       $return = $query->execute([
           ':id' => $id
       ]);

       $_SESSION['message'] = 'Successfully deleted transaction with ID => ' . $id;
       $_SESSION['message_type'] = $return ? 'success' : 'danger';
    }

    function update($data){
        global $db;

        extract($data);
        $sql = '
            UPDATE transactions
            SET
                transaction_number = :transaction_number,
                type = :type,
                sum = :sum,
                student_id = :student_id
            WHERE
                id = :id
        ';

        $query = $db->prepare($sql);
        $return = $query->execute([
            ':id' => $id,
            ':transaction_number' => $transaction_number,
            ':type' => $type,
            ':sum' => $sum,
            ':student_id' => $student_id,
        ]);

        $_SESSION['message'] = 'Successfully updated transaction with ID => ' . $id;
        $_SESSION['message_type'] = $return ? 'success' : 'danger';
    }
    
}