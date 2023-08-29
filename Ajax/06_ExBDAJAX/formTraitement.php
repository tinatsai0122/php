<?php
//var_dump($_POST);
include "./config/db.php";

try{
    $cnx = new PDO (DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT .';dbname=' . DBNAME . ';charset='. DBCHARSET, DBUSER, DBPASSWORD);
    }
    catch(Exception $e){
    // ce code sera lance s'il y a une erreur de connexion.
    echo "Erreur de connexion a la BD";
    die();
    
    }
    
    //create query SELECT
    $sql = "SELECT * FROM airport WHERE iata LIKE :codeAirport";

    
    //3. prepare the query
    $stmt = $cnx->prepare($sql);

    //insensitive case for codeAirport
    $stmt->bindValue(":codeAirport", strtoupper($_POST["depart"]));
    $stmt->bindValue(":codeAirport", strtoupper($_POST["arrive"]));
    
    //4. bind parameters adding %, to search for partial matches
    if($_POST["input_modify"]=="depart"){
        $stmt->bindValue(":codeAirport", "%". $_POST["depart"]."%");
    }
    else{
        $stmt->bindValue(":codeAirport", "%". $_POST["arrive"]."%");
    }

    //5. execute the query
    $stmt->execute();

    //6. fetch the result
    $arrAirports = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>
