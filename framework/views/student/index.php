<div class="container">

    <?php 
        if(count($students) === 1){
            echo '<a href="'.ROOT_URL.'/student/index" class="btn btn-primary my-5"> <-- </a>';
        } else {
            echo '<a href="'.ROOT_URL.'" class="btn btn-primary my-5"> <-- </a>';
        }
    ?>
    
    <?php

        if(isset($_SESSION) && isset($_SESSION['message'])){
            echo "
                <div class='alert alert-{$_SESSION['message_type']}'>
                    {$_SESSION['message']}
                </div>
            ";

            unset($_SESSION['message']);
            unset($_SESSION['message_type']);
        }

    ?>

        
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Lastname</th>
                <th>Age</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($students as $student) {?>
            <tr>
                <td><a href="<?= ROOT_URL . 'student/show/' . $student['id'] ?>">
                        <?= $student['id'] ?>
                    </a>
                </td>
                <td><?= $student['name'] ?></td>
                <td><?= $student['lastname'] ?></td>
                <td><?= $student['age'] ?></td>
                <td><?= $student['email'] ?></td>
                <td><?= $student['phone'] ?></td>
                <td>
                    <a href="<?= ROOT_URL . 'student/edit/' . $student['id']?>" class="btn btn-warning">Edit</a>
                    <a href="<?= ROOT_URL . 'student/delete/' . $student['id']?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <a href="<?= ROOT_URL . 'student/create' ?>" class="btn btn-primary d-grid">Create</a>
</div>