<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        Deposit<input type="number" name="deposit" id="withdraw">
        <input type="submit" value="confirm"><br>

        Withdraw<input type="number" name="withdraw" id="withdraw">
        <input type="submit" value="confirm">
    </form>


<?php

include "CompteBancaire.php";

$account1 = new CompteBancaire("Tina", 123456789, 1000, 500, 500);
$account1->showAccount();

$account1->deposit(1000);
$account1->withdraw(200);
$account1->showAccount();

?>
    <script src="main.js"></script>
</body>
</html>
