<?php
include "connection2.php";
$sql=mysqli_query($conn,"select * from student;");

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
        <script>
            let count=0;
        </script>
  
        <table>
            <tr>
            <?php
        while($row=mysqli_fetch_assoc($sql)){
        ?>
            <td>
            <div class="card" style="width: 18rem;">
            <img src="./image/<?php echo $row['photo'];?>" alt="image not found" height="100px"  width="100px" class="card-img-top" >          
            <div class="card-body">
            <h5 class="card-title"><?php echo $row['name'];?></h5>
            <p class="card-text"><?php echo $row['email'];?></p>
            <p class="card-text"><?php echo $row['phone'];?></p>
            <a href="student_update.php?id=<?php echo $row['s_id'];?>" class="btn btn-primary">Edit</a>
            
    </div>
    </div>
        </td>
        <?php 
            }
            ?>
            </tr>
            
        </table>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>