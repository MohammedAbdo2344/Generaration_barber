<head>
      <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <link href="../assets/img/logo/99.png" rel="icon">
  <link href="../assets/img/logo/99.png" rel="apple-touch-icon">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
    </head>
    <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">GenerationBarbian@gmail.com</a>
        <i class="icofont-phone"></i> 0233968064
        <i class="icofont-google-map"></i> October,Elmotamez,Ramosquare
      </div>
      <div class="social-links">
        <a href="https://twitter.com/GenerationBarb1" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="https://www.facebook.com/Generation-Barbian-107783484513210" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/generationbarbian30/" class="instagram"><i class="icofont-instagram"></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="../Admin Page.php"><img src="../assets/img/logo/99.png"></a></h1>
      

      <nav class="nav-menu d-none d-lg-block">
        <ul>
            <li class="active"><a href="../user pages/User page.php">Home</a></li>  
            <li class="drop-down"><a href="Store.html">Store</a>
            <ul>
              <li><a href="../user pages/Store/Skin Care.php">Skin Care</a></li>
              <li><a href="../user pages/Store/Machines.php">Machines</a></li>
              <li><a href="../user pages/Store/Tools.php">Tools</a></li>
              <li><a href="../user pages/Store/Oils.php">Natural Oils</a></li>
			  <li><a href="../user pages/Store/Hair routine products.php">Hair routine products</a></li>
			  <li><a href="../user pages/Store/Hair growth products.php">Hair growth products</a></li>
            </ul>
          </li>
          
        </ul>
      
  	</header><!-- End Header -->
  	<br>
	<br>
	<br> 
	<br>
	<br>
	<br> 
<?php 
session_start();
include_once "DBconnection.php";

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["cart"]))
	{
		$item_array_id = array_column($_SESSION["cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["cart"][0] = $item_array;
	}
	
	
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="cart.php"</script>';
			}
		}
	}
	
}

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 600)) {
	session_unset(); 
	session_destroy(); 
	echo '<script>alert("You have been signed out!");window.location.href = "../index.php";</script>';
}
$_SESSION['LAST_ACTIVITY'] = time();



?>
<!DOCTYPE html>
<html>
	<head>
		<title>Cart</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
	
			<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
                    <?php
                   
					if(!empty($_SESSION["cart"]))
					{
						$total = 0;
						
						foreach($_SESSION["cart"] as $keys => $values)
						{
							

							
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td> <?php echo $values["item_price"]; ?> EGP</td>
						<td> <?php $t=$values["item_quantity"] * $values["item_price"]; echo $t;?> EGP</td>
						<td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php echo $total; ?></td>
						<td></td>
					</tr>
					<?php
					
					}	
					?>
						
                </table>
                <form action="checkout.php" method="GET">
                    <button style="background-color:  #1977cc; float: right;" class="btn btn-success">Checkout</button>
                </form>
             
               
			</div>
		</div>
	</div>
	<br />
	</body>
</html>

