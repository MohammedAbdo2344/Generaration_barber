<?php 

include_once "DBconnection.php";

    $uname=$_POST['username'];
    $password=$_POST['psw'];
    $hash=md5($password);
        $result = mysqli_query($conn, "SELECT * FROM `user` WHERE `username`='".$uname."' AND `password`='".$hash."'limit 1 ");
        
        $row = $result->fetch_assoc();
        $row1=$row["id"];

        if (mysqli_num_rows($result)==1) {
            
            header("location: ../user pages/User Page.php?id='".$row1."'");
        exit();
        }
        else{
        echo "<script> alert('Login Faild') </script>";
        echo '<script>window.location="../User Login.php"</script>';
        
        exit();
    
}
 

?>
    
    
    
   
    
    
        
