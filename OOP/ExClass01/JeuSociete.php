<?php

class JeuSociete {
    //propriétés
    public string $nom;
    public int $minJoueur;
    public int $maxJoueur;
    //method constructeur
    public function __construct(string $nom, int $minJoueur, int $maxJoueur) {
        $this->nom = $nom;
        $this->minJoueur = $minJoueur;
        $this->maxJoueur = $maxJoueur;
}
    //fonctionalites show the name of the game and the number of players
    public function afficher() {
        echo "Le jeu " . $this->nom . " se joue de " . $this->minJoueur . " à " . $this->maxJoueur . " joueurs";
    }
    //function to play the game
    public function jouer() {
        print("<h3>On va joue au jeu " . $this->nom . "</h3>");
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
}


?>