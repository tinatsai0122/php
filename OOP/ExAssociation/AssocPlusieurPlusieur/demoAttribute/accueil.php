<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once "./Cinema.php";
    require_once "./Seance.php";
    require_once "./Film.php";

    $cinema1=new Cinema("Kinepolis"," 02 474 26 00");
//    $cinema2=new Cinema("UGC"," 02 474 26 00");

    $film1=new Film("Barbie", 120);
//    $film2=new Film("Oppenheimer", 180);


    $seance1=new Seance(new DateTime("2023-9-24 20:00"), "Salle 1");
    $seance2=new Seance(new DateTime("2023-9-25 20:00"), "Salle 2");
//    $Seance3=new Seance(new DateTime("2023-9-26 20:00"), "Salle 3");
//    $Seance4=new Seance(new DateTime("2023-9-27 20:00"), "Salle 4");


$cinema1->addSeance($seance1);
//afficher cinema1
$cinema1->addSeance($seance2);
$film1->addSeance($seance1);
$film1->addSeance($seance2);



    var_dump($cinema1);
//    var_dump($cinema2);
    var_dump($film1);
//    var_dump($film2);
//    var_dump($Seance1);


    ?>
    
</body>
</html>