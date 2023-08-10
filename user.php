<?php 
$id="";
include("config/db.php");

   if (isset($_GET['id'])) {
      $id=$_GET['id'];
      $delete=mysqli_query($conn,"DELETE FROM `login3` WHERE `id`=$id");
      header("location: user.php");
  //   echo "<pre>"; print_r($delete); exit;
   }
if(isset($_POST['update'])){
	$id=$_GET['id'];
	$username=$_GET['username'];
	$password=$_GET['password'];
	$q="UPDATE `login3` SET `id`='".$id."',`username`='".$username."',`password`='".$password."', WHERE id=$id";
	$query=mysqli_query($conn,$q);


}


echo $id;
$sql="SELECT * FROM login3";
$result=$conn->query($sql);
if($result->num_rows > 0 ){



	echo '<table class="table table-success  table-hover" >';
	    echo '<thead class="table table-primary table-hover" >';
            echo '<tr>';
               echo '<td>ID</td>';
               echo '<td>Username</td>';
               echo '<td>Password</td>';
               echo '<td>created_At</td>';
               echo '<td>status</td>';
               echo '<td>opartion</td>';
            echo '</tr>';   
        echo '</thead>';
 
    while($row = $result->fetch_assoc()){

    	    echo '<tr>';
                echo '<td>'.($row['id']).'</td>';
                echo '<td>'.($row['username']).'</td>';
                echo '<td>'.($row['password']).'</td>';
                echo '<td>'.($row['create_at']).'</td>';
                echo '<td>'.($row['status']).'</td>';
                echo '<td>
                         <a class="btn-link" href="?id=" >Get</a>
                         <a class="btn-green" href="update.php?id='.$row['id'].'" >Update</a>
                         <a class="btn-red" href="user.php?id='.$row['id'].'">Delete</a>

                        </td>';
            echo '</tr>';    
    } 
    echo'</table>';        
} 
 ?> 
 <style>
 	table tr td {
    border: 1px solid darkgreen;
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
  <!DOCTYPE html>
  <html>
  <head>
  	
  	<title>Table Page</title>
  </head>
  <body>
  
  </body>
  </html>