<?php

$i=0;
while ($i <5){
    $nom = readLine("What's your name: ");
    $i ++ ;

    $count = 0;
    while ($count <3){
        print("Bonjour, $nom." ."\n");
        $count++;
}
}

?>