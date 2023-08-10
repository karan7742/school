<?php

include("config/db.php");
//mysql connection code

if(isset($_POST['submit'])) {
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];


$insertQuery = "insert into users(fname,lname,email,password) values('".$fname."','".$lname."','".$email."','".$password."')";
//echo "<pre>"; print_r($insertQuery);

    //now we will save to db
$conn->query($insertQuery);
}

?>


<html>
<head><title>Teacher Information</title></head>
<link rel="stylesheet" type="text/css" href="assets/css/register.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body class="container">
  <div class="re-page">
	<div class="row">
        <div class="register-page">
            <div class="col-lg-5">
            	<img src="assets\img\dog.jpg">
            </div>
        </div>
            <div class="col-lg-7">
            	<h1 class="acc">Create an Account!</h1>
            	<form class="user" method="post" action="">
                    <div class="na-id">
            		<div class="col-lg-6">
                     <input class="name" name="fname" placeholder="Enter first name">
                    </div>
                    <div class="col-lg-6">
                     <input class="name" name="lname" placeholder="Enter last name">
                    </div></div>
                    <div class="col-lg-12">
                        <input class="email" name="email" type="email" placeholder="Enter your email id" required>
                    </div>
                    <div class="pass-id">
                    <div class="col-lg-6">
                     <input class="pass" name="password" placeholder="Password">
                    </div>
                    <div class="col-lg-6">
                     <input class="pass" name="cpassword" placeholder="Repate Password">
                    </div>
                </div>
                <div class="regi-a/c">
                    <input type="submit" name="submit" class="re-su" value="Register Account">
                </div>
                 <div class="regi-a/c">
                    
                    <button class="re-go" type="submit"><img src="assets/img/google.png">Register With Google</button>
                </div>
                 <div class="regi-a/c">
                    <button class="re-fa" type="submit"><img src="assets/img/facebook-app-symbol.png" >Register With facebook</button>
                </div>
                <div class="fo-pass">
                    <a class="forget" href="#">Forget password</a>
                </div>
                <div class="alred-ac">
                    <a class="alr-pas" href="#">Already have an account? Login!</a>
              </form>
            </div>
        </div>

 </div>
</body>
</html>
