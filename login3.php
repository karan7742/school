<?php
include("config/db.php");
if (isset($_POST["submit"])) {

   $username = $_POST['username'];
   $password = $_POST['password'];

   $insertQuery = "insert into login3(username,password) values('".$username."','".$password."')";
   $conn->query($insertQuery);

}
echo "Connected successfully";

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="/school/login3.css">
</head>
<body>
	<div class="login-box">
  <h2>Login</h2>
  <form method="post" action="">
    <div class="user-box">
      <input type="text" name="username" required="">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
      <label>Password</label>
    </div>
    <div class="row">
     <input class="submit" type="submit" name="submit" value="submit">
     <button class="check">
     	<a href="user.php">Check</a>
     </button>
    </div>
  </form>
</div>
</body>
</html>