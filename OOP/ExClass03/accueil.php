<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "./Serie.php";

$person1 = new Person("Penn", "Badgley", "Joe Goldberg");
$person1->getFullName();
$person1->getRole();
$person2 = new Person("Elizabeth", "Lail", "Guinevere Beck");
$person2->getFullName();
$person2->getRole();
$person3 = new Person("Victoria", "Pedretti", "Love Quinn");
$person3->getFullName();
$person3->getRole();
$listPersons = [$person1, $person2, $person3];
$serie1 = new Serie("You", "Greg Berlanti", "Thriller", $listPersons);
$serie1->afficher();

    ?>


</body>
</html>