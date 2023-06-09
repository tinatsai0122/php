<?php

$n1 = readLine("Enter a number: ");
$n2 = readLine("Enter another number: ");
$operation = (float)readLine("What operation do you want to do between +, -, *, /: ");

$sum = $n1 + $n2;
$sub = $n1 - $n2;
$mul = $n1 * $n2;
$div = $n1 / $n2;

if ($operation == "+" ) {
    print("The result of the operation will be $sum .");
}

else if ($operation == "-" ) {
    print("The result of the operation will be $sub .");
}

else if ($operation == "*" ) {
    print("The result of the operation will be $mul .");
}

else if ($operation == "/" ) {
    print("The result of the operation will be $div .");
}




print("According to the two numbers that you entered.\n The sum is $sum.\n The difference is $sub.\n The multiplication is $mul.\n The division is $div.  ");



?>