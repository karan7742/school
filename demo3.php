 <?php 
  
  include("config/db.php");
  if(isset($_POST['submit']))
  {
  	
  	$name = $_POST['name'];
  	$fathername = $_POST['fathername'];
  	$mothername = $_POST['mothername'];
  	$dateofbirth = $_POST['dateofbirth'];
  	$contact = $_POST['contact'];
  	$hindi = $_POST['hindi'];
  	$english = $_POST['english'];
  	$mathe = $_POST['mathe'];
  	$clanguage = $_POST['clanguage'];
  	$web = $_POST['web'];
  	$ca = $_POST['ca'];
  	$insertQuery = "INSERT INTO `student`( `name`, `fathername`, `mothername`, `dateofbirth`, `contact`, `hindi`, `english`, `mathe`, `clanguage`, `web`, `ca`) VALUES ('".$name."','".$fathername."','".$mothername."','".$dateofbirth."','".$contact."','".$hindi."','".$english."','".$mathe."','".$clanguage."','".$web."','".$ca."')";
  	print_r($insertQuery);
  	if($conn->query($insertQuery))
       {
       	echo "<script>alert('new record inseted')</script>";
       }
       else{
       	echo "error:".mysqli_error($con);
       }

       }

?>
<html>
<head>
<title>student</title>
</head>
<body>
	<form method="post" action="">
     
     <label>name :</label>	
     <input type="text" name="name"><br><br>
     <label>father name :</label>
     <input type="text" name="fathername">
     <br><br>
     <label>mother name</label>
     <input type="text" name="mothername">
     <br><br>
     <label>date of birth :</label>
     <input type="text" name="dateofbirth">
     <br><br>
     <label>contact:</label>
     <input type="text" name="contact">
       <br><br>
     <label>hindi :</label>
     <input type="text" name="hindi">
     <br><br>
     <label>english :</label>
     <input type="text" name="english">  <br><br>
     <label>mathe :</label>
     <input type="text" name="mathe">  <br><br>
     <label>c language :</label>
     <input type="text" name="clanguage">  <br><br>
     <label>web :</label>
     <input type="text" name="web">  <br><br>
     
     <label>c.a :</label>
     <input type="text" name="ca">  <br><br>
     <input type="submit" name="submit" value="submit">
     
	</form>
</body>