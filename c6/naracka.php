<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naracka</title>
</head>
<body>
    
    <form action="naplata.php" method="POST">
    
        <h3>Glaven Obrok</h3>

        <input type="radio" name="glaven_obrok" id="hamburger" value="hamburger">
        <label for="hamburger">Hamburger</label>

        <br>

        <input type="radio" name="glaven_obrok" id="chicken" value="chicken">
        <label for="chicken">Chicken</label>

        <br>

        <input type="radio" name="glaven_obrok" id="hotdog" value="hotdog">
        <label for="hotdog">Hotdog</label>

        <h3>Dodatoci</h3>

        <input type="checkbox" name="dodatoci[]" id="pomfrit" value="pomfrit">
        <label for="pomfrit">Pomfrit</label>

        <br>

        <input type="checkbox" name="dodatoci[]" id="pavlaka" value="pavlaka">
        <label for="pavlaka">Pavlaka</label>

        <br>

        <input type="checkbox" name="dodatoci[]" id="pecurki" value="pecurki">
        <label for="pecurki">Pecurki</label>

        <h3>Sosovi</h3>

        <input type="checkbox" name="sosovi[]" id="majonez" value="majonez">
        <label for="majonez">Majonez</label>

        <br>

        <input type="checkbox" name="sosovi[]" id="kecap" value="kecap">
        <label for="kecap">Kecap</label>

        <br>

        <input type="checkbox" name="sosovi[]" id="senf" value="senf">
        <label for="senf">Senf</label>

        <br><br>

        <input style="width:100%" type="submit" value="Naracaj">

    </form>


</body>
</html>