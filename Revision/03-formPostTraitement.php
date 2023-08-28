<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        var_dump($_POST);
        //get data from form
        $depart = $_POST["txt_depart"];
        $arrive = $_POST["txt_arrive"];

        //connect to database

        //
        print("<h1>Le trajet est de $depart vers $arrive</h1>");
        ?>
</body>
</html>