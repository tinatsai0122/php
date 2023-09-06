<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //include the autoload file to load all the classes
    include_once "./vendor/autoload.php";

    //use namespace to avoid conflicts between classes that have the same name
    use \API\Client as ClientAPI;
    use \Ecommerce\Gestion\Client as ClientEcommerce;

    $c1 = new ClientAPI();
    $c2 = new ClientEcommerce();
    
    ?>


</body>
</html>