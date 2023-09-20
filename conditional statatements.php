<?php
$h=date("H");
$t=date("l");
echo"if statements";
echo"<br>";
if($h<10){
    echo"good morning";
}
echo"<br>";
echo"if else statement";
echo"<br>";
if($t=="Thursday"){
echo"Today is $t";
}else{
 echo "today is $t";
}
echo"<br>";
echo"if elseif else statement";
echo"<br>";
$a=10;
$b=20;
$c=30;
if($a>$b&& $b>$c){
    echo" $a is greater";
    echo"<br>";
}elseif($b>$a && $b>$c){
    echo"$b is greater";
    echo"<br>";
}else{
    echo"$c is greater";
    echo"<br>";
}
echo"Switch statements";
echo"<br>";
$day=6;
switch($day){
    case "1":
        echo"Today is monday";
        break;
        case "2":
            echo"Today is tuesday";
            break;
        case "3":
            echo"Today is wednesday";
            break;
        case "4":
             echo"Today is thursday";
            break;
        case "5":
            echo"Today is friday";
            break;
        case "6":
                echo"Today is saturday";
            break;
        case "7":
                echo"Today is sunday";
            break;
        default:
                echo"Invalid number";
}

?>