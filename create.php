
<?php
include "connection.php";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $sql=mysqli_query($conn,"INSERT INTO register(name,email,phone) VALUES ('$name','$email','$phone')");
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
<body>
    <div class="container ml-5">
        <div class="row">
            <div class="col-4">

            </div>
            <form method="POST">
            <div class="col-4 mt-5 bg-dark text-light p-5">
                <h1 class="text-light">Register</h1>
                <label for="">name</label>
                <input type="text" name="name" class="form-control" required><br>
                <label for="">email</label>
                <input type="email" name="email" class="form-control" required><br>
                <label for="" >mobile</label>
                <input type="mobile" name="phone" class="form-control" required>
                <button type="submit" class="btn-primary mx-5" name="submit">Submit</button>

            </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>