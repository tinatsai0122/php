<?php

class Film
{
    private int $id; //you need to add id in order to use it in the CRUD
    private string $titre;
    private int $duree;

    // association
    private array $seances;

    public function __construct(int $id, string $titre, int $duree)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->duree = $duree;

        /**
         * Get the value of id
         */
        public function getId() {
                return $this->id;
        }

        /**
         * Set the value of id
         */
        public function setId($id): self {
                $this->id = $id;
                return $this;
        }
    }


    /**
     * Get the value of titre
     *
     * @return string
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @param string $titre
     *
     * @return self
     */
    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of duree
     *
     * @return int
     */
    public function getDuree(): int
    {
        return $this->duree;
    }

    /**
     * Set the value of duree
     *
     * @param int $duree
     *
     * @return self
     */
    public function setDuree(int $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get the value of seances
     *
     * @return array
     */
    public function getSeances(): array
    {
        return $this->seances;
    }

    /**
     * Set the value of seances
     *
     * @param array $seances
     *
     * @return self
     */
    public function setSeances(array $seances): self
    {
        $this->seances = $seances;

        return $this;
    }

    // rajouter les éléments de la collection
    public function addSeance(Seance $seance)
    {
        $this->seances[] = $seance;
        // liens seance->film
        $seance->setFilm($this);
    }
}
