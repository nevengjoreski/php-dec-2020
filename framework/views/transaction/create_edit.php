
<div class="container">
<a href="<?= ROOT_URL ?>/transaction/index" class="btn btn-primary my-5"> <-- </a>
    <form action="<?= $action ?>" class="row" method="post">

        <input type="hidden" name="id" value="<?= $id ?? '' ?>">

        <div class="col-sm-6">
            <label for="">Transaction Number</label>
            <input type="text" class="form-control" 
                name="transaction_number" value="<?= $transaction['transaction_number'] ?? '' ?>">

            <label for="">Type</label>
            <select type="text" class="form-control" name="type">
                <?php 
                    foreach( $this->types as $type){
                        $selected = $transaction['type'] === $type ? 'selected' : '';
                        echo "<option $selected >$type</option>";
                    } 
                ?>
            </select>
        </div>

        <div class="col-sm-6">
            <label for="">Sum</label>
            <input type="text" class="form-control" 
                name="sum" value="<?= @$transaction['sum'] ?>">

            <label for="">Student Name (ID)</label>
            <select type="text" class="form-control" name="student_id">
                <?php 
                    foreach($students as $student){
                        $selected = $transaction['student_id'] === $student['id'] ? 'selected' : '';
                        echo "<option $selected value='{$student['id']}'>
                                {$student['name']} {$student['lastname']} ( {$student['id']} )
                              </option>";
                    }
                ?>
                
            </select>
        </div>

        <div class="d-grid mt-3">
            <input type="submit" class="btn btn-block btn-warning" value="<?= $button_label?> Transaction">
        </div>
    </form>
</div>

