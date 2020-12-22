<?php

$colors = ['yellow', 'brown', 'pink', 'blue', 'green'];

?>

<h2>Primer 1 dropdown</h2>
<select name="" id="">
    <?php foreach($colors as $color){
        echo "<option>$color</option>";
    }?>
</select>

<h2>Primer 2 dropdown</h2>
<select name="" id="">
    <?php foreach($colors as $color){ ?>
        <!-- <option value=""><?php echo $color ?></option> -->
        <option value=""><?= $color ?></option>
    <?php } ?>
</select>

<h2>Primer 3 dropdown</h2>
<?php
    echo '<select>';
    foreach($colors as $color){
        echo "<option>$color</option>";
    }
    echo '</select>';

?>