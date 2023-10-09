<?php
include "connection3.php";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $data=mysqli_insert_id($conn);
    $filename=$_FILES["photo"]["name"];
    $tempname=$_FILES["photo"]["tmp_name"];
    $folder="./image/".$filename;
    $image=$filename;
    $uploadOk=1;
    $imageFileType=strtolower(pathinfo($folder,PATHINFO_EXTENSION));
    if($imageFileType!="jpg"&& $imageFileType!="png"&& $imageFileType!="jepg"&&$imageFileType!="gif"){
        echo "Sorry image of file type jpg,jepg,pdf and gif are allowed";
        $uploadOk=0;
    }
    if($uploadOk==0){
        echo "sorry";
    }else{
        move_uploaded_file($tempname,$folder);
    }
    $result=mysqli_query($conn,"INSERT INTO register(name,email,phone,password,photo) VALUES('$name','$email','$phone','$password','$image')");
    $data=mysqli_insert_id($conn);
    $sql1=mysqli_query($conn,"INSERT INTO login(login_id,email,password) VALUES('$data','$email','$password')");
    if($sql1)
    {
        echo '<script> alert("Registered sucessfully");window.location.href="login1.php";</script>';
    }
    else{
        echo '<script> alert("something went wrong");</script>';

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
            background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHSdf4vSys8Uio9xUnQnamwg0PVAZZqiFHrw&usqp=CAU");
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
                <form method="POST" enctype="multipart/form-data">
                    <center><h1>Welcome</h1></center>
                    <h4 class=text-dark>Register</h4>
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" required>
                    <label for="">Enter Email</label>
                    <input type="text"class="form-control" name="email" required>
                    <label for="">Phone</label>
                    <input type="number"class="form-control" name="phone" required>
                    <label for="">Password</label>
                    <input type="password"class="form-control" name="password" required>
                    <label for="">Password</label>
                    <input type="file"class="form-control" name="photo" required>
                    <a href="login1.php">Already Exists</a><br>
                    <center><button name="submit" class="btn btn-danger">Submit</button></center>
                    </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>




    
    
</body>
</html>