<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once "./Animal.php";
    require_once "./Chien.php";
    require_once "./Chat.php";
    require_once "./Serpent.php";

    $chien1 = new Chien("Rex",true);
    $chien2 = new Chien("Laika",false);
    $chien1->aboyer();
    $chien1->manger();
    $chien1->jouer();
    var_dump($chien1);
    var_dump($chien2);


    $chat1 = new Chat("Garfield");
    $chat2 = new Chat("Felix");
    $chat3 = new Chat("Salem");
    $tableChat = [$chat1,$chat2,$chat3];
    foreach($tableChat as $chat){
        $chat->miauler();
        $chat->manger();
        $chat->jouer();
    }
    var_dump($chat1);
    var_dump($chat2);
    var_dump($chat3);

    $serpent1 = new Serpent("Ken","vert");
    $serpent1->siffer();
    $serpent1->manger();


?>
    
</body>
</html>