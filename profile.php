<?php
include "connection3.php";
session_start();
$value=$_SESSION['key'];
$sql=mysqli_query($conn,"select * from register where w_id='$value';");
$data=mysqli_fetch_assoc($sql);


?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <style>
        .parent{
            display: inline-block;
            margin-top: 100px;
        
        }
        .first{
            margin-left: 10px;
            margin-top: 10px;
        }
        .second{
            background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIqL3WqxFnEyf5oW_kpyUnYAQD5HEcXJpN5w&usqp=CAU");
            background-repeat: no-repeat;
            background-size: cover;
        }

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body class="second">
        <center>
        <div class="parent">
                <div class="first card" style="width: 18rem;">
                    <img src="./image/<?php echo $data['photo'];?>" alt="image not found" height="200px"  width="100px" class="card-img-top" >          
                    <div class="card-body">
                        <strong >Name:</strong>
                    <h6 class="card-title"><?php echo $data['name'];?></h6>
                    <strong >Email:</strong>
                    <p class="card-text"><?php echo $data['email'];?></p>
                    <strong >Phone:</strong>
                    <p class="card-text"><?php echo $data['phone'];?></p>
                    <a href="updata.php?id=<?php echo $data['w_id'];?>" class="btn btn-primary">Edit</a>
                    
            </div>
            </div>
            </div>

    </center>
     
            
    
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>