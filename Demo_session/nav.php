<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="./accueil.php">Accueil</a>
        <a href="./page1.php">Page 1</a>
        <a href="./page2.php">Page 2</a>
        <?php
            session_start();
            print ($_SESSION['nom']);
        ?>
        <a href="./logout.php">Logout</a>
    </nav>

</body>
</html>