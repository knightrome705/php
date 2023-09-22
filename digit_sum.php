<?php
function digitSum($t){
    $remainder=0;
    $sum=0;
    while ($t != 0)
    {
       $remainder = $t % 10;
       $sum = $sum + $remainder;
       $t = $t / 10;
    }
    echo $sum;
}
digitSum(1161);

?>