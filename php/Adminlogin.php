<?php 
   $_SESSION['loggedIn'] = true;  
include_once "DBconnection.php";

    $uname=$_POST['username'];
    $password=$_POST['psw'];
    // Perform query
        $result = mysqli_query($conn, "SELECT * FROM `admins` WHERE `username`='".$uname."' AND `password`='".$password."' limit 1");
        
        if (mysqli_num_rows($result)==1) {
           header("location: ../Admin pages/Admin Page.php");
        exit();
        }
        else{
            echo "<script> alert('Login Faild') </script>";
            exit();
    
}
 

?>
    
    
    
   
    
    
        
