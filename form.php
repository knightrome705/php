<?php
include "connection1.php";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $quali=$_POST['qualification'];
    $address=$_POST['address'];
    $sql=mysqli_query($conn,"INSERT INTO register(name,dob,gender,qualification,address) VALUES ('$name','$dob','$gender','$guali','$address')");
if($sql){
    echo'<script>alert("registered sucessfully");window.location.href="create.php";</script>';
}
else{
    echo"Something went wrong";
}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<div class="container ml-5">
    <div class="row">
        <div class="col-4">

        </div>
        <form method="POST">
        <div class="col-4 mt-5 bg-dark text-light p-5">
            <h1 class="text-light">Register</h1>
            <label for="">name</label>
            <input type="text" name="name" class="form-control" required><br>
            <label for="">DOB</label>
            <input type="date" name="email" class="form-control" required><br>
            <label for="" >Gender</label>
            <input type="text" name="phone" class="form-control" required>
            <label for="" >Qualification</label>
            <input type="text" name="phone" class="form-control" required>
            <label for="" >Address</label>
            <input type="text" name="phone" class="form-control" required>
            <button type="submit" class="btn-primary mx-5" name="submit">Submit</button>

        </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>