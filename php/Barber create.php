<?php
 
 include_once "DBconnection.php";

 $_GET["username"];
 $_GET["PN"];
 $_GET["add"];
 $_GET["image"];
 $_GET["facebook"];
 $_GET["instagram"];

$sql="INSERT INTO `barbers`( `name`, `phone number`, `address`, `image`, `facebook`, `instagram`) VALUES('". $_GET["username"]."'
,'". $_GET["PN"]."','". $_GET["add"]."','". $_GET["image"]."','".  $_GET["facebook"]."','". $_GET["instagram"]."')";

if(mysqli_query($conn, $sql)){
    header("Location: Barbers index.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?> 
 
