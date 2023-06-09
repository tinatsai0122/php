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

    $birthday = $_GET["birthday"];
    $dateNow = new DateTime();
    $dateUser = new DateTime($birthday);
    $difference = $dateNow -> diff($dateUser);
    $age = $difference->format("%y");
    print("Welcome ".$_GET["firstname"] ." " .$_GET["lastname"] .", you are " .$age ." years old.");
?>
    
</body>
</html>