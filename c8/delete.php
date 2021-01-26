<?php

require 'db.php';

$sql = "
    DELETE FROM studenti
    WHERE id = :id
";
$query = $db->prepare($sql);
$exetuted = $query->execute([
    ':id' => $_POST['id']
]);

if($exetuted){
    echo 'Student was Deleted successfully';
} else {
    echo 'Student was NOT Deleted';
}

?>

<a href="index.php">Go Back !!!</a>