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

  <form action="addStudent.php" method="post" enctype="multipart/form-data">
    <table border="1px" align="center" style="width:40%; margin-top:40px;">
      <tr>
        <td>Rollno</td>
        <td><input type="text" name="rollno" placeholder="Enter Your Roll" required></td>
      </tr>
      <tr>
        <td>Full Name</td>
        <td><input type="text" name="name" placeholder="Enter Full Name" required></td>
      </tr>
      <tr>
        <td>City</td>
        <td><input type="text" name="city" placeholder="Enter City" required></td>
      </tr>
      <tr>
        <td>Parents Contact No</td>
        <td><input type="text" name="parentscontact" placeholder="Enter Parents Contact No" required></td>
      </tr>
      <tr>
        <td>Standard</td>
        <td><input type="number" name="std" placeholder="Enter Standard" required></td>
      </tr>
      <tr>
        <td>Image</td>
        <td><input type="file" name="simg" required></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
      </tr>
    </table>
  </form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
  require "../dbcon.php";
  $rollno=$_POST['rollno'];
  $name=$_POST['name'];
  $city=$_POST['city'];
  $pcont=$_POST['parentscontact'];
  $standard=$_POST['std'];
  $imagename=$_FILES['simg']['name'];
  $tempname=$_FILES['simg']['tmp_name'];

  move_uploaded_file($tempname, "../dataimage/$imagename");

  $sql="INSERT INTO `student`(`id`, `rollno`, `name`, `city`, `parentscont`, `standard`,`image`) VALUES (null,'$rollno','$name','$city', '$pcont','$standard','$imagename')";
  echo $sql;
  
  if($result=mysqli_query($conn, $sql)){
    ?>
    <script>
      alert("Data Inserted Successfully");
    </script>
    <?php
  }
}
?>
