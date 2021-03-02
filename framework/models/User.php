<?php

class User {

    function insert(array $data) : bool {
        global $db;

        $sql = '
            INSERT INTO users
                (username, password )
            VALUES
                (:username, :password )
        ';
        $query = $db->prepare($sql);

        // $salt = 'PHPSALT';
        // $hashed_password = password_hash( $salt . $data['password'] , PASSWORD_DEFAULT);
        $hashed_password = md5( $data['password'] );

        $return = $query->execute([
            ':username'     => $data['username'],
            ':password'     => $hashed_password
        ]);

        $_SESSION['message'] = 'Successfully created user with ID => ' . $db->lastInsertId();
        $_SESSION['message_type'] = $return ? 'success' : 'danger';

        return $return;
    }
}