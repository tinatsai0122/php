<?php

class Cinema{
    private string $nom;
    private string $contact;

    //associations
    public array $seances=[];

    public function __construct(string $nom, string $contact){
        $this->nom=$nom;
        $this->contact=$contact;
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
     * Get the value of contact
     *
     * @return string
     */
    public function getContact(): string {
        return $this->contact;
    }

    /**
     * Set the value of contact
     *
     * @param string $contact
     *
     * @return self
     */
    public function setContact(string $contact): self {
        $this->contact = $contact;
        return $this;
    }

    public function addSeance(Seance $seance){
        $this->seances[]=$seance;
        $seance->setCinema($this);
    }
}

?>