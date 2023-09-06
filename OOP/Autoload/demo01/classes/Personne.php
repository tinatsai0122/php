<?php

class Personne{
    private string $nom;
    private string $prenom;

    //association
    private array $passeports = [];

    public function __construct(string $nom, string $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
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

    

    public function addPasseport(Passeport $passeport): self{
        $this->passeports[] = $passeport;
        $passeport->setPersonne($this);
        return $this;

    }
//affichier tous les passeports
    public function showAllPasseport(): void{
        foreach($this->passeports as $passeport){
            $passeport->afficher();
        }
    }
}

?>