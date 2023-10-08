<?php
include "connection2.php";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

        $result=mysqli_query($conn,"INSERT INTO register(user_name,email,password) VALUES('$name','$email','$password')");
        $data=mysqli_insert_id($conn);
        $sql1=mysqli_query($conn,"INSERT INTO login(login_id,user_name,password) VALUES('$data','$email','$password')");
if($result)
{
    echo'<script> alert("registered successfully");
    window.location.href="login.php";</script>';
}
else{
echo"something went wrong";

}
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body >
<div class="container">
        <div class="row">
        <div class="col-4">
        </div>
            <div class="col-4 mt-5 bg-dark text-light p-5">
                <form method="POST">
                    <center><h1>Welcome</h1></center>
                    <h4 class=text-light>Register</h4>
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" required><br>
                    <label for="">Enter Email</label>
                    <input type="text"class="form-control" name="email" required><br>
                    <label for="">Password</label>
                    <input type="password"class="form-control" name="password" required><br>
                    
                    <button name="submit">Submit</button>
                    </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>




    
    
</body>
</html>