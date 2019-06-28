<?php
session_start();

if(isset($_SESSION['uid'])){
  header('location:admin/admindash.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Login</title>
</head>
<body>
  <h1 align="center">Admin Login</h1>
  <form action="login.php" method="post">
    <table align="center">
      <tr>
        <td>Username</td>
        <td><input type="text" name="uname" required></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="password" name="pass" required></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="login" value="Login"></td>
      </tr>
    </table>
  </form>
</body>
</html>

<?php
require "dbcon.php";

if(isset($_POST['login'])){
  $username=$_POST['uname'];
  $password=$_POST['pass'];
  $sql="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
  $result=mysqli_query($conn,$sql);

  $row=mysqli_num_rows($result);
  if($row<1){
    ?>
      <script>
        alert("Username or Password not match!!");
        header('location:login.php');
      </script>
    <?php
  }
  else 
  {
    $data=mysqli_fetch_array($result);
    $id=$data['id'];
    echo "id= ".$id;

    
    $_SESSION['uid']=$id;
    header('location:admin/admindash.php');
  }
}
?>