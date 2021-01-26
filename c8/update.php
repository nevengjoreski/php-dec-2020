<?php

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

require 'db.php';

$sql = "
    UPDATE studenti
    SET
        name = :name,
        lastname = :lastname,
        age = :age,
        email = :email,
        phone = :phone
    WHERE id = :id
";
$query = $db->prepare($sql);
$exetuted = $query->execute([
    ':id' => $_POST['id'],
    ':name' => $_POST['name'],
    ':lastname' => $_POST['lastname'],
    ':age' => $_POST['age'],
    ':email' => $_POST['email'],
    ':phone' => $_POST['phone'],
]);

if($exetuted){
    echo 'Student was Updated successfully';
} else {
    echo 'Student was NOT Updated';
}
?>
<br>
<a href="index.php">Go Back !!!</a>