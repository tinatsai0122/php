<?php

//Array associatif(index"text")

//Creation

$student = ["prenom" => "Laurence",
            "nom" => "Dupont", 
            "hobby" =>"lire"];
print_r($student);

//Acceder un element
print($student["nom"]);

//effacer un element
unset($student["hobby"]);
print_r($student);

//mode deprim
//$student["prenom"] = null;
//print_r($student);

//Ajouter un element
$student["salaire"] = 900000;
print_r($student);
print_r(array_keys($student));
print_r(array_values($student));



?>