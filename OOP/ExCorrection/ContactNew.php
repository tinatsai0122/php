<?php
class ContactNew {

    public function __construct(private string $nom, private string $prenom, private string $gsm) {
    }

    public function afficher() {
        print("<h3>Nom: " . $this->nom . "<br>Prenom: " . $this->prenom . "<br>GSM: " . $this->gsm . "</h3>");
    }
}


?>