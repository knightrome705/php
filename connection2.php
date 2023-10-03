<?php
$conn=mysqli_connect("localhost","root","","demo");
if(mysqli_connect_errno()){
    die("Something went wrong");
}
echo"connection sucessful";
?>