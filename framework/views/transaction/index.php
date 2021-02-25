<div class="container">

    <?php 
        if(count($transactions) === 1){
            echo '<a href="'.ROOT_URL.'/transaction/index" class="btn btn-primary my-5"> <-- </a>';
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
                <th>Transaction Number</th>
                <th>Sum</th>
                <th>Type</th>
                <th>Student Name ( ID )</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($transactions as $transaction) {?>
            <tr>
                <td><a href="<?= ROOT_URL . 'transaction/show/' . $transaction['id'] ?>">
                        <?= $transaction['id'] ?>
                    </a>
                </td>
                <td><?= $transaction['transaction_number'] ?></td>
                <td><?= $transaction['sum'] ?></td>
                <td><?= $transaction['type'] ?></td>
                <td><?= $transaction['student_name'] ?> ( <?= $transaction['student_id'] ?> )</td>
                <td>
                    <a href="<?= ROOT_URL . 'transaction/edit/' . $transaction['id']?>" class="btn btn-warning">Edit</a>
                    <a href="<?= ROOT_URL . 'transaction/delete/' . $transaction['id']?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <a href="<?= ROOT_URL . 'transaction/create' ?>" class="btn btn-primary d-grid">Create</a>
</div>