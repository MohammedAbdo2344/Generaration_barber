<?php
include_once "DBconnection.php";
  $username = $_POST["username"];
  $email= $_POST["email"];
  $password=$_POST["psw"];
  $add=$_POST["add"];
  $phonenumber=$_POST["PN"];
  $id=$_POST["id"];
  $hash=md5($password);
$sql="UPDATE `user` SET `username`='".$username."',`password`='".$hash."',`e-mail`='".$email."',`address`='".$add."',
`phone number`='".$phonenumber."' WHERE `id` ='".$id."'";

if(mysqli_query($conn, $sql) > 0){
   header('Location: ../user pages/User page.php');
  
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?>
