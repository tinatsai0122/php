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
    //1.Copier les donnees du form dans de variables
    var_dump($_POST);
    $nameProduct = $_POST["nameProduct"];
    $description = $_POST["description"];
    $price = $_POST["price"];

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

        $sql = "INSERT INTO product (id, nameProduct, description, price) VALUES ( null, :nameProduct, :description, :price)";

        //3.Lancer la requete INSERT
        
        //3.1 Envoyer la requete au serveur et fixer les valeurs pour les parametres (placeholder)
        $stmt = $cnx->prepare($sql);
        $stmt->bindValue(':nameProduct',$nameProduct);
        $stmt->bindValue(':description',$description);
        $stmt->bindValue(':price',$price);
        
        //3.2 Lancer la requete dans le serveur.
        $stmt->execute();
        

        //6 for debugging erreurs caused from la requete
        var_dump ($stmt->errorInfo());
    ?>
</body>
</html>