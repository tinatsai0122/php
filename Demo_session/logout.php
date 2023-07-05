<?php


//pour uniquement le login de la session

session_start();

unset($_SESSION['login']);

//ou on peut aussi effacer la session dans sa totalite
//session_destroy();

header("Location: ./login.php")



?>