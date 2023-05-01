<?php
 
 include_once "DBconnection.php";

 $_GET["name"];
 $_GET["E-mail"];
 $_GET["PN"];
 $_GET["date"];
 $_GET["location"];

$sql="INSERT INTO `appointment`(`name`, `E-mail`, `phone`, `date`, `location`) VALUES  ('".$_GET["name"]."'
,'" .$_GET["E-mail"]."','".$_GET["PN"]."','". $_GET["date"]."','".  $_GET["location"]."')";

if(mysqli_query($conn, $sql)){
  header("Location: ../user pages/User page.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
   
}
?> 
 
