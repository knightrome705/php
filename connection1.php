<?php
$conn=mysqli_connect("localhost","root","","employee");
if(mysqli_connect_errno()){
    echo"error";
}
echo"Connected";

?>