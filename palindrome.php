<?php
function palinDrome($number){
    $number=strtoupper($number);
    $value2=strtoupper($number);
    echo"Entered number is $number <br>";
   $value1=strrev($value2);
   echo"Reverse of Entered number is $value1 <br>";
   if($value1==$number){
    echo"palindrome <br>";
   }else{
    echo"Not palindrome <br>";
   }
}
palinDrome("malayalam");
?>
