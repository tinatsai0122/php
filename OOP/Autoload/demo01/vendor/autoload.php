<?php

//function __autoload
//php envoie la nom de la clasees
// a la fonction qui a ete enregistree comme autoload
function monAutoload(string $nomClasse){
    include_once "./classes/$nomClasse.php";
    //include_once "./classes/".$nomClasse .".php";

}

//fixer la fonction __autoload
//Elle sera lancee a chaque fois qu'on fait "new X"
spl_autoload_register("monAutoload");

?>