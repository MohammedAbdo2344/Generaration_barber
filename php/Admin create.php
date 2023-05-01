<?php
 
 include_once "DBconnection.php";

 $_GET["username"];
 $_GET["psw"];
 $_GET["email"];
 $_GET["add"];
 $_GET["DOB"];
 $_GET["PN"];
 $hash=md5( $_GET["psw"]);
  
$sql="INSERT INTO `user`(`username`, `password`, `e-mail`, `address`, `date of birth` , `phone number`) VALUES ('". $_GET["username"]."'
,'".$hash."','".$_GET["email"]."','". $_GET["add"]."','". $_GET["DOB"]."','". $_GET["PN"]."')";

if(mysqli_query($conn, $sql)){
    header("Location: Admin index.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?> 
 
