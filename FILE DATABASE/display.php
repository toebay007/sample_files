<?php require "config.php" ?>
<table border="2">
  <tr>
    <td>Sr.No.</td>
    <td>Name</td>
    <td>Images</td>
  </tr>

<?php

$records = mysqli_query($db,"select * from file_upload"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['fname']; ?></td>
    <td><img src="<?php echo $data['images']; ?>" width="100" height="100"></td>
  </tr>	
<?php
}
?>

</table>

<?php mysqli_close($db);  // close connection ?>

</body>
</html>