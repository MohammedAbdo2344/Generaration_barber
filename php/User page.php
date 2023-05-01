<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Generation Barb</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/logo/99.png" rel="icon">
  <link href="../assets/img/logo/99.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>
  <?php  
    $row= $_REQUEST["id"];
    
  ?>
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

      <h1 class="logo mr-auto"><a href="../Admin pages/Admin Page.php"><img src="../assets/img/logo/99.png"></a></h1>
    
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="../Admin pages/Admin Page.php">Home</a></li>
          <li><a href="#about">Services</a></li>
          <li><a href="#Barbers">Barbers</a></li>
          <li class="drop-down"><a href="Store/Store.html">Store</a>
            <ul>
              <li><a href="Store/Skin Care.php">Skin Care</a></li>
              <li><a href="Store/Machines.php">Machines</a></li>
              <li><a href="Store/Tools.php">Tools</a></li>
              <li><a href="Store/Oils.php">Natural Oils</a></li>
              <li><a href="Store/Hair growth products.php">Hair growth products</a></li>
              <li><a href="Store/Hair routine products.php">Hair routine products</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav>

      <a href="#Regester" class="appointment-btn scrollto">Make an Appointment</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
    <h1 class="Allred"> Welcome to Generation Z</h1>
      
      <a href="../php/User update.php?id=<?php echo $row ?>" class="btn-get-started scrollto">Update info </a>
      <a href="../index.php" class="btn-get-started scrollto">Log out </a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Why Choose Generation Z barber?</h3>
              <p>
                Because generation z barber is the first barber shop in Egypt that you can order online 
                and also you can book your place online through our website and that will protect you from the corona virus
                as we can control the number of people that will come to the store and that our barbers will come to your house so dont worry from the virus 
                . Our barbers is the best barbers in Egypt we choose the best for the best.
              </p>
              
            </div>
          </div>
          
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= service Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch">
            <img style="width: 600px;" src="../assets/img/306.jpg">
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>Services</h3>

            <div class="icon-box">
              <p class="description">(1) We have the best and the most stylish hair cuts </p>
            </div>

            <div class="icon-box">
              
              <p class="description">(2) We have all the extras as ( hot towel , cold towel , massage , creams and etc…) </p>
            </div>

            <div class="icon-box">

              <p class="description">(3) You can book online in our place or in your place</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    </section><!-- End Counts Section -->



    <!-- ======= Appointment Section ======= -->
    <section id="Regester" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Make an Appointment</h2>
          <p></p>
        </div>
        <?php  
          include_once "../php/DBconnection.php";
          ?>
        <form action="appointment.php" method="GET" role="form" class="php-email-form">
          <div class="form-row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4 form-group">
              <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder=" Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="text" name="location" class="form-control" id="name" placeholder="Your Location" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <select name="doctor" id="doctor" class="form-control">
                <option value="">Select Barber</option>
                <option value="Barber 1"><?php  $sql = "SELECT * FROM `barbers` WHERE `id`=1";$result = mysqli_query($conn, $sql); $row = mysqli_fetch_array($result);echo $row["name"] ?></option>
                <option value="Barber 2"><?php  $sql = "SELECT * FROM `barbers` WHERE `id`=2";$result = mysqli_query($conn, $sql); $row = mysqli_fetch_array($result);echo $row["name"] ?></option>
                <option value="Barber 3"><?php  $sql = "SELECT * FROM `barbers` WHERE `id`=3";$result = mysqli_query($conn, $sql); $row = mysqli_fetch_array($result);echo $row["name"] ?></option>
                <option value="Barber 4"><?php  $sql = "SELECT * FROM `barbers` WHERE `id`=4";$result = mysqli_query($conn, $sql); $row = mysqli_fetch_array($result);echo $row["name"] ?></option>
                

              </select>
              <div class="validate"></div>
            </div>
          </div>

          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your register request has been sent successfully. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Save</button></div>
        </form>

      </div>
    </section>
    </section>

    <!-- ======= Barbers Section ======= -->
    <section id="Barbers" class="Barbers">
      <div class="container">

        <div class="section-title">
          <h2>Barbers</h2>
        </div>

        <div class="row">
          <?php  
          include_once "../php/DBconnection.php";
          ?>
          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="../assets/img/Barbers/4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4><?php  $sql = "SELECT * FROM `barbers` WHERE `id`=1";$result = mysqli_query($conn, $sql); $row = mysqli_fetch_array($result);echo $row["name"] ?></h4>
                <div class="social">
                  <a href="#"><i class="ri-facebook-fill"></i></a>
                  <a href="#"><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="../assets/img/Barbers/5.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4><?php  $sql = "SELECT * FROM `barbers` WHERE `id`=2";$result = mysqli_query($conn, $sql); $row = mysqli_fetch_array($result);echo $row["name"]  ?></h4>
               
                <div class="social">
                  <a href="#"><i class="ri-facebook-fill"></i></a>
                  <a href="#"><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="../assets/img/Barbers/6.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4><?php  $sql = "SELECT * FROM `barbers` WHERE `id`=3";$result = mysqli_query($conn, $sql); $row = mysqli_fetch_array($result);echo $row["name"]  ?></h4>

                <div class="social">                  
                  <a href="#"><i class="ri-facebook-fill"></i></a>
                  <a href="#"><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="../assets/img/Barbers/9.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4><?php  $sql = "SELECT * FROM `barbers` WHERE `id`=4";$result = mysqli_query($conn, $sql); $row = mysqli_fetch_array($result);echo $row["name"]  ?> </h4>

                <div class="social">
                  <a href="#"><i class="ri-facebook-fill"></i></a>
                  <a href="#"><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Doctors Section -->

    </section><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2>Gallery</h2>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="../assets/img/Gallary/1.jpg" class="venobox" data-gall="gallery-item">
                <img src="../assets/img/Gallary/1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="../assets/img/Gallary/2.jpg" class="venobox" data-gall="gallery-item">
                <img src="../assets/img/Gallary/2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="../assets/img/Gallary/3.jpg" class="venobox" data-gall="gallery-item">
                <img src="../assets/img/Gallary/3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="../assets/img/Gallary/4.jpg" class="venobox" data-gall="gallery-item">
                <img src="../assets/img/Gallary/4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact with us </h2>
        </div>
      </div>
      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>October,Elmotamez,Ramosquare</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>GenerationBarbian@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>0233968064</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Generation Z Barber</h3>
            <p>
              October,Elmotamez,Ramosquare <br>
              Egypt <br><br>
              <strong>Phone:</strong> 0233968064<br>
              <strong>Email:</strong> GenerationBarbian@gmail.com<br>
            </p>
          </div>

          
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Generation Z Barbian</span></strong>. All Rights Reserved
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://twitter.com/GenerationBarb1" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/Generation-Barbian-107783484513210" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/generationbarbian30/" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>