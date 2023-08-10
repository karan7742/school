<?php 
  $id=''; //'".."'

include("config/db.php");
if (isset($_GET['name'])) {
  $subject=$_GET['name'];
}

if (isset($_GET['id'])) {
      $id=$_GET['id'];
      $delete=mysqli_query($conn,"DELETE FROM `demophp` WHERE `id`='$id'");
   }
if (isset($_POST['Update'])) {
     $id=$_GET['id'];
     $name=$_POST['name'];
     $phone=$_POST['phone'];
     $project=$_POST['project'];
     $q="UPDATE `demophp` SET `id`='".$id."',`project`='".$project."',`name`='".$name."',`phone`='".$phone."', WHERE id=$id";
     $query=mysqli_query($conn,$q);


        }
echo $id;
$sql = "SELECT * FROM `demophp`";
$result = $conn->query($sql);
if($result->num_rows > 0 )
{
	echo '  <table class="table table-success  table-hover">';
	    echo '<thead class="table table-primary table-hover">';
	        echo '<tr>';
	            echo '<td>ID</td>';
                echo '<td>porject</td>';
	            echo '<td>name</td>';
	            echo '<td>phone</td>';
	            echo '<td>status</td>';
                echo '<td class="ac-td">operation</td>';
            echo '</tr>';
        echo '</thead>';
    while($row = $result->fetch_assoc()){
    	    echo '<tr>';
               echo '<td>' . ($row['id'])      . '</td>';
               echo '<td>' . ($row['project']) . '</td>';
    	       echo '<td>' . ($row['name'])    . '</td>';
    	       echo '<td>' . ($row['phone'])   . '</td>';
    	       echo '<td>' . ($row['action'])  . '</td>';
    	       echo '<td>
                         <a class="btn-link" href="demophp2.php?id='.$row['name'].'" >Get</a>
                         <a class="btn-green" href="edit.php?id='.$row['id'].'" >Update</a>
                         <a class="btn-red" href="demophp2.php?id='.$row['id'].'">Delete</a>
                     </td>';
        echo '</tbody>';

    }   
    echo '</table>';    
}
$conn->close();


  

  ?>
 <style>
 	table tr td {
    border: 1px solid black;
}
table {
    width: 100%;
    text-align: center;
}
button.btne {
    width: 74px;
    background: cadetblue;
    margin-left: 10px;
    margin-right: 10px;
}
td.ac-td {
    width: 25%;
}
a.btn-link {
    text-decoration: none;
    color: #fff;
    border: 1px solid blue;
    background: blue;
    padding: 3px 15px;
}
a.btn-link:hover {
    color: blue;
    background: #fff;
}
a.btn-green{
	text-decoration: none;
    color: #fff;
    border: 1px solid darkgreen;
    background: darkgreen;
    padding: 3px 15px;
}

a.btn-green:hover {
	 color: darkgreen;
    background: #fff;
}
a.btn-red{
	text-decoration: none;
    color: #fff;
    border: 1px solid red;
    background: red;
    padding: 3px 15px;
}
a.btn-red:hover{
	color: red;
    background: #fff;
}

 </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>