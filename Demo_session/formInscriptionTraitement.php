<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


<?php


//recupere les donnees du form
$nom = $_POST['nom'];
$login = $_POST['login'];
$password = $_POST['password'];


var_dump($_POST);
//filter les login et password



//connecter a la BD
include"./connexion/db.php";

try {
    $cnx = new PDO(DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT . ';dbname=' . DBNAME . ';charset=' . DBCHARSET, DBUSER, DBPASS);
} catch (Exception $e) {
    // jamais en production car ça montre des infos
    // sensibles
    // echo $e->getMessage();
    die();
}
 
//Cree la requete pour chercher le login du form
$sql = "INSERT INTO utilisateur (id, nom, login, password) VALUES (NULL, $nom, $login, $password);";


//Obtenir le password l'utilisateur


//Verifier si le password du form correspond a celui de la BD
$stmt = $cnx->prepare($sql); //stmt=statement
$stmt->bindValue(":nom", $nom);
$stmt->bindValue(":login", $login);
$stmt->bindValue(":password", password_hash ($password,PASSWORD_BCRYPT));

//Dans la BD on insere le hash du password, pas le password tel quel
//$password_hash = password_hash ($password,PASSWORD_BCRYPT);
//print ($password_hash);


//Lancer la requete
$stmt->execute();
var_dump($stmt->errorInfo()); //pour voir les erreurs

//Si inscription ok, stocker login dans la session et aller vers la page accueil
session_start();
$_SESSION['login'] = $login;
header("Location: ./accueil.php");



?>