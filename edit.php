<?php
include "connection2.php";
$id=$_GET['id'];
$sql=mysqli_query($conn,"SELECT * FROM register WHERE id='$id'");
$data=mysqli_fetch_assoc($sql);
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $filename=$_FILES["photo"]["name"];
    $tempname=$_FILES["photo"]["tmp_name"];
    $folder="./image/".$filename;
    $image=$filename;
    $uploadOk=1;
    $imageFileType=strtolower(pathinfo($folder,PATHINFO_EXTENSION));
    if($imageFileType!="jpg"&& $imageFileType!="png"&& $imageFileType!="jpg"&&$imageFileType!="gif"){
        echo "Sorry image of file type jpg,jepg,pdf and gif are allowed";
        $uploadOk=0;
    }
    if($uploadOk==0){
        echo "sorry";
    }else{
        move_uploaded_file($tempname,$folder);
    }

    $sql1=mysqli_query($conn,"UPDATE register SET name='$name',email='$email',phone='$mobile',photo='$image' WHERE id='$id'");
    if($sql1)
    {
        echo '<script> alert("updated sucessfully");window.location.href="form2.php";</script>';
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="one">
<div class="container">
<div class="row">
<div class="col-4">

</div>
<div class="col-4">
<form  method="post" enctype="multipart/form-data">

<input type="text" name="name" class="form-control" value="<?php echo $data['name'];?>"><br>
<input type="email" name="email" class="form-control" value="<?php echo $data['email'];?>"><br>
<input type="text" name="mobile" class="form-control" value="<?php echo $data['phone'];?>"><br>
<input type="file" name="photo">
<input type="submit" value="submit" class="btn-danger" name="submit">




</form>





</div>




</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>