<?php
if(isset($_POST["id"]) && !empty($_POST["id"])){
    include_once "DBconnection.php";
    
    $sql = "DELETE FROM hgb WHERE id = '".$_POST["id"]."' ";
    
    
    if(mysqli_query($conn, $sql)){
        header("location:hgp index.php");
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
    // Close connection
    mysqli_close($conn);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
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
                        <h1>Delete users</h1>
                    </div>
                    <form action="" method="post">
                        <div class="alert alert-danger fade in">
                            <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>"/>
                            <p>Are you sure you want to delete this product?</p><br>
                            <p>
                                 <input type="submit" value="Yes" class="btn btn-danger"  > 
                                <a href="hgp index.php" class="btn btn-default">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>