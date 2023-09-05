<?php


class CinemaManager{
    private PDO $cnx; //PDO = PHP Data Object
//Dependent Injection (DI) :objet CinemaManager a besoin d'un objet PDO pour fonctionner
    public function __construct(PDO $cnx){
        $this->cnx=$cnx;
    }


    public function insert(Cinema $c){
        $sql = "INSERT INTO cinema (id, nom, contact) VALUES(null, :nom, :contact)";
        $stmt = $this->cnx->prepare($sql);
        $stmt->bindValue(":nom",$c->getNom());
        $stmt->bindValue(":contact", $c->getContact());
        $stmt->execute();
        //add the id generated by the database to the current object
        $lastId = $this->cnx->lastInsertId();
        $c->setID($lastId);
        //error management
        if($stmt->errorCode() != 0){
            print_r($stmt->errorInfo());
        }
}
    public function delete(Cinema $c){
        $sql = "DELETE FROM cinema WHERE id = :id";
        $stmt = $this->cnx->prepare($sql);
        $stmt->bindValue(":id",$c->getID());
        $stmt->execute();
        //error management
        if($stmt->errorCode() != 0){
            print_r($stmt->errorInfo());
        }
        
    }

}
?>