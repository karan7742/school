<?php
  $servername ="localhost";
  $username ="root";
  $password ="";

  $conn = new mysqli($servername,$username,$password,"teacher");
if($conn->connect_error){

	die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$date = $_POST['date'];

	$insertQuery = "insert into demo2 (name,age,gender,date ) values('".$name."','".$age."','".$gender."','".$date."')";
	print_r($insertQuery);
	if ($conn->query($insertQuery)) {

		echo "<script>alert('new record inseted')</script>";
		
	}
	else{
		echo "error:".mysqli_error($con);
	}
}




  ?>
<html>
<head>
<title>demo2</title>
</head>

<body>
	<form method="post">
		<label>name</label>
		<input type="text" name="name"><br>
		<label>age</label>
		<input type="text" name="age"><br>
		<label>gender</label>
		<input type="radio" name="gender" value="male">
		<input type="radio" name="gender" value="female">
		<br>
		<label>date</label>
		<input type="date" name="date"><br>
		<input type="submit" name="submit" value="submit">

	</form>
</body>