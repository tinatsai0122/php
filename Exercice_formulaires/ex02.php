<?php

$lname = $_POST["lname"];
$fname = $_POST["fname"];

print("Bonjour! " .$fname .$lname);

if ($_POST["fname"] == "Tina" and $_POST["lname"]=="Tsai" ){
    
    print("Que la force soi avec toi.".$_POST["fname"] ." " .$_POST["lname"] ."." );
    print("<a href='https://www.starwars.com'>Check here</a>");
}

else{
    print("Thank you!");
}

?>