<?php
    
    class Film{
        private string $titre;
        private int $duree;

        //associations
        public array $seances=[];

        public function __construct(string $titre, int $duree){
            $this->titre=$titre;
            $this->duree=$duree;
        }
        

        /**
         * Get the value of titre
         *
         * @return string
         */
        public function getTitre(): string {
                return $this->titre;
        }

        /**
         * Set the value of titre
         *
         * @param string $titre
         *
         * @return self
         */
        public function setTitre(string $titre): self {
                $this->titre = $titre;
                return $this;
        }

        /**
         * Get the value of duree
         *
         * @return int
         */
        public function getDuree(): int {
                return $this->duree;
        }

        /**
         * Set the value of duree
         *
         * @param int $duree
         *
         * @return self
         */
        public function setDuree(int $duree): self {
                $this->duree = $duree;
                return $this;
        }

        public function addSeance(seance $seance){
            $this->seances[]=$seance;
            $seance->setFilm($this);
        }
    }

?>