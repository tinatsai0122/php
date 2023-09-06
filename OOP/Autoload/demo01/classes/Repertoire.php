<?php

//include_once "contact.php";

class Repertoire {
    private string $nom;
    private string $description;
   
    //association
    private array $contacts = [];
    public function __construct(string $nom, string $description) {
        $this->nom = $nom;
        $this->description = $description;
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
     * Get the value of description
     *
     * @return string
     */
    public function getDescription(): string {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self {
        $this->description = $description;
        return $this;
    }

    //add contact to the array and set the repertoire
    public function addContact(Contact $c):self{
        $this->contacts[] = $c;
        $c->setRepertoire($this);
        return $this;
    }

    }

?>