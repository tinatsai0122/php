<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <form method="post" action="./traitement.php">
        Login<input type="text" name="login">
        Password<input type="password" name="password">
        <input type="submit" value="Se connecter">
    </form>

    <?php
    // on peut obtenir les paramtres (cle->val) de l'URL en utilisant $_GET
    if (isset($_GET['msg']) && $_GET['msg']=="erreur"){
            print ("<h5 style='color:red'>Login ou mot password incorrectes</h5>");
        }

    ?>
    <?php



?>
    
</body>
</html>