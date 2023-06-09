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
    //1.Obtenir les donnees du formulaire
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
    //3. Creer la requete (SELECT)
    $sql = "SELECT * FROM stagiairebd WHERE hobby = :hobby";

    //4. Envoyer la requete au serveur (fixer les parametres)
    $stmt = $cnx->prepare($sql);
    $stmt->bindValue(':hobby',$hobby);

    //5.Lancer la requte (execute)
    $stmt->execute();
    var_dump($cnx);
    
    //6. Mettre le resultat dans un array  et l'afficher
    $arrayStaigiaires = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($arrayStaigiaires);

    
    foreach($arrayStaigiaires as $arrayStaigiaire){
        echo "<ul>";
        echo"<li>". $arrayStaigiaire["name"] ."</li>";
        echo"<li>". $arrayStaigiaire["hobby"] ."</li>";
        echo "</ul>";
    }
    
    /*
    foreach($arrayStaigiaires as $arrayStaigiaire){
        echo "<ul>";
        foreach($arrayStaigiaire as $key=>$value){
            echo"<li>" .$key .":" .$value ."</li>";
        }
        echo "</ul>";
    }
*/

    ?>

</html>