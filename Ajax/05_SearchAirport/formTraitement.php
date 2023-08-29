<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
//recuperer les airpots depart and arrive
$airport_depart = ($_POST["select_depart"]);
$airport_arrive = ($_POST["select_arrive"]);

//faire une recherche de vols dans la BD



//afficher les vols
print("Airport Depart: " . $airport_depart . "<br>");
print("Airport Arrive: " . $airport_arrive . "<br>");



?>


</body>
</html>