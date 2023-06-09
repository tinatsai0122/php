<?php

$grade = ["Tina" => 25,
            "Jenny" => 20, 
            "Winnie" =>15,
            "Paul" =>9,
            "Christ" =>8];


foreach($grade as $key=> $value)
    print($key ."=>". $value ."\n");

While ($value<10){
    print($value);
}

?>