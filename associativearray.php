<?php
$names=array("martin"=>"22","amal"=>"20","arun"=>"18");
echo "Amal is age  of ".$names["amal"]." years old <br>";
foreach($names  as $x=>$x_value){
echo"key=".$x.",value =".$x_value;
//Associative array
$marks=array("martin"=>"22","arun"=>"21");
$marks["ashwin"]="21";
echo"<br>";
echo"Ashwin has got". $marks['ashwin']. "in exam";
echo"<br>";
foreach($marks as $j=>$j_value){
    echo "<br> $j_value";
}
}
?>