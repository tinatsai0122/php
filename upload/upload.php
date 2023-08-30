<?php

if (isset($_POST["input_iata"]) && isset($_POST["input_description"])) {
    include "./config/db.php";

    try {
        $cnx = new PDO (DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT .';dbname=' . DBNAME . ';charset='. DBCHARSET, DBUSER, DBPASSWORD);
    } catch (Exception $e) {
        // This code will be executed if there's an error in the database connection.
        echo "Erreur de connexion à la BD";
        die();
    }

    // Choisir un dossier pour stocker les fichiers
    $dossierUpload = "./dossierUpload";

    // Choisir un nouveau nom pour le fichier
    $NomFichier = uniqid() . date("y-m-d-H-i-s");

    $nomOriginal = $_FILES["input_file"]["name"];

    // Recuperer l'extension du fichier
    $morceaux = explode(".", $nomOriginal);
    $extension = end($morceaux);

    // Creer un nouveau nom pour le fichier
    $NomFichier = $NomFichier . "." . $extension;

    // Deplacer le fichier dans le dossier choisi
    move_uploaded_file($_FILES["input_file"]["tmp_name"], $dossierUpload . "/" . $NomFichier);

    $code = $_POST["input_iata"];
    $description = $_POST["input_description"];

    // Check if the combination of code and description already exists in the database
    $sqlCheck = "SELECT * FROM airport WHERE iata = :iata";
    $stmtCheck = $cnx->prepare($sqlCheck);
    $stmtCheck->bindValue(":iata", $code);
    $stmtCheck->execute();

    $result = $stmtCheck->fetchAll(PDO::FETCH_ASSOC);

    if (count($result) == 0) {
        // The iata code does not exist in the database

        // Create the INSERT query
        $sql = "INSERT INTO airport (iata, description, img) VALUES ( :iata, :description, :img)";

        // Prepare the query
        $stmt = $cnx->prepare($sql);

        // Bind the parameters
        $stmt->bindValue(":iata", $code);
        $stmt->bindValue(":description", $description);
        $stmt->bindValue(":img", $NomFichier);

        // Execute the query
        if ($stmt->execute()) {
        // Send the confirmation message
            echo "Airport added successfully";
        } else {
            echo "Failed to add airport.";
        }
    } else {
        // A duplicate entry was found, handle accordingly
        echo "Failed to add airport.";
        header("Location: ./form.php");
        //better to go to listOfAirports.php
        exit();
    }
} else {
    // Handle missing form data
    echo "Please fill in all required fields.";
}
?>
