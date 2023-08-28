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
        var_dump($noms);
        //effacer un element
        unset($noms[0]);
        var_dump($noms);
        //ajouter un element a le deniere position
        $noms[] = "Najoua";
        
        print("<ul>");
        foreach($noms as $key  => $value ){
            print("<li>$value</li>");
        };
        print("</ul>");


        
        $produit1= [
            "nom" => "patates",
            "prix" => 2,
            "origin" => "Belgique"
        ];
        
        print("<ul>");
        foreach($produit1 as $key  => $value ){
            print("<li>".$key .":". $value ."</li>");
        };
        print("</ul>");
        
        $produit2= [
            "nom" => "oranges",
            "prix" => 2.5,
            "origin" => "Expagne"
        ];
        $produits = [$produit1, $produit2];
        //modifier un element(associative array)
        $produits[0]["nom"]="kiwis";
        var_dump($produits);
        
        
        print("<h4> Voici la liste des produits</h4>");
        foreach($produits as $produit){
            print("<ul>");
            foreach($produit as $key  => $value ){
                print("<li>".$key .":". $value ."</li>");
            };
            print("</ul>");
        };
        

        
        $a = 5;
        $b = $a;
        $a = 10;
        print("<p> a = $a et b = $b </p>");
//& = reference, link to two values, one change, the other change too
        $c = 10;
        $d = &$c;
        $c = 15;
        $d = 30;
        print("<p> c = $c et d = $d </p>");

        ?>


<script>
    for (let i = 0; i < 10; i++) {
            console.log("Je suis un script JS" + i);
        }
    </script>

    
</body>
</html>