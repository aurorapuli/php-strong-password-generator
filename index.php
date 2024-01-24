<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php

       require_once __DIR__ . "/partials/functions.php";
       
       

    ?>
</head>
<body>
    

<form>
    <label for="password">Quanto deve essere lunga la tua password</label>
    <input type="number" name="number">
    <input type="submit" value="invio">
</form>

<?php

$number = $_GET['number'];

lenghtPassword($number);


echo "<h1> la tua passqord generata è: " .lenghtPassword($number) ."</h1>";



?>
</body>
</html>