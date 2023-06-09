<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="./ex01_traitementGet.php">  
<!-- once submit is been clicked, it will trigger this action which is showing the page Form1_traitement.php   
Method GET = the url will show additional info of the data such as (?nom=Lora&prenom=Paris&dateNaissance=2023-04-13&hobby=tricot)
Method POST won't have this info

--> 
    Last Name<input type="text" name="lastname">
    First Name<input type="text" name="firstname">
    Age <input type="number" name="age">
    Birthday <input type="date" name="birthday">
    <input type="submit" value = "Submit">

</form>

    
</body>
</html>