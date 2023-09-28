<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="POST">
    user_name:<input type="text" name="user">
    blood_group:<input type="text" name="blood">
    <input type="submit" name="submit" >
    </form>
    
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $user_name=$_POST['user'];
    $blood_group=$_POST['blood'];
    echo "$user_name,$blood_group";
}
?>