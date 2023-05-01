

<?php
 
 include_once "DBconnection.php";

 $_GET["username"];
 $_GET["psw"];
 $_GET["email"];
 $_GET["add"];
 $_GET["DOB"];
 $_GET["PN"];
 $hash=md5( $_GET["psw"]);
  
$sql="INSERT INTO `user`(`username`, `password`, `e-mail`, `address`, `date of birth`, `phone number`) VALUES ('". $_GET["username"]."'
,'".$hash."','".$_GET["email"]."','". $_GET["add"]."','". $_GET["DOB"]."','". $_GET["PN"]."')";


if(mysqli_query($conn, $sql)){?> 
    <!DOCTYPE html> 
<html> 

<head> 
	<meta http-equiv="refresh"
		content="1; url = ../user pages/User page.php " /> 
</head> 

<body> 
	<h1 style="text-align:center;color:#1977cc;"> 
		Generation Z Barber 
	</h1> 
	
	<p style="text-align:center;"> 
		
		Homepage, in 1 seconds. 
	</p> 
</body> 

</html>

  <?php  
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?>
