<?php
$conn=mysqli_connect('localhost', 'root', '','student_management_system');

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>