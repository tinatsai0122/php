<?php

$prix = readLine("Enter a price: ");

print(gettype($prix)."\n");

if ($prix < 150) {
    print("Le produit n'est pas cher");
}

else if ($prix == 150) {
    print("Le produit est tout juste");
}



else {
    print("Le produit est cher");
}

?>