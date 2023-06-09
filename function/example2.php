<?php

//fonction qui modifie le string original et renvoie la taille du string

function renverseModifReturn(string &$nom):int {
$nom = ucfirst(strtolower(strrev($nom)));
$laTaille = strlen($nom);
return $laTaille;

} 

$nom3 = "Helene";
$taille = renverseModifReturn(($nom3));
print("Le nom renverse: " .$nom3 ."a une longueur de : " .$laTaille);


?>