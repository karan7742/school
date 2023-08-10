<?php

include("config/db.php");
//mysql connection code

if(isset($_POST['submit'])) {
$email = $_POST['email'];

$sql = "SELECT * FROM `users` WHERE `email` = '".$email."'";
$result = mysqli_query($conn, $sql);
    //now we will save to db
$conn->query($sql);
}
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - <br> Name: " . $row["fname"]. " " . $row["lname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<html>
<head><title>Teacher Information</title></head>
<link rel="stylesheet" type="text/css" href="assets/css/login.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body class="container">
  <div class="re-page">
	<div class="row">
        <div class="register-page">
            <div class="col-lg-5">
            	<img src="assets\img\dog2.jpg">
            </div>
        </div>
            <div class="col-lg-7">
            	<h1 class="acc">Welcome Back!</h1>
            	<form class="user" method="post" action="">
                    <div class="na-id">
            		<div class="col-lg-6">
                     <input class="name" name="email" placeholder="Enter Email address" required>
                    </div>
                   
                    <div class="col-lg-6">
                     <input class="pass" name="cpassword" placeholder="Password" required>
                    </div>
                    <div class="check">
                    <input type="checkbox" name="checkbox">
                    <label>Remember ME</label>
                </div></div>
                <div class="regi-a/c">
                    <input type="submit" name="submit" class="re-su" value="Login">
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
                    <a class="alr-pas" href="#">Create an Account!</a>
              </form>
            </div>
        </div>

 </div>
</body>
</html>
