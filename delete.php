<?php
include "connection2.php";
$id=$_GET['id'];
echo var_dump($id);
$sql=mysqli_query($conn,"DELETE FROM register WHERE id='$id'");

    if($sql)
    {
        echo '<script> alert("deleted sucessfully");window.location.href="form2.php";</script>';
    }
    else{
        echo '<script> alert("something went wrong");</script>';

    }





?>