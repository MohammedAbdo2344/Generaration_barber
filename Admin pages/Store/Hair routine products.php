    
    <head>
     <!-- Vendor CSS Files -->
     <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <link href="../../assets/img/logo/99.png" rel="icon">
  <link href="../../assets/img/logo/99.png" rel="apple-touch-icon">

  <!-- Template Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">
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

      <h1 class="logo mr-auto"><a href="../Admin Page.php"><img src="../../assets/img/logo/99.png"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
            <li class="active"><a href="../Admin Page.php">Home</a></li>  
            <li class="drop-down"><a href="Store.html">Store</a>
            <ul>
              <li><a href="Skin Care.php">Skin Care</a></li>
              <li><a href="Machines.php">Machines</a></li>
              <li><a href="Tools.php">Tools</a></li>
              <li><a href="Oils.php">Natural Oils</a></li>
              <li><a href="Hair growth products.php">Hair growth products</a></li>
             
            </ul>
          </li>
          <li class="active"><a href="../../php/hrb index.php">Edit items</a></li>
        </ul>
      
  </header><!-- End Header -->
    <!-- ======= Shop Section ======= -->
    <section id="services" class="services">
        <div class="container">
  
          <div class="section-title">
            <br>
            <br>
            <br> 
            <h2>Hair routine products</h2>
          </div>
        
          <?php  
            include_once "../../php/DBconnection.php";
            $sql = "SELECT * FROM `hrb`  ORDER BY id ASC";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0)
            {
              while($row = mysqli_fetch_array($result))
            {
          ?>
          <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><img style="height: 65px; width: 65px;" src="<?php echo $row["image"]; ?>"></i></div>
                <h4><?php  echo $row["name"] ?></h4>
                <p><?php  echo $row["price"] ?> EGP </p>
              </div>
              <?php     
            }
          }
        ?>
            </div>
            
          </div>
        </div>
      </section><!-- End store Section -->