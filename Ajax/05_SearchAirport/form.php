<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- import JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- import select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- import fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
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

$sql = "SELECT * FROM airport ORDER BY iata ASC";


//3. prepare the query

$stmt = $cnx->prepare($sql);

//4. execute the query
$stmt->execute();

//5. fetch the result
$arrAirports = $stmt->fetchAll(PDO::FETCH_ASSOC);

//var_dump($arrAirports);
//die();

//6. encoding the result in JSON
//print(json_encode($arrAirports));

//7. print JSON
?>
<body>
    <form id="form_Search" action="./formTraitement.php" method="POST">
        Depart
        <select class="select_airport" name="select_depart" id="select_depart">
            <?php
            foreach($arrAirports as $airport){
                print "<option value='" . $airport['id'] . "'>" . $airport['iata'] ." - " . $airport['description'] ."</option>";
            }
            //<option value="1">BRU - Airport Brussels</option>
            ?>
        </select>
        <i class="fa-solid fa-arrows-left-right"></i>
        Arrive
        <select class="select_airport" name="select_arrive" id="select_arrive">
            <?php
            foreach($arrAirports as $airport){
                print "<option value='" . $airport['id'] . "'>" . $airport['iata'] ." - " . $airport['description'] ."</option>";
            }
            //<option value="1">BRU - Airport Brussels</option>
            ?>
        </select>
        <input type="submit" value="Search flight">
    </form>
</body>
<script>
    //function queryselector de jquery
    $(document).ready(function() {
         $('.select_airport').select2();
    });
</script>

</html>