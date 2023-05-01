<?php
 
 include_once "DBconnection.php";

 $_GET["name"];
 $_GET["price"];
 $_GET["image"];

  
$sql="INSERT INTO `tools`( `name`, `price`, `image`) VALUES('". $_GET["name"]."','". $_GET["price"]."','". $_GET["image"]."')";

if(mysqli_query($conn, $sql)){
    header("Location: ../Admin pages/Store/Tools.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?> 
 
