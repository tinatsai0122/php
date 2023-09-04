<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include "./config/db.php";
include "./Film.php";
include "./FilmManager.php";

//faire le CRUD de la classe Film dans la BD
//CRUD = Create, Read, Update, Delete
//Create = insert
try{
    $cnx = new PDO (DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT .';dbname=' . DBNAME . ';charset='. DBCHARSET, DBUSER, DBPASSWORD);
    }
    catch(Exception $e){
    // ce code sera lance s'il y a une erreur de connexion.
    echo "Erreur de connexion a la BD";
    die();
    
    }
   

 $f1 = new Film("Barbie", 120);
 $f2 = new Film("Oppenheimer", 180);
 $filmManager = new FilmManager($cnx);
 $filmManager->insert($f1);
 $filmManager->insert($f2);

//chercher un film par titre
//$filmsTrouves = $filmManager->select();

?>

    
</body>
</html>