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

// $film_director = 
//     ["The Intern" => "Nancy Meyers", 
//     "The Devil Wears Prada"=> "Wendy Finerman", "Romeo and Juliet" => "Gabriella Martinelli",
//];

$film_director = [
    ["film" => "The Intern",
    "director" => "Nancy Meyers",],
    ["film" => "The Devil Wears Prada",
    "director" => "Wendy Finerman",],
    ["film" => "Romeo and Juliet",
    "director" => "Gabriella Martinelli",],
];



foreach($film_director as $arrayfilm_director){ 
//no need to show key, because the key will be index 0, 1 and 2. no value to us.
    print("Film: " . $arrayfilm_director["film"] ."<br>");
    print("director: " .$arrayfilm_director["director"] ."<br>");
}



?>

</body>
</html>