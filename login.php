<?php
include "connection2.php";
session_start();
if(isset($_POST['login'])){
    $username=$_POST['email'];
    $password=$_POST['password'];
    $result=mysqli_query($conn,"SELECT * FROM login WHERE user_name='$username' AND password='$password'");
    if($result){
        $row=mysqli_fetch_assoc($result);
        $count=mysqli_num_rows($result);
        if($count==1){
            $_SESSION['id']=$row['login_id'];
        }
        ?>
        <script>
            window.location.assign('Home.php');
        </script>
        <?php
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
<body>
    <div class="container">
        <div class="row">
        <div class="col-4">
        </div>
            <div class="col-4 mt-5 bg-dark text-light p-5">
                <form action=""method="POST">
                    <h2 class=text-light>LogIn</h2>
                    <label for="">Enter UserName</label>
                    <input type="text"class="form-control"name="email"required><br>
                    <label for="">Password</label>
                    <input type="password"class="form-control"name="password"required><br>
                    
                    <button name="login">login</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>