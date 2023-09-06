<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once "./Personne.php";
    require_once "./Passeport.php";

    $p1 = new Personne("Tsai", "Tina");
    
    
    
    $passeport1 = new Passeport("X23456789", new DateTime("2021-12-31"));
    $passeport2 = new Passeport("D87654321", new DateTime("2022-12-31"));
    $passeport3 = new Passeport("E56789123", new DateTime("2023-12-31"));
    $p1->addPasseport($passeport1);
    $p1->addPasseport($passeport2);
    $p1->addPasseport($passeport3);

//$passeport1->afficher();
$p1->showAllPasseport();

//    var_dump($p1);
//    var_dump($passeport1);
//    var_dump($passeport2);
//    var_dump($passeport3);
    

    ?>
    
</body>
</html>