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


foreach($countries as $arraycountries ){

    print("The capital of " . $arraycountries["country"] ." is " .$arraycountries["capital"] ."<br>");

} 


foreach($countries as $arraycountries ){

    print("Countries: " .$arraycountries["country"]."<br>");

} 


foreach($countries as $arraycountries ){

    print("Capitals: " .$arraycountries["capital"] ."<br>");

} 

print_r($countries);


?>

</body>
</html>