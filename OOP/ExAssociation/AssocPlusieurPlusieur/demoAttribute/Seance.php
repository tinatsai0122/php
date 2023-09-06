<?php

class Seance{
    private DateTime $dateProjection;
    private string $salle;

    //associations
    private Film $film;
    private Cinema $cinema;

    public function __construct(DateTime $dateProjection, string $salle){
        $this->dateProjection=$dateProjection;
        $this->salle=$salle;
        
    }

    /**
     * Get the value of dateProjection
     *
     * @return DateTime
     */
    public function getDateProjection(): DateTime {
        return $this->dateProjection;
    }

    /**
     * Set the value of dateProjection
     *
     * @param DateTime $dateProjection
     *
     * @return self
     */
    public function setDateProjection(DateTime $dateProjection): self {
        $this->dateProjection = $dateProjection;
        return $this;
    }

    /**
     * Get the value of salle
     *
     * @return string
     */
    public function getSalle(): string {
        return $this->salle;
    }

    /**
     * Set the value of salle
     *
     * @param string $salle
     *
     * @return self
     */
    public function setSalle(string $salle): self {
        $this->salle = $salle;
        return $this;
    }

    /**
     * Get the value of film
     *
     * @return Film
     */
    public function getFilm(): Film {
        return $this->film;
    }

    /**
     * Set the value of film
     *
     * @param Film $film
     *
     * @return self
     */
    public function setFilm(Film $film): self {
        $this->film = $film;
        return $this;
    }

    /**
     * Get the value of cinema
     *
     * @return Cinema
     */
    public function getCinema(): Cinema {
        return $this->cinema;
    }

    /**
     * Set the value of cinema
     *
     * @param Cinema $cinema
     *
     * @return self
     */
    public function setCinema(Cinema $cinema): self {
        $this->cinema = $cinema;
        return $this;
    }


}

?>