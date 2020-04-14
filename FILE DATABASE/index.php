<?php require "config.php" ?>
<!DOCTYPE html>
<html>
<head>
  <title>Store and retrieve image from database in PHP</title>
</head>
<body>

<h2>Insert Data</h2>

<form method="post" action="config.php" enctype="multipart/form-data">
  <table border="2">
    <tr>
      <td>Enter Name</td>
      <td><input type="text" name="fname" placeholder="Enter Name" Required></td>
    </tr>
    <tr>
      <td>Select Image</td>
      <td><input type="file" name="image" Required></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="submit" value="Upload"></td>			
    </tr>
  </table>
</form>

<hr/>

<h2>All Records</h2>

