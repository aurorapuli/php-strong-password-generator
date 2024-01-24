<?php

 function lenghtPassword( $password){

    $caratteri = 'abcdefg6592927hijklm53929nopqrstuvwxyzABCDE533FGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+[4389]{}|;:,.<>?';

    
    $caratteriMisti = str_shuffle($caratteri);

   
    $parolaCasuale = substr($caratteriMisti, 0, $password);


    if($password < 8){
        return "<h1> La password deve essere minore di 8 caratteri";
    }

    return $parolaCasuale;


}