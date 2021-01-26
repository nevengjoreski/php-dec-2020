<?php
require 'db.php';
$id = 1;

// nacin 1 - pravilen

// $sql = " SELECT * FROM studenti WHERE id = :id";
// $query = $db->prepare($sql);
// $query->execute([ ':id' => $id]);
// $students = $query->fetchAll(PDO::FETCH_ASSOC);


// nacin 2 - pravilen
// $sql = " SELECT * FROM studenti WHERE id = :id";
// $query = $db->prepare($sql);
// $query->bindValue(':id', $id, PDO::PARAM_INT);
// $query->execute();
// $students = $query->fetchAll(PDO::FETCH_ASSOC);

// nacin 3 - ne pravilen

// $sql = " SELECT * FROM studenti WHERE id = $id";
// $query = $db->query($sql);
// $students = $query->fetchAll(PDO::FETCH_ASSOC);

// echo '<pre>';
// print_r($students);
// echo '</pre>';
// die;