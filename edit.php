<?php 

  include("config/db.php");

$id=''; 
$id=$_GET['id'];

//edit data
if (isset($_POST['submit'])) {
       $id=$_GET['id'];
       $project=$_POST['project'];
       $name=$_POST['name'];
       $phone=$_POST['phone'];

    $query=mysqli_query($conn, "update demophp set project='$project',name='$name',phone='$phone' where id=".$id);
     
    if ($query) {
    echo "<script>alert('You have successfully update the data');</script>";
    echo "<script type='text/javascript'> document.location ='demophp2.php'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
      

//edit data

?>


<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <form  method="POST" action="">
         <?php
        $ret=mysqli_query($conn, "SELECT * FROM `demophp` where id=".$id);
        while ($row=mysqli_fetch_array($ret)) {
        ?>
        <h2>Update </h2>
        <p class="hint-text">Update your info.</p>
        <div class="form-group">
                <div class="col">
                        <input type="text" class="form-control" name="project" value="<?php  echo $row['project'];?>" required="true">
                </div>
                <div class="col">
                        <input type="text" class="form-control" name="name" value="<?php  echo $row['name'];?>" required="true">
                </div>
        </div>          
         <div class="form-group">
        <input type="text" class="phone" name="phone" value="<?php  echo $row['phone'];?>" required="true" maxlength="10" pattern="[0-9]+">
         </div>
        

        <div class="form-group">
        <button href="demophp2.php "type="submit" class="btn btn-success btn-lg btn-block" name="submit">Update</button>
                </div>
    </form>
    <?php 
}?>

</body>

</html>


