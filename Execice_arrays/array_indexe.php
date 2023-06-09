<?php

//Array Indexe (index numerique)

//Creation
$tab = [4,5,6,10];
$tab2 = array(10,20,30);
//both method can be done

//Access to an element (afficher un element)
print($tab[1]);

//Ajouter un element
//1. Ajouter a la fin
$tab[] =99;

print_r($tab);

//2.Ajouter en specifiant l'indez

$tab[5] = 100;
print_r ($tab);

$tab[9] = 2000;
print_r ($tab);

//Effacer un element
unset($tab[9]);
print_r ($tab);

//Modifier/remplacer un element
$tab[3] = 2000;
print_r ($tab);




?>