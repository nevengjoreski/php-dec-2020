<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>

    <div class="navigation-menu">
        <div class="nav custom">
            <a href="<?= ROOT_URL . '/student/index' ?>">Studenti</a>
        </div>
        <div class="nav custom">
            <a href="<?= ROOT_URL . '/transaction/index' ?>">Transaction</a>
        </div>
    </div>

    <style>
        .navigation-menu{
            display:flex;
            justify-content:center;
        }

        .nav{
            padding:10px;
            text-align:center;
        }

    </style>
    
</body>
</html>