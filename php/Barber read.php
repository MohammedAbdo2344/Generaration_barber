<?php

if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    include_once "DBconnection.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM barbers WHERE id =  '".$_GET["id"]."'";
    
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $name = $row["name"];
        $phonenumber = $row["phone number"];
        $address = $row["address"];
        $facebook= $row["facebook"];
        $instagram= $row["instagram"];
    }
            
    mysqli_close($conn);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Barber info </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>View Barber information</h1>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <p class="form-control-static"><?php echo $name ?></p>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <p class="form-control-static"><?php echo $address ?></p>
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <p class="form-control-static"><?php echo $phonenumber ?></p>
                    </div>
                    <div class="form-group">
                        <label>Facebook</label>
                        <p class="form-control-static"><?php echo $facebook ?></p>
                    </div>
                    <div class="form-group">
                        <label>Instagram</label>
                        <p class="form-control-static"><?php echo $instagram ?></p>
                    </div>
                    <p><a href="Barbers index.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>