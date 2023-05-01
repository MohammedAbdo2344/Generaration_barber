    
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

      <h1 class="logo mr-auto"><a href="../index.php"><img src="../assets/img/logo/99.png"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="../index.php">Home</a></li> 
          <li class="drop-down"><a href="Store.html">Store</a>
            <ul>
              <li><a href="store/Skin Care.php">Skin Care</a></li>
              <li><a href="Tools.php">Tools</a></li>
              <li><a href="Oils.php">Natural Oils</a></li>
              <li><a href="Hair growth products.php">Hair growth products</a></li>
              <li><a href="Hair routine products.php">Hair routine products</a></li>
            </ul>
          </li>
        </ul>
      
  </header><!-- End Header -->
    <!-- ======= Shop Section ======= -->
    <section id="services" class="services">
        <div class="container">
  
          <div class="section-title">
            <br>
            <br>
            <br> 
            <h2>Machines</h2>
          </div>
          <?php  
            include_once "../php/DBconnection.php";
          ?>
          <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><img style="height: 65px; width: 65px;" src="../assets/img/Store/5.jpg"></i></div>
                <h4><?php  $sql = "SELECT * FROM `machines` WHERE `id`=14 ";$result = mysqli_query($conn, $sql); $row = mysqli_fetch_array($result);echo $row["name"] ?></h4>
                <p><?php  $sql = "SELECT * FROM `machines` WHERE `id`=14 ";$result = mysqli_query($conn, $sql); $row = mysqli_fetch_array($result);echo $row["price"] ?> EGP</p>
    
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
              <div class="icon-box">
                <div class="icon"><img style="height: 65px; width: 65px;" src="../assets/img/Store/6.jpg"></div>
                <h4> <?php  $sql = "SELECT * FROM `machines` WHERE `id`=15 ";$result = mysqli_query($conn, $sql); $row = mysqli_fetch_array($result);echo $row["name"] ?> </h4>
                <p><?php  $sql = "SELECT * FROM `machines` WHERE `id`=15 ";$result = mysqli_query($conn, $sql); $row = mysqli_fetch_array($result);echo $row["price"] ?>EGP</p>
         
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
              <div class="icon-box">
                <div class="icon"><img style="height: 65px; width: 65px;" src="../assets/img/Store/7.jpg"></div>
                <h4><?php  $sql = "SELECT * FROM `machines` WHERE `id`=16 ";$result = mysqli_query($conn, $sql); $row = mysqli_fetch_array($result);echo $row["name"] ?></h4>
                <p><?php  $sql = "SELECT * FROM `machines` WHERE `id`=16 ";$result = mysqli_query($conn, $sql); $row = mysqli_fetch_array($result);echo $row["price"] ?> EGP</p>
          
              </div>
            </div>
  
            
            </div>
  
          </div>
  
        </div>
      </section><!-- End store Section -->