<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php
//$_GET to receive the array associatif entered by the people who fill in the form and submit.
    var_dump($_POST);
    print("Bonjour ".$_POST["nom"]);
    print("<br> Je sais que vous aimez bien ".$_POST["hobby"]);

?>
    
</body>
</html>