<?php
$sum = 0; 
$x=20;
do
{ 
    $rem = $x % 10; 
    $sum = $sum + $rem*$rem*$rem; 
    echo $x ."<br>";
    $x ++; 
} while($x<=20);
?>