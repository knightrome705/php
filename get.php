<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="GET">
    user_name:<input type="text" name="user">
    blood_group:<input type="text" name="blood">
    <input type="submit" name="submit" >
    </form>
    
</body>
</html>
<?php
if(isset($_GET['submit'])){
    $user_name=$_GET['user'];
    $blood_group=$_GET['blood'];
    echo "$user_name,$blood_group";
}
?>