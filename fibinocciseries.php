<?php
// $i=1;
// $j=0;
// do{
//     // echo $i."<br>";
//     // echo $j ."<br>";
//     $c=$i+$j;
//     echo $c ."<br>";
//     $i=$j;
//     $j=$c;

// }while($i<=20);
$a=0;
$b=1;
$s=0;
echo $a ."<br>";
echo $b ."<br>";
while($a<=20){
    $s=$a+$b;
    echo $s."<br>";
   $a=$b;
   $b=$s;
}
?>