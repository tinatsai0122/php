<?php


//1. create connection to database
include "./config/db.php";

try{
    $cnx = new PDO (DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT .';dbname=' . DBNAME . ';charset='. DBCHARSET, DBUSER, DBPASSWORD);
    }
    catch(Exception $e){
    // ce code sera lance s'il y a une erreur de connexion.
    echo "Erreur de connexion a la BD";
    die();
    
    }

//2. create query SELECT

$sql = "SELECT * FROM airport";


//3. prepare the query

$stmt = $cnx->prepare($sql);

//4. execute the query
$stmt->execute();

//5. fetch the result
$arrAirports = $stmt->fetchAll(PDO::FETCH_ASSOC);

//var_dump($arrAirports);
//die();

//6. encoding the result in JSON
print(json_encode($arrAirports));

//7. print JSON



?>