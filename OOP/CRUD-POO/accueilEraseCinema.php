<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//delete one cinema by title
require_once "./Cinema.php";
require_once "./CinemaManager.php";
require_once "./config/db.php";

try{
    $cnx = new PDO (DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT .';dbname=' . DBNAME . ';charset='. DBCHARSET, DBUSER, DBPASSWORD);
    }
    catch(Exception $e){
    // ce code sera lance s'il y a une erreur de connexion.
    echo "Erreur de connexion a la BD";
    die();
    
    }
    $cm = new CinemaManager($cnx);



    ?>
    
</body>
</html>