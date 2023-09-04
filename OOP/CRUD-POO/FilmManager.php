<?php
//faire le CRUD de la classe Film dans la BD

class FilmManager{
    private PDO $cnx;

    public function __construct(PDO $cnx){
        $this->cnx=$cnx;
    }

    public function insert(Film $film){
        $sql = "INSERT INTO film (id, titre, duree) VALUES (null, :titre, :duree)";
        $stmt = $this->cnx->prepare($sql);
        $stmt->bindValue(":titre", $film->getTitre());//becuase Titre is private, in order to access it, we need to use getter
        $stmt->bindValue(":duree", $film->getDuree());//becuase Duree is private, in order to access it, we need to use getter
        $stmt->execute();

        if($stmt->errorCode() != 0){
            print_r($stmt->errorInfo());
        }
    }

    //public function delete(Film $film){}

    //public function update(Film $film){}
    //public function select(criteres de recherche){}


    
}


?>