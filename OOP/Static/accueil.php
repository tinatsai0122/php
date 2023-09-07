<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once "./Medecin.php";
    
    $m1 = new Medecin("324253", "Margot");
    print(Medecin::getSerment());
    
    //access to static property
    Medecin::setSerment("Soigner les patients.");
    print("<br>" .Medecin::getSerment());


    $m2 = new Medecin("324254", "Dorine");
    print("<br>" .Medecin::getSerment());
    
    
    var_dump($m1);
    var_dump($m2);
    ?>
</body>
</html>