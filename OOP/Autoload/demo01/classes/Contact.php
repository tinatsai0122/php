<?php
class Contact {
    private string $nom;
    private string $prenom;
    private string $gsm;

    //association
    private Repertoire $repertoire;

    public function __construct(string $nom, string $prenom, string $gsm) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->gsm = $gsm;
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
     * Get the value of gsm
     *
     * @return string
     */
    public function getGsm(): string {
        return $this->gsm;
    }
    
    /**
     * Set the value of gsm
     *
     * @param string $gsm
     *
     * @return self
     */
    public function setGsm(string $gsm): self {
        $this->gsm = $gsm;
        return $this;
    }
    /**
     * Get the value of repertoire
     *
     * @return Repertoire
     */
    public function getRepertoire(): Repertoire {
        return $this->repertoire;
    }
    
    /**
     * Set the value of repertoire
     *
     * @param Repertoire $repertoire
     *
     * @return self
     */
    public function setRepertoire(Repertoire $repertoire): self {
        $this->repertoire = $repertoire;
        return $this;
    }

    
    public function afficher() {
        print("<h3>Nom: " . $this->nom . "<br>Prenom: " . $this->prenom . "<br>GSM: " . $this->gsm . "</h3>");
    }

    
}

class Image{
    public function __construct(private string $src, private string $alt){
    }
    public function afficher(){
        print("<img src='" . $this->src . "' alt='" . $this->alt . "'>");
    }
}

?>