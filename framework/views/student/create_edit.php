
<div class="container">
<a href="<?= ROOT_URL ?>" class="btn btn-primary my-5"> <-- </a>
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

