<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Student Management System</title>
</head>
<body>
  <h3 align="right" style="margin-right:20px;"><a href="login.php">Admin Login</a></h3>
  <h1 align="center">Wellcome to Student Management System</h1>
  <form method="post" action="index.php">
    <table style="width:30%;" align="center" border="1">
      <tr>
        <td colspan="2" align="center">Student Information</td>
      </tr>
      <tr>
        <td align="left">Choose Standard</td>
        <td>
          <select name="std" id="" required>
            <option value="">Select Standard</option>
            <option value="1">1st</option>
            <option value="2">2nd</option>
            <option value="3">3rd</option>
            <option value="4">4rth</option>
            <option value="5">5th</option>
            <option value="6">6th</option>
            <option value="7">7th</option>
            <option value="8">8th</option>
            <option value="9">9th</option>
            <option value="10">10th</option>
          </select>
        </td>
      </tr>
      <tr>
        <td align="left">Enter Rollno</td>
        <td>
          <input type="text" name="rollno" required>
        </td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input type="submit" name="submit" value="Show Details">
        </td>
      </tr>
    </table>
  </form>
</body>
</html>

<?php

?>