

    <?php
    //  var_dump($_POST);
    //  die();
    //verifier login et pass dans la BD



    //tout ok



    //charger un autre page
    // var_dump(($_POST));

    //$login=$_POST['login'];

    // print("Bienvenue $login");
    // die();


    session_start(); 

    
    //1.recupere le login et le pass du formulaire
    $login=$_POST['login'];
    $password=$_POST['password'];
    

    
    //2.Connecter a la BD

    include"./connexion/db.php";

    try {
        $cnx = new PDO(DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT . ';dbname=' . DBNAME . ';charset=' . DBCHARSET, DBUSER, DBPASS);
    } catch (Exception $e) {
        // jamais en production car ça montre des infos
        // sensibles
        // echo $e->getMessage();
        die();
    }
    
    
    //3.Obtenir l'utilisateur de la BD (on cherche par login)
    $sql = "SELECT nom,login, password FROM utilisateur WHERE login =:login";

    //4.Preparer la requete et la lancer
    $stmt = $cnx->prepare($sql);
    $stmt->bindValue(":login", $login);
    $stmt->execute();

    
    //5.Obtenir le resultat dans un array
    $resArray = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //    var_dump($resArray);
    $passwordBD = $resArray[0]['password'];  

    if (password_verify($password,$passwordBD) == true){
    //stocker dans la session le login et le nom de l'utilisateur
        session_start();
        $_SESSION['login'] = $login;
        $_SESSION['nom'] = $resArray[0]['nom'];
        //login ok, on va vers l'accueil
        header("Location: ./accueil.php");
    } else{
        //mauvais user ou mauvais password
        header("Location: ./login.php?msg=erreur");
    }




    //6.Utiliser password_verfiy pour verifier le password du form avec celui de la BD
    
    die();
    
    //Si le login et le pass sont ok, on stocke le login dans la session
    $_SESSION['login']=$_POST['login'];


    header("Location: ./accueil.php")


    ?>
