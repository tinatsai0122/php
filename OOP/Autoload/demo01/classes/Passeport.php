<?php

class Passeport{
    private string $numero;
    private DateTime $dateFinValidite;

    //association
    private Personne $personne;

    public function __construct(string $numero, DateTime $dateFinValidite){
        $this->numero = $numero;
        $this->dateFinValidite = $dateFinValidite;
    }
    

    /**
     * Get the value of numero
     *
     * @return string
     */
    public function getNumero(): string {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @param string $numero
     *
     * @return self
     */
    public function setNumero(string $numero): self {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Get the value of dateFinValidite
     *
     * @return DateTime
     */
    public function getDateFinValidite(): DateTime {
        return $this->dateFinValidite;
    }

    /**
     * Set the value of dateFinValidite
     *
     * @param DateTime $dateFinValidite
     *
     * @return self
     */
    public function setDateFinValidite(DateTime $dateFinValidite): self {
        $this->dateFinValidite = $dateFinValidite;
        return $this;
    }

    /**
     * Get the value of personne
     *
     * @return Personne
     */
    public function getPersonne(): Personne {
        return $this->personne;
    }

    /**
     * Set the value of personne
     *
     * @param Personne $personne
     *
     * @return self
     */
    public function setPersonne(Personne $personne): self {
        $this->personne = $personne;
        return $this;
    }
    public function afficher():void{
        printf("<h4>Passeport n° %s, valable jusqu'au %s\n", $this->numero, $this->dateFinValidite->format("d/m/Y")."</h4>");
    }
}

?>