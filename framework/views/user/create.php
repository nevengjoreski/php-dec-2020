
<div class="container">

<a href="<?= ROOT_URL ?>" class="btn btn-primary my-5"> <-- </a>
    <form action="<?= $action ?>" class="row" method="post">

        <input type="hidden" name="id" value="<?= $id ?? '' ?>">

        <div class="col-sm-12">
            <label for="">Username</label>
            <input type="text" class="form-control" 
                name="username" value="<?= $user['username'] ?? '' ?>">

            <label for="">Password</label>
            <input type="password" class="form-control" 
                name="password" value="<?= @$user['password'] ?>">
        </div>

        <div class="d-grid mt-3">
            <input type="submit" class="btn btn-block btn-warning" value="<?= $button_label?> User">
        </div>
    </form>
</div>

