<?php
function facTorial($num){
    echo"Factorial of $num is <br>";
    $sum=1;
    for($i=1;$i<=$num;$i++){
        $sum*=$i;
    }
    echo $sum; 
}
facTorial("5");
?>