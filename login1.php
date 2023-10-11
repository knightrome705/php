<?php
session_start();
include "connection3.php";

if(isset($_POST['submit']))
{
    $username=$_POST['email'];
    $password=$_POST['password'];
    
    
    $result=mysqli_query($conn,"SELECT * FROM login WHERE email='$username'");
    if($result)
    {
        $row=mysqli_fetch_assoc($result);
        $hash=password_verify($password,$row['password']);
        $count=mysqli_num_rows($result);
        if($count==1 && $hash)
        {
           
            $_SESSION['key']=$row['login_id'];
            <script>
            window.location.assign('Home1.php');
        </script>
        <?php
            
        }
        ?>
        
        
    }
    else 
    {
        echo'<script>alert("login credential does not match");</script>';
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .second{
            background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKmaJ6XOU3NtKbDuOYG_GHzWb75nx3CMgc6Q&usqp=CAU");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="second">
    <div class="container">
        <div class="row">
        <div class="col-4">
        </div>
            <div class="col-4 mt-5 bg-white text-dark p-5">
                <form method="POST">
                <h2 class=text-dark>Already Exists...?</h2>
                    <h4 class=text-dark>LogIn</h4>
                    <label for="">Enter UserName</label>
                    <input type="text"class="form-control"name="email"required><br>
                    <label for="">Password</label>
                    <input type="password"class="form-control"name="password"required>
                    <a href="register1.php">Don't have an account</a><br>
                    
                    <input type="submit" name="submit" value="login" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>