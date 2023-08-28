<?php

$airports = [
    "ZAV"=>"Aéroport de Bruxelles",
    "SVQ"=>"Aéroport de Séville",
    "CLR"=>"Aéroport de Charleroi",
    "ROM"=>"Aéroport de Rome"
];

$input_code = $_POST["code"];

if(isset($airports[$input_code])){
    print ($input_code." : ".$airports[$input_code]);
}else{
    print ("Pas de résultat");
};
?>