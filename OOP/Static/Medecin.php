<?php

class Medecin{
    private string $inami;
    private string $nom;
    //stactic property = property with same value for all instances, can't be changed.
    private static string $serment = "Traiter correctement les patient.";

    //adding default value to constructor
    public function __construct(string $inami="0000", string $nom="name")
    {   
        $this->inami = $inami;
        $this->nom = $nom;
}

    public static function getSerment(): string{
        return self::$serment;
    }

//init static property
    public static function  setSerment(string $serment){
        self::$serment = $serment;
    }

    /**
     * Get the value of inami
     *
     * @return string
     */
    public function getInami(): string {
        return $this->inami;
    }

    /**
     * Set the value of inami
     *
     * @param string $inami
     *
     * @return self
     */
    public function setInami(string $inami): self {
        $this->inami = $inami;
        return $this;
    }

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