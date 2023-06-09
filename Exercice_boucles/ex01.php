<?php

$age = (int)readLine("How old are you: ");


while ($age <= 0 OR $age >= 130){
    $age = (int)readLine("How old are you: ");
}

if ($age >= 18){
    echo("Wellcome!");
}
elseif ($age<18){
    echo("You are too young!");
}

?>