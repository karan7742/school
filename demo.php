 <?php 
  
  include("config/db.php");
  if(isset($_POST['submit'])) 
  {
  	
  	$fname = $_POST['fname'];
  	$lname = $_POST['lname'];
  	$email = $_POST['email'];
  	$password = $_POST['Password'];

  	 $insertQuery = "insert into demo(fname,lname,email,password) values('".$fname."','".$lname."','".$email."','".$password."')";
       
       if($conn->query($insertQuery))
       {
       	echo "<script>alert('new record inseted')</script>";
       }
       else{
       	echo "error:".mysqli_error($con);
       }

       }



  ?>

<!DOCTYPE html>
<html>
<head>
	<title>domo class</title>
</head>
<body>
<form method="post" class="domo" action="">
<label>name</label>
<input type="text" name="fname"><br>
<label>lname</label>
<input type="text" name="lname"><br>
<label>email</label>
<input type="text" name="email"><br>
<label>Password</label>
<input type="text" name="Password"><br>
<button name="submit">submit</button>
</form>
</body>
</html>
