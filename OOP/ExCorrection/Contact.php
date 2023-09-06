<?php
class Contact {
    private string $nom;
    private string $prenom;
    private string $gsm;

    public function __construct(string $nom, string $prenom, string $gsm) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->gsm = $gsm;
    }
    public function setNom(string $newNom):self{
        $this->nom = $newNom;
        return $this;
    }
    public function setPrenom(string $newPrenom):self{
        $this->prenom = $newPrenom;
        return $this;
    }
    public function setGsm(string $newGsm):self{
        $this->gsm = $newGsm;
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