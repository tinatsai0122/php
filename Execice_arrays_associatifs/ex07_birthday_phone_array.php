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
    $repertoire = [
        [
            'nom' => 'Laurence',
            'dateNaissance' => new DateTime("2000-1-1") ,
            'telephone' => "0456123456"
        ],
        [
            'nom' => 'Vitoria',
            'dateNaissance' => new DateTime("2003-5-5"),
            'telephone' => "0456123789"
        ]
    ];

    $repertoire[0]["dateNaissance"] -> modify("+4 years");
    var_dump($repertoire[0]["dateNaissance"] );

    $difference = $repertoire[0]["dateNaissance"] ->diff(new DateTime());

    print($difference ->format("%y")." years<br>");
    print($difference ->format("%m")." months<br>");
    print($difference ->format("%d")." days");
    



/*
$date1 = new DateTime("1977-07-20"); //DateTime class Documentation
$datenow = new DateTime();
var_dump($date1);
die();
*/

if($repertoire[0]["dateNaissance"] < $repertoire[1]["dateNaissance"] ){
    print("<h5> Laurence est plus agee.</h5>");
}
else{
    print("<h5> Victoria est plus agee.</h5>");
}

//print($repertoire[0]["dateNaissance"])

foreach($repertoire as $contact){
print("<br>".$contact["nom"]); //string
print("<br>".$contact["dateNaissance"]->format("y-m-d")); //objet!!!!!  Object of class DateTime could not be converted to string 
print("<br>".$contact["telephone"]); //string

}



    ?>
</body>
</html>
    
    
