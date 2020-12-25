<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naracka</title>
</head>
<body>
    
    <form action="" method="get">
    
        <input type="text" name="nesto">
        <input type="submit" value="Submit">
    </form>

    <?php

        function pre($array){
            echo '<pre>';
            print_r($array);
            echo '<pre>';
        }

        if( !empty($_REQUEST) ){
            pre($_REQUEST);
            echo 'I got the GET';
        }

    ?>

</body>
</html>