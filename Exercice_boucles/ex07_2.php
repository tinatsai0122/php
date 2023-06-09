<?php

$times = readLine("How many numbers do you want to do the multiplication: ");

$mul=1;
for ($i = 0; $i < $times ; $i++){
    $number = readLine("Give me a number: ");
        $mul = $mul * $number;

}

print($mul ."\n");



?>