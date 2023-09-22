<?php
function priMe($num){
    $n=0;
    if($num==1||$num==0){
        $n=1;
    }
    for ($i = 2; $i <= $num / 2;$i++) {

        if ($num % $i == 0) {
        $n=1;
}
    }
if($n!=1){
    echo "$num <br>";
}
}
$g=0;
while($g<=100){
    priMe($g);
    $g++;
}
?>