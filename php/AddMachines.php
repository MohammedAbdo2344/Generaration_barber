<?php
 
 include_once "DBconnection.php";

 $_GET["name"];
 $_GET["price"];
 $_GET["image"];
  
$sql="INSERT INTO `machines`( `name`, `price`, `image`) VALUES('". $_GET["name"]."','". $_GET["price"]."','". $_GET["image"]."')";

if(mysqli_query($conn, $sql)){
    header("Location: ../Admin pages/Store/Machines.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?> 
 
