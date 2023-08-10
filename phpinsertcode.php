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