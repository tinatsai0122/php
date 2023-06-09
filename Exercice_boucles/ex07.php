<?php

$number = readLine("Enter a number: ");

$count = 1;
$mul = $number;

while ($count< 10){
    $number = readLine("Enter a number: ");
    $mul = $mul * $number;
        print($mul ."\n");
    $count++;
}


?>