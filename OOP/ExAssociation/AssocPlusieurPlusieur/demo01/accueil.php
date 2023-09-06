<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once "./Livre.php";
    include_once "./Auteur.php";

    $auteur1=new Auteur("Walliams", "David", "Britannique");
    $auteur2=new Auteur("Pratchette", "Terry", "Américain");
    $auteur3=new Auteur("Gaiman","Neil", "Britannique");

    $livre1=new Livre("123456789", "Gangsta Granny");
    $livre2=new Livre("987654321", "Ratburger");
    $livre3=new Livre("456789123", "Good Omens");


    $livre1->addAuteur($auteur1);
    $livre2->addAuteur($auteur1);
    $livre3->AddAuteur($auteur2);
    $livre3->AddAuteur($auteur3);


    var_dump($livre3);

    var_dump($auteur1);


    ?>

</body>
</html>