<?php
$width = (float)readLine("Enter the width of your room: ");
$length = (float)readLine("Enter the length of your room: ");

$surface = $width * $length;

print("The surface of the room is $surface m2.\n");

if ($width == $length){

    print("The room is square!");
}


?>