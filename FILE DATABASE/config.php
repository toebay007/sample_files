
<?php

include "dbConn.php"; // Using database connection file here

if(isset($_POST["submit"]))
{
    $var1 = rand(1111,9999);  // generate random number in $var1 variable
    $var2 = rand(1111,9999);  // generate random number in $var2 variable
	
    $var3 = $var1.$var2;  // concatenate $var1 and $var2 in $var3
    $var3 = md5($var3);   // convert $var3 using md5 function and generate 32 characters hex number

    $fnm = $_FILES["image"]["name"];    // get the image name in $fnm variable
    $dst = "all_images/".$var3.$fnm;  // storing image path into the {all_images} folder with 32 characters hex number and file name
    $dst_db = "all_images/".$var3.$fnm; // storing image path into the database with 32 characters hex number and file name
     
    move_uploaded_file($_FILES["image"]["tmp_name"],$dst);  // move image into the {all_images} folder with 32 characters hex number and image name
	
    $check = mysqli_query($db,"insert into file_upload(fname,images) values('$_POST[fname]','$dst_db')");  // executing insert query
		
    if($check)
    {
    	echo '<script type="text/javascript"> alert("Data Inserted Seccessfully!"); </script>';  // alert message
    }
    else
    {
    	echo '<script type="text/javascript"> alert("Error Uploading Data!"); </script>';  // when error occur
    }
}
?>