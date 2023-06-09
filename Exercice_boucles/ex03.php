<?php

$age = (int)readLine("How old are you: ");
$count = 1;

while(($age <= 0 OR $age >= 130) AND $count <3){
    $age = (int)readLine("How old are you: ");
    $count++;
}


if ($age >= 18 AND $age < 130 ){
    echo("Wellcome!");
}

elseif ($age > 0 AND $age < 18 ){
    echo("You are too young!");
}

?>