<?php

class Serie {
    private string $titre;
    private string $realisateur;
    private string $genre;
    private array $listPers = [];

    public function __construct(string $titre, string $realisateur, string $genre, array $listPersons = []) {
        $this->titre = $titre;
        $this->realisateur = $realisateur;
        $this->genre = $genre;
        $this->listPers = $listPersons;
    }

    public function afficher() {
        echo "Le titre de la série est " . $this->titre . "<br> le réalisateur est " . $this->realisateur . "<br> le genre est " . $this->genre . "<br> les personnages sont: ";
        foreach ($this->listPers as $person) {
            print $person->getFullName() . " (" . $person->getRole() . "), ";
        }
    }

    public function ajouterPersonnage(string $nom, string $prenom, string $role) {
        $person = new Person($nom, $prenom, $role);
        $this->listPers[] = $person;
    }
}

class Person {
    private string $nom;
    private string $prenom;
    private string $role;

    public function __construct(string $nom, string $prenom, string $role) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->role = $role;
    }

    public function getFullName() {
        return $this->prenom . " " . $this->nom;
    }

    public function getRole() {
        return $this->role;
    }
}

?>

