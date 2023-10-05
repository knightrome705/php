<?php
include "connection1.php";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $quali=implode(",",$_POST['qualification']);
    $address=$_POST['address'];
    $district=$_POST['district'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $sql=mysqli_query($conn,"INSERT INTO register(name,dob,gender,qualification,address,district,email,mobile,password) VALUES ('$name','$dob','$gender','$quali','$address','$district','$email','$mobile','$password')");
if($sql){
    echo'<script>alert("registered sucessfully");window.location.href="form.php";</script>';
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
<div class="container ml-5">
    <div class="row">
        <div class="col-4">

        </div>
        <form method="POST">
        <div class="col-4 mt-5 bg-dark text-light p-5 ">
            <h1 class="text-light">Register</h1>
            <label for="">Name</label>
            <span id="one" style="color: red;"></span>
            <input type="text" name="name" class="form-control" id="user" onkeyup="clearmsg('one')"><br>
            <label for="">DOB</label>
            <input type="date" name="dob" class="form-control" ><br>
            <label for="" >Gender</label>
            <input type="radio"  name="gender" value="male">male
            <input type="radio"  name="gender" value="female">female
            <br>
            <label for="" >Qualification</label>
            <br>
            <input type="checkbox" name="qualification[]" value="sslc">sslc
            <input type="checkbox" name="qualification[]" value="plus2">plus 2
            <input type="checkbox" name="qualification[]" value="degree">Degree
            <input type="checkbox" name="qualification[]" value="masters">Masters
            <br>
            <label for="" >Address</label>
            <span id="two" style="color: red;"></span>
            <input type="text" name="address" id="address" class="form-control" onkeyup="clearmsg('two')" ><br>
            <label for="">District</label>
            <select name="district" >
                <option value="select">please select</option>
                <option value="kannur">kannur</option>
                <option value="kozhikode">Kozhikode</option>
                <option value="kochi">Kochi</option>
            </select>
            <br>
            <label for="" >Email</label>
            <span id="three" style="color: red;"></span>
            <input type="text" name="email" id="email" class="form-control" onkeyup="clearmsg('three')" >
            <input type="button" value="validate" onclick="emailValidation()"><br>
            <label for="" >Mobile</label>
            <span id="four" style="color: red;"></span>
            <input type="mobile" name="mobile" id="mobile" class="form-control" onkeyup="clearmsg('four')" >
            <input type="button" value="validate" onclick="return phoneValidation();return false;"><br>
            <label for="" >Password</label>
            <span id="five" style="color: red;"></span>
            <input type="password" name="password" id="password" class="form-control" onkeyup="clearmsg('five')" onchange="return passwordValidation()" ><br>
            <button type="submit" class="btn-primary mx-5" name="submit" onclick="return validation();return false;">Submit</button>

        </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
<script>

    function validation(){
            let name=document.getElementById("user").value;
            let email=document.getElementById("email").value;
            let address=document.getElementById("address").value;
            let mobile=document.getElementById("mobile").value;
            let password=document.getElementById("password").value;
            
            if(name==""){
            document.getElementById("one").innerHTML="Enter your name";
            return false;     
        }
        if(address==""){
            document.getElementById("two").innerHTML="Enter your address";
            return false;     
        }
        if(email==""){
            document.getElementById("three").innerHTML="Enter your email";
            return false;     
        }
        if(mobile==""){
            document.getElementById("four").innerHTML="Enter your mobile number";
            return false;     
        }
        if(password==""){
            document.getElementById("five").innerHTML="Enter your password";
            return false;     
        }
    }
        
    function clearmsg(sp){
        document.getElementById(sp).innerHTML="";
    }
    function emailValidation(){
        let email=document.getElementById("email").value;
        const regex = /^[a-z0-9]+@[a-z]+\.[a-z]{2,3}$/;
        if(regex.test(email)){
            alert("email valid");
        }else{
            alert("Enter a valid mail");
        }
    }
    function phoneValidation(){
        let phone=document.getElementById("mobile").value;
        if(phone.length>10){
            alert("invalid mobile number");
            return false;
        }
        else if(phone.length<10){
            alert("invalid mobile number");
            return false;

        }else{
            alert("valid");
            return true;

        }
    }
    function passwordValidation(){
        let password=document.getElementById("password").value;
        
            if(password.length<8){
                alert("enter a password of length greater than 8");
                return false;
            }
            if(!/[A-Z]/.test(password)){
                alert("atleast one capital letter");
                return false;
            }
            if(!/[a-z]/.test(password)){
                alert("atleast one small letter");
                return false;
            }
            if(!/\d/.test(password)){
                alert("atleast one digit");
                return false;
            }
            return true;   
        
        
    }



    
</script>
</html>