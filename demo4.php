<?php 
$servername ="localhost";
$username ="root";
$password ="";
$conn = new mysqli($servername,$username,$password,"teacher");
if($conn->connect_error ){
die("Connection failed:" . $conn->connect_error);}
if(isset($_POST['submit'])){
 $name = $_POST['name'];
 $class = $_POST['class'];
 $school = $_POST['school'];
 $date = $_POST['date'];
 $insertQuery = "insert into demo4(name,class,school,date) values('".$name."','".$class."','".$school."','".$date."')"; 
 if($conn->query($insertQuery)){
	echo "<script>alert('new recode insert')</script>";}
else{
   	echo "error:".mysqli_error($con);
       }
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>demo4</title>
</head>
<body>
<form method="post" action="">
	<label>name : </label>
	<input type="text" name="name"><br><br>
	<label>class : </label>
	<input type="text" name="class"><br><br>
	<label>school : </label>
	<input type="text" name="school"><br><br>
	<label>date : </label>
	<input type="date" name="date"><br><br>
	<input type="submit" name="submit"><br><br>
</form>
</body>
</html>