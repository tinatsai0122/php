<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php



$countries = [
    ["country" => "Belgium",
    "capital" => "Brussels",],
    ["country" => "Japan",
    "capital" => "Tokyo",],
    ["country" => "Taiwan",
    "capital" => "Taipei",],
];


$countries[] = [
    "country" => "France",
    "capital" => "Paris",
]; //每次加就會加一個index

$countries[] = [
    "country" => "Korea",
    "capital" => "Seoul",
];

print("<ul>");
foreach($countries as $arraycountries ){

    print("<li>The capital of " . $arraycountries["country"] ." is " .$arraycountries["capital"] ."</li>");

}

print("</ul>");



?>

</body>
</html>