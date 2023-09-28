<?php
$names=array(array("martin",1,2),array("ashwin",2,3),array("sreyas",4,5));
for($row=0;$row<3;$row++){
    echo "Row of $row <br>";
    echo"<ul>";
    for($col=0;$col<3;$col++){
        echo "<li>".$names[$row][$col]."</li>";
        echo"<br>";
    }
    echo"</ul>";
}
?>