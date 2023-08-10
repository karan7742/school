<?php 
$servername = "localhost";
$username = "root";
$password = "";

$conn-> new mysqli($servername,$username,$password,"sf");
if($conn->connect_error){
	die("connect faild:"."$conn->connect_error");
}
if(isset($_POST[submit])) {
	$name = $_POST['variable'];
	$class = $_POST['variable'];
$insertQuery ="insert into demo(name,class) values('".$name."','".$class."')";
if($conn->query($insertQuery)){
	echo "<script>alert('new recoder add')</script>";
}
esle{
	echo "error",.mysqli_error($con);
}
}

 ?>

