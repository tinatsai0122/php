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
    var_dump($_POST);
    //1.Copier les donnees du form dans de variables
    $name = $_POST["name"];
    $hobby = $_POST["hobby"];
    //2. Connecter a la BD
include "./config/db.php";

try{
    $cnx = new PDO (DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT .';dbname=' . DBNAME . ';charset='. DBCHARSET, DBUSER, DBPASSWORD);
    }
    catch(Exception $e){
    // ce code sera lance s'il y a une erreur de connexion.
    echo "Erreur de connexion a la BD";
    die();
    
    }
    //3. Creer la requete pour inserer les donnees
    $sql = "INSERT INTO stagiairebd (id, name,hobby) VALUES (null, :name, :hobby)";
    //4. Envoyer la requete au serveur, apres avoir donne de valeurs aux parametres.
    $stmt = $cnx->prepare($sql);
    $stmt->bindValue(':name',$name);
    $stmt->bindValue(':hobby',$hobby);
    
    //5 Lancer la requete dans le serveur.
    $stmt->execute();
    

?>
</body>
</html>