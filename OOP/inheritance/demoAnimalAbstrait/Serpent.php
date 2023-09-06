<?php
require_once "./Animal.php";

class Serpent extends Animal{
    public string $typeEcaille;

    public function __construct(string $nom, string $typeEcaille){
        $this->typeEcaille = $typeEcaille;
        parent::__construct($nom);
    }
        public function siffer(){
            print("<br><h3>Le Serpent " .$this->nom ." Ssss Ssss</h3>");
        }
    }


?>