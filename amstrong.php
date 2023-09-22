<?php
function amStrong($num){
    $t=$num;
    $remainder=0;
    $sum=0;
    $result=0;
    while ($t != 0) {
         $remainder = $t % 10;
        $result += $remainder**3;
        $t /= 10;
     }
 
     if ($result == $num)
    echo " $num is Amstrong" ;
     else
        echo" $num is Not Amstrong";
}
amStrong(153);
?>