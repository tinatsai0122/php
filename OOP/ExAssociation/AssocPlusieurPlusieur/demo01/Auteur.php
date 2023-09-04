<?php

class Auteur{
    private string $nom;
    private string $prenom;
    private string $nationalite;

    //associations
    public array $livres=[];

    public function __construct(string $nom, string $prenom, string $nationalite){
            $this->nom=$nom;
            $this->prenom=$prenom;
            $this->nationalite=$nationalite;
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

    /**
     * Get the value of prenom
     *
     * @return string
     */
    public function getPrenom(): string {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @param string $prenom
     *
     * @return self
     */
    public function setPrenom(string $prenom): self {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Get the value of nationalite
     *
     * @return string
     */
    public function getNationalite(): string {
        return $this->nationalite;
    }

    /**
     * Set the value of nationalite
     *
     * @param string $nationalite
     *
     * @return self
     */
    public function setNationalite(string $nationalite): self {
        $this->nationalite = $nationalite;
        return $this;
    }
    
    public function addLivre(Livre $livre): self {
        $this->livres[] = $livre;
        $livre->auteurs[]=$this;

    }
    
    
    

}

?>