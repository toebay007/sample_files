<?php

$db = mysqli_connect("localhost", "root", "", "logged");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>