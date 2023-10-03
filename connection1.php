<?php
$conn=mysqli_connect("localhost","root","","employee");
if(mysqli_connect_errno()){
    die("connection error");
}
echo"Connected";

?>