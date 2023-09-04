<?php

class Livre{
    private string $isbn;
    private string $titre;

    //associations
    public array $auteurs=[];

    public function __construct(string $isbn, string $titre){
        $this->isbn=$isbn;
        $this->titre=$titre;
    }
    
        

    /**
     * Get the value of isbn
     *
     * @return string
     */
    public function getIsbn(): string {
        return $this->isbn;
    }

    /**
     * Set the value of isbn
     *
     * @param string $isbn
     *
     * @return self
     */
    public function setIsbn(string $isbn): self {
        $this->isbn = $isbn;
        return $this;
    }

    /**
     * Get the value of titre
     *
     * @return string
     */
    public function getTitre(): string {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @param string $titre
     *
     * @return self
     */
    public function setTitre(string $titre): self {
        $this->titre = $titre;
        return $this;
    }
    
    public function addAuteur(Auteur $auteur): self{
        $this->auteurs[]=$auteur;
        $auteur->livres[]=$this; // $this représente l'objet courant (ici le livre
        return $this;
    }
    }


?>