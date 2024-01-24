<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form>
    <label for="password">Quanto deve essere lunga la tua password</label>
    <input type="number" name="number">
    <input type="submit" value="invio">
</form>

<?php

$number = $_GET['number'];

function lenghtPassword( $password){

    $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+[]{}|;:,.<>?';

    
    $caratteriMisti = str_shuffle($caratteri);

   
    $parolaCasuale = substr($caratteriMisti, 0, $password);


    if($password < 8){
        return "<h1> La password deve essere minore di 8 caratteri";
    }

    return $parolaCasuale;


}


echo "<h1> la tua passqord generata è: " .lenghtPassword($number) ."</h1>";



?>
</body>
</html>