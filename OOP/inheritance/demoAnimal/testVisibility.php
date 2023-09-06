<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

require_once "./Animal.php";
require_once "./Chien.php";

$a = new Animal("Toto");
$a->setNom("Titi");
print ($a->getNom());

$chien1 = new Chien("Foufou");
print($chien1->setNom());
$chien1->aboyer();

?>
    
</body>
</html>