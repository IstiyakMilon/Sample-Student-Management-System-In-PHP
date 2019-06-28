<?php
session_start();
if(isset($_SESSION['uid'])){
   echo "";
}
else 
{
  header('location:../login.php');
}
?>

<?php
require "header.php";
require "titlehead.php";
?>
  
  
  <div class="dashboard">
    <table style="width:50%" align="center" border="1px">
      <tr>
        <td>1.</td>
        <td><a href="addStudent.php">Insert Student Details</a></td>
      </tr>
      <tr>
        <td>2.</td>
        <td><a href="updateStudent.php">Update Student Details</a></td>
      </tr>
      <tr>
        <td>3.</td>
        <td><a href="deleteStudent.php">Delete Student Details</a></td>
      </tr>
    </table>
  </div>
  
</body>
</html>