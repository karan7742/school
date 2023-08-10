<html>
<head><title>Teacher Information</title></head>
<link rel="stylesheet" type="text/css" href="./assets/css/form.css">
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";



$conn = new mysqli($servername, $username, $password,"teacher");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit'])) {
$name = $_POST['name'];
$subject = $_POST['subject'];
$mobile_no = $_POST['mobile_no'];
$address = $_POST['address'];


$insertQuery = "insert into teacher_information(name,subject,mobile_no,address) values('".$name."','".$subject."','".$mobile_no."','".$address."')";

$conn->query($insertQuery);


}
//echo "Connected successfully";
?>
  
 <div class="container">
      <div class="text">
         Contact us Form
      </div>
      <form method="post" action="">
         <div class="form-row">
            <div class="input-data">
               <input type="text"  name="name"  required>
               <div class="underline"></div>
               <label for="">Name</label>
            </div>
            <div class="input-data">
               <input type="text" name="subject" required>
               <div class="underline"></div>
               <label for="">Subject</label>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data">
               <input type="text" name="mobile_no" required>
               <div class="underline"></div>
               <label for="">Mobile No.</label>
            </div>
            <div class="input-data">
               <input type="text" name="address" required>
               <div class="underline"></div>
               <label for="">Address</label>
            </div>
         </div>
           
            <br />
            <div class="form-row submit-btn">
               <div class="input-data">
                  <div class="inner"></div>
                  <input type="submit" name="submit" value="submit">
               </div>
            </div>
      </form>
        
      </div>
</body>
</html>