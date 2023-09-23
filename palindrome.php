<?php
function palinDrome($number){
    echo"Entered number is $number <br>";
   $value1=strrev($number);
   echo"Reverse of Entered number is $number <br>";
   if($value1==$number){
    echo"palindrome <br>";
   }else{
    echo"Not palindrome <br>";
   }
}
palinDrome("153");
?>
