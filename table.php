 <?php 

  include("config/db.php");
  $sql="SELECT * FROM `teacher_information`";
  $result=$conn->query($sql);
  if ($result->num_rows > 0) {
      echo '<table>';
     echo '<thead>';
              echo '<tr>';
                 echo '<td>Name</td>';
                 echo '<td>subject</td>';
                 echo '<td>mobile no</td>';
                 echo '<td>address</td>';
                 echo '<td>created at</td>';
              echo '</tr>';   
      echo '</thead>';
  while($row = $result->fetch_assoc()) {
   
  

        echo '<tr>';
          echo '<td>' . ($row['name']) . '</td>';
          echo '<td>' . ($row['subject']) . '</td>';
          echo '<td>' . ($row['mobile_no']) . '</td>';
          echo '<td>' . ($row['address']) . '</td>';
          echo '<td>' . ($row['created_atn']) . '</td>';
        echo '</tr>';
     
    

  }
  echo '</table>';  
}
$conn->close();


?>

