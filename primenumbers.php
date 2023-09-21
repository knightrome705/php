<?php
function priMe($num){
for($i=0;$i<=$num;$i++){
   for($j=1;$j<=10;$j++){
    if($i%$j!=0){
        echo"$i <br>";

    }
   }
}
}
priMe("120");
?>