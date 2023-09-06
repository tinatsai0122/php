<?php

require_once "./Animal.php";

final class Chien extends Animal{
    protected bool $garde;

    public function __construct(string $nom, bool $garde = false){
        $this->garde = $garde;
        parent::__construct($nom);
    }
    
    public function aboyer(){
        print "<br><h3>" .$this->nom ." Wouf Wouf</h3>";
    }
    public function jouer(){
        print "<br><h3>" .$this->nom ." joue</h3>";
    }

    /**
     * Get the value of garde
     *
     * @return bool
     */
    public function getGarde(): bool {
        return $this->garde;
    }

    /**
     * Set the value of garde
     *
     * @param bool $garde
     *
     * @return self
     */
    public function setGarde(bool $garde): self {
        $this->garde = $garde;
        return $this;
    }

        //abstract method from parent class
        public function manger(){
            print "<h3>Le chien " .$this->nom ." mange d'os!</h3>";
        }
}


?>