<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <!--    <table style="border:1px solid black">
        <thead>
             en-tete
            <tr>
                <th>nom</th>  th = table head
                <th>Hobby</th>
            </tr>


        </thead>
             donnees
            <tr>
                <td>Laurence</td>
                <td>cinema</td>
            </tr>
            <tr>
                <td>Senem</td>
                <td>disco-party</td>
            </tr>
    </table> -->

    <?php



    $repertoire = [
        [
            'nom' => 'Laurence',
            'dateNaissance' => new DateTime("2000-1-1") ,
            'telephone' => "0456123456",
            "site" => "http://www.google.com"
        ],
        [
            'nom' => 'Vitoria',
            'dateNaissance' => new DateTime("2003-5-5"),
            'telephone' => "0456123789",
            "site" => "http://www.lesoir.be"
        ]
    ];



    if (count($repertoire) > 0){
        print("<table>");
        print("<thead>");       
        //var_dump(array_keys())
        foreach(array_keys($repertoire[0]) as $value){ 
            print("<th>" .$value ."</th>");
        }

        print("</tr>");
        print("</thead>");

        //afficher les valeurs
        foreach($repertoire as $contact){
            print("<tr>");
                print("<td>");
                print($contact["nom"]);
                print("</td>");
                print("<td>");
                print($contact["dateNaissance"]->format("Y-m-d"));
                print("</td>");
                print("<td>");
                print($contact["telephone"]);
                print("</td>");    
                print("<td>");
                $site = $contact["site"];
                print ("<a href='" . $site . "'>" . $site . "</a>");
//                print("<a href='$site'>$site</a>");
                print("</td>");   
            print("</tr>");        
        }

        print("</table>");
    }
    else{
        print("<h5> Il n'y a pas de donnees.</h5>");
    }



    ?>


</body>

</html>