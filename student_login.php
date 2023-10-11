<?php
session_start();
include "connection2.php";
if(isset($_POST['submit'])){
$username=$_POST['email'];
$password=$_POST['password'];
$result=mysqli_query($conn,"SELECT * FROM login WHERE user_name='$username'");
if($result)
{
    $row=mysqli_fetch_assoc($result);
    $hash=password_verify($password,$row['password']);
    $count=mysqli_num_rows($result);
    if($count==1 && $hash)
    {
       
        $_SESSION['key']=$row['login_id'];
        ?>
        <script>
        window.location.assign('studenthome.php');
    </script>
    <?php
        
    }
    
   
}
}


?>






<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
        <div class="row">
        <div class="col-4">
        </div>
            <div class="col-4 mt-5 bg-dark text-light p-5">
                <form action=""method="POST" enctype="multipart/form-data">
                    <h2 class=text-light>Register</h2>
                    <label for="">Enter Email</label>
                    <input type="text"class="form-control"name="email"required><br>
                    <label for="">Enter password</label>
                    <input type="password"class="form-control"name="password"required><br>
                    <button type="submit"class="btn btn-danger mt-3 mx-5"  name="submit">Submit

                    </button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>