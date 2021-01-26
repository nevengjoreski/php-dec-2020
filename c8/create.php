<?php
require 'db.php';

$action = 'insert.php';
$button_label = 'Create';

if(isset($_GET['id'])){
    
    $sql = "SELECT * FROM studenti
        WHERE id = :id";
    $query = $db->prepare($sql);
    $query->execute([
        ':id' => $_GET['id']
    ]);
    $student = $query->fetch(PDO::FETCH_ASSOC);

    $action = 'update.php';
    $button_label = 'Update';
    $id = $_GET['id'];
}

// echo '<pre>';
// print_r($student);
// echo '</pre>';
// die;
?>

<div class="container">
    <form action="<?= $action ?>" class="row" method="post">

        <input type="hidden" name="id" value="<?= $id ?? '' ?>">

        <div class="col-sm-6">
            <label for="">Name</label>
            <input type="text" class="form-control" 
                name="name" value="<?= $student['name'] ?? '' ?>">

            <label for="">Lastname</label>
            <input type="text" class="form-control" 
                name="lastname" value="<?= @$student['lastname'] ?>">
        </div>

        <div class="col-sm-6">
            <label for="">Age</label>
            <input type="text" class="form-control" 
                name="age" value="<?= @$student['age'] ?>">

            <label for="">Email</label>
            <input type="text" class="form-control"
                name="email" value="<?= @$student['email'] ?>">

            <label for="">Phone</label>
            <input type="text" class="form-control"
                name="phone" value="<?= @$student['phone'] ?>">
        </div>

        <div class="d-grid mt-3">
            <input type="submit" class="btn btn-block btn-warning" value="<?= $button_label?> Student">
        </div>
    </form>
</div>

<?php if ( isset($id)){ ?>
<div class="container">
    <form action="delete.php" class="row" method="post" onsubmit="return confirm('Are you sure ?')">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div class="d-grid mt-3">
            <input type="submit" class="btn btn-block btn-danger" value="Delete Student">
        </div>
    </form>
</div>
<?php } ?>

<div class="container">
    <a href="index.php">Go Back !!!</a>
</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
