<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require "./vendor/autoload.php";

    //use the facctory to create a Faker\Generator instance
    use Faker\Factory;
    $faker = Factory::create("zh_tw");

    $unNom = $faker->name();
    print("<h2>你好 ". $unNom ."!</h2>")
    



?>
</body>
</html>