<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
        print(
            "<h1>Je suis une page web</h1>"
        );
        $noms = ["Emanuela", "Yustra", "Victoria"];
        $hobbies = ["chanter", "dormir", "coder"];

        $tab=["nom"=>"Senem",
            "nationalite"=>"Belgique"];
    
        //effacer un element
        unset($noms[0]);
        //ajouter un element a le deniere position
        $noms[] = "Najoua";

        //function to display an array
        function afficherArray($Array){
            print("<ul>");
            foreach($Array as $key  => $value ){
                print("<li>$value</li>");
            };
            print("</ul>");

        };
        afficherArray($noms);
        afficherArray($hobbies);
        afficherArray($tab);
        
        //function to display the result of the addition of two numbers
        //adding float type to the parameters to be able to add decimal numbers, not only integers
        function addition(float $a, float $b){
            $result = $a + $b;
            print("<h6>The addition of ". $a ." & ". $b ." will be ".$result .".</h6>");
        };
        addition(10, 15);

        //function calculating IMC to demicial 2 places
        //adding float type to the parameters to be able to add decimal numbers, not only integers
        function calculIMC(int $taille, float $poids):float{
           return ($poids / ($taille * $taille));
        };
        $imc1 = calculIMC(174, 70);
        print("<h6>IMC = ". $imc1 ."</h6>");
        print("<ul><li>IMC = ". calculIMC(174, 70) ."</li></ul>");

?>

</body>
</html>