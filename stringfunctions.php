<?php

$a="Martin";
$b=strlen($a);
echo"length of the string is $b <br>";
$c=strpos($a,"artin");
echo"the occurance of a is after $c <br>";
$d=str_replace("lab","labs","Futura lab");
echo "String after replace is $d <br>";
$e=strtoupper($a);
echo "uppercase $e <br>";
$f=strtolower($e);
echo "lowercase $f <br>";
$d=substr("Futura labs",7,10);
echo"Substring is $d <br>";

?>