<?php

$voiture = ["marque" => "Renault",
"modele" => "5 copa", 
"vitesse" =>120,
"nouvelle" =>"no",
];

foreach ($voiture as $value){
    print($value ."\n");
}


foreach ($voiture as $key=> $value){
    print($key ."=>". $value ."\n");
}
    /*
foreach ($voiture as $key){
    print($key ."\n");
    }
}
*/
//only afficher key

foreach($voiture as $key =>$value){
    print($key ."\n");
}


