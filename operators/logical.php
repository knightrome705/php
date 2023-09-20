<?php
$a=10;
$b=20;
echo"<br>";
echo"logical operators";
echo"<br>";
echo"logical and";
echo"<br>";
if($b>$a && $b/2==$a){
    echo"$b is half of $a";
}
echo"<br>";
echo"logical or";
echo"<br>";
if($a<$b || $a==$b){
    echo" $a and $b are not same";
}
echo"<br>";
echo"logical not";
echo"<br>";
$num1=true;
$num2=false;
if($num1=!$num2){
    echo"not same";
}
?>
