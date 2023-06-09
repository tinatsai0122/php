<?php

$year = readLine("Enter which year of student you are: "); 
$absence = (int)readLine("Enter how many days of absences until now: ");

$ratio_absence1 = (50 * 0.2);
$ratio_absence2 = (50 * 0.3);
$ratio_absence3 = (50 * 0.4);

if ($year == 1 && $absence < $ratio_absence1){
    print("You have passed!");
}

else if ($year == 2 && $absence < $ratio_absence2){
    print("You have passed!");
}

else if ($year == 3 && $absence < $ratio_absence3){
    print("You have passed!");
}

else{
    print("You have failed!");
}
?>