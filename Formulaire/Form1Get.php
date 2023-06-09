<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="./Form1_traitementGet.php">  
<!-- once submit is been clicked, it will trigger this action which is showing the page Form1_traitement.php   
Method GET = the url will show additional info of the data such as (?nom=Lora&prenom=Paris&dateNaissance=2023-04-13&hobby=tricot)
Method POST won't have this info

--> 
    Nom<input type="text" name="nom">
    Prenom<input type="text" name="prenom">
    Date de naissance <input type="date" name="dateNaissance">
    Hobby<select name="hobby" id="">
        <option value="natation">Natation</option>
        <option value="manger">Manger</option>
        <option value="cinema">Cinema</option>
        <option value="tricot">Tricot</option>
    </select>
    <input type="submit" value = "Envoyer">

</form>

    
</body>
</html>