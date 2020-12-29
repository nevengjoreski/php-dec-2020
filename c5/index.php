<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- GET POST -->
    <!-- PUT PATCH DELETE -->
    <form method="POST" action="login.php">

        <label for="username">Username :</label>
        <input type="text" id="username" name="username" autocomplete="off"
            pattern=".{8,}" placeholder="min 8 charachters">
    
        <br><br>

        <label for="password">Password :</label>
        <input type="password" name="password" id="password"
                pattern=".{8,}" placeholder="min 8 charachters">

        <br><br>

        <input type="submit" value="LogIn">
        <!-- <input type="button" value="LogIn" onclick="this.form.submit()"> -->

    </form>

    <!-- <label for="chk">Test</label>
    <input type="checkbox" name="chk" id="chk"> -->

</body>
</html>

