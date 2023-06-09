<?php

$number = [];

for ($i=1; $i <=200; $i+=1 ){  
    $number[] = $i;

}

for ($j=0; $j <200; $j++ ){  
    $number[$j] = $number[$j]*2;
}


foreach($number as $number)
    print($number."\n");


?>