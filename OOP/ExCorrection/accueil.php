<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            width: 50px;
        }
    </style>
</head>
<body>
    <?php
    include "./Contact.php";
    include "./ContactNew.php";
    $c1 = new Contact("Dupont","Margot","045875425");
    $c1->afficher();
    $c2 = new Contact("Tina", "Tsai", "0456208798");
    $c2->afficher();

    $cn1 = new ContactNew("Dupont","Margot","045875425");
    $cn1->afficher();
    $cn2 = new ContactNew("Tina", "Tsai", "0456208798");
    $cn2->afficher();

    //chaining
    $c2->setPrenom("Marc")->setNom("Dupont")->setGsm("045875425")->afficher();
    
    $im1 = new Image ("./images/dog.jpg","image of a dog");
    $im1->afficher();

    ?>

</body>
</html>