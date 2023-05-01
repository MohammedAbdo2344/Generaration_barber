<?php
include_once "DBconnection.php";
  $username = $_GET["name"];
  $add=$_GET["add"];
  $phonenumber=$_GET["PN"];
  $image=$_GET["image"];
  $facebook=$_GET["facebook"];
  $instagram=$_GET["instagram"];
  $id=$_GET["id"];
$sql="UPDATE `barbers` SET `name`='".$username."',`address`='".$add."',`phone number`='".$phonenumber."',`image`='".$image."'
,`facebook`='".$facebook."',`instagram`='".$instagram."' WHERE `id` ='".$id."'";

if(mysqli_query($conn, $sql)){
    header('Location: Barbers index.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?>
    