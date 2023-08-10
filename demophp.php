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
$project = $_POST['project'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$yes = $_POST['yes'];


$insertQuery = "insert into demophp(project,name,phone,action) values('".$project."','".$name."','".$phone."','".$yes."')";

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
               <input type="text"  name="project"  required>
               <div class="underline"></div>
               <label for="">project</label>
            </div>
            <div class="input-data">
               <input type="text" name="name" required>
               <div class="underline"></div>
               <label for="">name</label>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data">
               <input type="text" name="phone" required>
               <div class="underline"></div>
               <label for="">phone</label>
            </div>
            <div class="input-data">
               <input type="radio" name="yes" value="yes">
               <label>Yes</label>
               <input type="radio" name="yes" value="no">
               <label class="idno">No</label>
            </div>
         </div>
           
            <br />
            <div class="form-row submit-btn">
               <div class="input-data">
                  <div class="inner"></div>
                  <input type="submit" name="submit" value="submit">
               </div>
               <div class="data">
                  <div class="check">
                       <button class="ch-bt">
                          <a class="check-btn" href="http://localhost/school/demophp2.php">Check</a>
                       </button>
                  </div>
            </div>
         </div>
      </form>
        
      </div>
</body>
</html>