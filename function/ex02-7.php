<?php

function saluer(string $nom):string {
    $result = print(("\nBonjour, $nom"));
    return $result;
} 

For ($i = 0; $i<10;$i++){

$nom = readLine("Please enter a name: ");
print(saluer($nom));
}



?>