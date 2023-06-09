<?php

// Declaration a function
function afficheBonjour(){
    print("\nBonjour!");
}

for ($i=0;$i<10;$i++)
// call a function
afficheBonjour();

function sum(float $n1, float $n2):float{
    $result = $n1 + $n2;
    return $result;
}

//call the function
print("\n" .sum(4.8,100.5));

sum(4.8,100.5);

$resultsum = sum(4.8,100.5);
print("\n" .$resultsum);

//creation a function
function renverse(string $nom){
    $result = ucfirst (strtolower (strrev($nom)));
    return $result;
}
$nom = "Laurence";
print("\n" .renverse($nom));

$nomRenverse = renverse($nom);
print("\n" .$nomRenverse);

//Creation a function that modify the original string but no need to send back(renvoyer)

function renverseModif(string &$nom):void{
    $nom = "Lola"; 
}

$nom2 = "Hsin I";
renverseModif($nom2);
print($nom2);

?>

//Creation a function that not modify the original string but renvoyer the string

function renverseModif(string $nom):void{
    $nom = "Lola"; 
}

$nom2 = "Hsin I";
renverseModif($nom2);
print($nom2);

?>