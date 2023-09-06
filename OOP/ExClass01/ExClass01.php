
<?php
include "JeuSociete.php";
include "Personne.php";
include "Film.php";

//create an object jeu1 and jeu2
$jeu1 = new JeuSociete("Monopoly", 2, 4);
$jeu2 = new JeuSociete("Risk", 2, 6);
//create an object personne1 and personne2
$personne1 = new Personne();
$personne2 = new Personne();
//set the values of the properties of the object personne1 and personne2
$personne1->nom = "Dupont";
$personne1->dateNaissance = new DateTime("1980-05-10");
$personne2->nom = "Durand";
$personne2->dateNaissance = new DateTime("1985-07-15");
//call the function jouer
$jeu1->jouer();
//call the function afficer
$jeu1->afficher();
$jeu2->afficher();

$film1 = new Film("Titanic", 120, 1000);
$film1->afficher();


print("<h3>Le titre du film1 est: " . $film1->getTitre());
$film1->setTitre("The green butcher");
$fil1->setPrix(-100);

?>
    
