<?php
require_once "./Animal.php";

class Chat extends Animal{
    
    public function __construct(string $nom){
        parent::__construct($nom);
    }
    public function miauler(){
        print "<h3>" .$this->nom ." Miaou Miaou!</h3>";
    }
    public function jouer(){
        print "<h3>Le chat " .$this->nom ." joue</h3>";
    }
}



?>