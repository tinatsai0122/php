<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

class CompteBancaire{
//create properties
    private string $Name;
    private int $accountNumber;
    private float $deposit;
    private float $expendure;
    private float $balance;

//method constructeur
    public function __construct(string $Name , int $accountNumber, float $deposit, float $expendure, float $balance){
        $this->Name = $Name;
        $this->accountNumber = $accountNumber;
        $this->deposit = $deposit;
        $this->expendure = $expendure;
        $this->balance = $balance;

    }
//create getters for the properties in private
    //
    public function getName(): string{
        return $this->Name;
    }   
    public function getAccountNumber(): int{
        return $this->accountNumber;
    }
    public function getDeposit(): float{
        return $this->deposit;
    }
    public function getExpendure(): float{
        return $this->expendure;
    }
    public function getBalance(): float{
        return $this->balance;
    }
    
//function to show the account information
    public function showAccount(){
        print "<h3 class='info'>Account information</h3>";
        print "<p class='info'>Account holder: " . $this->Name . "</p>";
        print "<p class='info'>Account number: " . $this->accountNumber . "</p>";
        print "<p class='info'>Deposit: " . $this->deposit . "</p>";
        print "<p class='info'>Expendure: " . $this->expendure . "</p>";
        print "<p class='info'>Balance: " . $this->balance . "</p>";
    }

//function to deposit money in the account
    public function deposit(float $deposit){
            $this->balance += $deposit;
            $this->deposit += $deposit;
    }
//function to withdraw money from the account
    public function withdraw(float $expendure){
            $this->balance -= $expendure;
            $this->expendure += $expendure;
    }
    //function to block the account
    public function blockAccount(){
        $this->balance = 0;
        $this->deposit = 0;
        $this->expendure = 0;
    }
}
?>


</body>
</html>