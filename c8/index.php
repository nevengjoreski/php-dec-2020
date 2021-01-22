<?php

require 'db.php';

// $sql = "SELECT *
//         FROM studenti
//         WHERE name IN ('Damjan' ,'Kristina')";

$sql = "SELECT * FROM studenti";
$query = $db->prepare($sql);
$query->execute();
$students = $query->fetchAll(PDO::FETCH_ASSOC);

// echo '<pre>';
// print_r($students);
// echo '</pre>';
// die;

?>

<div class="container">
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Lastname</th>
                <th>Age</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($students as $student) {?>
            <tr>
                <td><a href="create.php?id=<?= $student['id'] ?>">
                        <?= $student['id'] ?>
                    </a>
                </td>
                <td><?= $student['name'] ?></td>
                <td><?= $student['lastname'] ?></td>
                <td><?= $student['age'] ?></td>
                <td><?= $student['email'] ?></td>
                <td><?= $student['phone'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <a href="create.php" class="btn d-grid btn-primary">Create New Student</a>
</div>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">





