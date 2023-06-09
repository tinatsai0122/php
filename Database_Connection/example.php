<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    /*CRUD
Create: INSERT
Read: SELECT (obtenir de donnees)
Update: UPDATE
Delete: DELETE
*/
    print("<h3>On va insere une stagiaire dans la BD</h3>");

//0.Importer la configuration de connexsion.
include "./config/db.php";
print(DBUSER);

//1.Creer la connextion
//-nom du serveur(host)
//-port 
//-user
//-mot de pass
$date1 = new DateTime("5/7/2002");
$date1 ->format("d m y");
//constructor de PDO, The PDO class = Represents a connection between PHP and a database server
try{
$cnx = new PDO (DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT .';dbname=' . DBNAME . ';charset='. DBCHARSET, DBUSER, DBPASSWORD);
}
catch(Exception $e){
// ce code sera lance s'il y a une erreur de connexion.
echo "Erreur de connexion a la BD";
die();

}

var_dump($cnx);

//2.Creer la requete INSERT
//(les valeurs viendront normalement d'un formaulaire)
$name = "Lily";
$hobby = "Travel";


$sql = "INSERT INTO stagiairebd (id, name,hobby) VALUES (null, :name, :hobby)";

//3.Lancer la requete INSERT

//3.1 Envoyer la requete au serveur et fixer les valeurs pour les parametres (placeholder)
$stmt = $cnx->prepare($sql);
$stmt->bindValue(':name',$name);
$stmt->bindValue(':hobby',$hobby);

//3.2 Lancer la requete dans le serveur.
$stmt->execute();

//for debugging erreurs caused from la requete
var_dump ($stmt->errorInfo());

    ?>




</body>
</html>