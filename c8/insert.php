<?php

require 'db.php';

$sql = "
    INSERT INTO studenti
    ( name, lastname, age, email, phone )
    VALUES
    ( :name, :lastname, :age, :email, :phone )
";
$query = $db->prepare($sql);
$exetuted = $query->execute([
    ':name' => $_POST['name'],
    ':lastname' => $_POST['lastname'],
    ':age' => $_POST['age'],
    ':email' => $_POST['email'],
    ':phone' => $_POST['phone'],
]);

if($exetuted){
    echo 'Student was Created successfully';
} else {
    echo 'Student was NOT Created';
}

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

?>

<a href="index.php">Go Back !!!</a>