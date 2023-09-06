<?php

class Film{
    private string $titre;
    private int $duree;//en minutes
    private float $prix;


//method constructeur
    public function __construct(string $titre, int $duree, float $prix)
    {
        $this->titre = $titre;
        $this->duree = $duree;
    }

    //getters and setters (for other developers not change the values of the properties directly, so we can control the values)
    public function getTitre(): string{
        return $this->titre;
    }
    public function getDuree(): int{
        return $this->duree;
    }
    public function getPrix(): float{
        return $this->prix;
    }
    public function setTitre(string $titre): void{
        $this->titre = $titre;
    }
    public function setDuree(int $duree): void{
        $this->duree = $duree;
    }
    public function setPrix(float $prix): void{
        if($prix <= 0){
            $this->prix = $prix;
    }else{
        throw new Exception ("prix dois etre positive");
    }
    }

    public function afficher(){
        print("<h3>Le film " . $this->titre . " dure " . $this->duree . " minutes</h3>");
    }
        
    }



?>