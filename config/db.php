<?php

$servername = "localhost";
$username = "root";
$password = "";



$conn = new mysqli($servername, $username, $password,"teacher");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>