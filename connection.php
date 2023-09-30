<?php
$conn=mysqli_connect("localhost","root","","demo");
if(mysqli_connect_errno()){
    die("Connection error");
    
}
echo"Connected sucess";
?>