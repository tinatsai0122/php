<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Result of flights search.</h1>
    <?php

    //connect to database
    include "./config/db.php";

try{
    $cnx = new PDO (DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT .';dbname=' . DBNAME . ';charset='. DBCHARSET, DBUSER, DBPASSWORD);
    }
    catch(Exception $e){
    // ce code sera lance s'il y a une erreur de connexion.
    echo "Erreur de connexion a la BD";
    die();
    
    }
    
// search id of depart airport
    $sql = "SELECT id FROM airport WHERE iata = :iata";
    $stmt = $cnx->prepare($sql);
    $stmt->bindValue(":iata", $_POST["depart"]);
    $stmt->execute();
//fetch the result directly, fetchAll will return multiple arrays. fetch will return one array.    
//fetch the result directly, fetchAll will return multiple arrays. fetch will return one array.
    $idDepart = $stmt->fetch(PDO::FETCH_ASSOC)["id"];

// search id of arrive airport
    $sql = "SELECT id FROM airport WHERE iata = :iata";
    $stmt = $cnx->prepare($sql);
    $stmt->bindValue(":iata", $_POST["arrive"]);
    $stmt->execute();
    $idArrive = $stmt->fetch(PDO::FETCH_ASSOC)["id"];


    // search flights correspondent to id of depart and arrive airports
    $sql = "SELECT * FROM flight WHERE idDepart = :idDepart AND idArrive = :idArrive";
    $stmt = $cnx->prepare($sql);
    $stmt->bindValue(":idDepart", $idDepart);
    $stmt->bindValue(":idArrive", $idArrive);
    $stmt->execute();

//on veat tous les vols
    $flights = $stmt->fetchAll(PDO::FETCH_ASSOC);

//display the result
print("<h2>Flights found between " . $_POST["depart"] . " and " . $_POST["arrive"] . "</h2>");
print("<ul>");

foreach ($flights as $flight) {
    print("<li>Flight number: " . $flight["code"] . "</li>");

    // Format the departure time
print("<h2>Flights found between " . $_POST["depart"] . " and " . $_POST["arrive"] . "</h2>");
print("<ul>");

foreach ($flights as $flight) {
    print("<li>Flight number: " . $flight["code"] . "</li>");

    // Format the departure time
    $departureDateTime = new DateTime($flight["dateHourDepart"]);
    $formattedDepartureTime = $departureDateTime->format('Y-m-d H:i');
    print("<li>Departure time: " . $formattedDepartureTime . "</li>");

    // Print the arrival time
    $ArrivalDateTime = new DateTime($flight["dateHourArrive"]);
    $formattedArrivalTime = $ArrivalDateTime->format('Y-m-d H:i');
    print("<li>Departure time: " . $formattedArrivalTime . "</li>");
    print("<li>Arrival time: " . $flight["dateHourArrive"] . "</li>");
}

print("</ul>");


    // Print the arrival time

    print("<li>Arrival time: " . $flight["dateHourArrive"] . "</li>");
}

print("</ul>");



?>



</body>
</html>

