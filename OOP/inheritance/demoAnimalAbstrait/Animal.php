<?php


abstract class Animal{
    protected string $nom;
    public function __construct(string $nom){
        $this->nom=$nom;
    }
//Abstract method need to be defined in the child class, not parent class
    public abstract function manger();

    /**
     * Get the value of nom
     *
     * @return string
     */
    public function getNom(): string {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param string $nom
     *
     * @return self
     */
    public function setNom(string $nom): self {
        $this->nom = $nom;
        return $this;
    }
}

?>