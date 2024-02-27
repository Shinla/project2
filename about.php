<?php
session_start();
include_once('config/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_unsafe = $_POST['username'];
    $pass_unsafe = $_POST['password'];

    $username = mysqli_real_escape_string($dbcon, $user_unsafe);
    $password = mysqli_real_escape_string($dbcon, $pass_unsafe);

    // Hash the password (you should use a secure hashing algorithm, not md5)
    $hashedPassword = md5($password);

    // Perform a query to fetch the user with the specified username and hashed password
    $query = mysqli_query($dbcon, "SELECT * FROM `tbl_user` WHERE username='$username' AND password='$hashedPassword'");
    $user = mysqli_fetch_assoc($query);

    // Check if a user with the provided username and hashed password exists
    if ($user) {
        // Continue with the login process

        // Store user information in the session
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['username'] = $user['username'];

        // Redirect to the dashboard or another secure page
        header('Location: register.php');
        exit();
    } else {
        // Invalid username or password
        $_SESSION['msg'] = "Invalid username or password";
        header('Location: login.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bio MPC</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/about.css">


</head>

<body>
 <!-- ======= Header ======= -->
<header id="header" class="fixed-top header-inner-pages">
  <div class="container d-flex align-items-center justify-content-lg-between">

    <h1 class="logo me-auto me-lg-0"><a href="index.php">Bio MPC</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="index.php#hero" data-translation-key="home">Home</a></li>
          <li><a class="nav-link scrollto" href="about.php" data-translation-key="aboutUs">About</a></li>
          <li class="dropdown"><a href="#"><span data-translation-key="services">Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul class='dropdown-menu'>
              <li><a href="#" data-translation-key="mar">Market</a></li>
              <li><a href="security.php" data-translation-key="sec">Security</a></li>
              <li><a href="#" data-translation-key="pak">Package</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact" data-translation-key="contact">Contact</a></li>
          <li class="dropdown">
            <a href="#"><span data-translation-key="Language"></span><i class="bi bi-chevron-down"></i></a>
            <ul class="dropdown-menu dropdown-menu-left">
              <li><a href="#" onclick="changeLanguage('en')">English</a></li>
              <li><a href="#" onclick="changeLanguage('zh')">中文</a></li>
            </ul>
          </li>

        <!-- Settings Dropdown -->
        <li class="dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bi bi-gear"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-left">
            <li><a class="dropdown-item" href="wallet.php" data-translation-key="wallet">Wallet</a></li>
            <li><a class="dropdown-item" href="exchange.php">Exchange currencies</a></li>
            <!-- Add more settings as needed -->
          </ul>
        </li>


          <!-- Logout Icon with Link -->
          <li><a class="nav-link" href="logout.php"><i class="bi bi-box-arrow-right"></i></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero-ab" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-12 col-lg-12">
          <h1><span data-translation-key="ab1"></span> <span style="color:#ffc451" data-translation-key="ab2">In One Place</span></h1>
          <h2 data-translation-key="ab3"></h2>
        </div>
      </div>
    </div>
  </section>


  <section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2 data-translation-key="aboutUs" data-translation-key="ab5">>About Us</h2>
      <p data-translation-key="ab4">Welcome to Bio Mining Pool Crypto</p>
    </div>

    <div class="row">
      <div class="col-lg-6" data-aos="fade-right">
        <img src="assets/img/about.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <div class="content pt-4 pt-lg-0">
          <h3 data-translation-key="ab5">Who We Are</h3>
          <p data-translation-key="ab6"></p>
          <p data-translation-key="ab7"></p>
          <ul>
            <li ><i class="bi bi-check"></i> <span data-translation-key="ab8"></span></li>
            <li><i class="bi bi-check"></i> <span data-translation-key="ab9"></span></li>
            <li><i class="bi bi-check"></i> <span data-translation-key="ab10"></span></li>
          </ul>
          <p><span data-translation-key="ab11"></span></p>
        </div>
      </div>
    </div>

  </div>
</section>


  <main id="main">

   

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p><span data-translation-key="ab12"></span><span data-translation-key="ab28" style="color:#ffc451"> Provide</span></p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class='bx bx-cart'></i></div>
              <h4 data-translation-key="ab13">Market Leadership</h4>
              <p data-translation-key="ab14"></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class='bx bx-buoy'></i></div>
              <h4  data-translation-key="ab15">Cryptocurrency Mining</h4>
              <p  data-translation-key="ab16"></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 data-translation-key="ab17">Mining Software</h4>
              <p data-translation-key="ab18"> </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

      <!-- ======= Counts Section ======= -->
      <section id="counts" class="counts" style="linear-gradient(315deg,#ff8f1426 4.24%,#ffc84d26);">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100"></div>
          <div class="col-xl-7 ps-4 ps-lg-5 pe-4 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
            <div class="content d-flex flex-column justify-content-center">
              <h3 data-translation-key="ab19">Our platform in numbers</h3>
              <div class="row"> 
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="9647" data-purecounter-duration="2" class="purecounter"></span>
                    <p><strong data-translation-key="ab20">Number of miners</strong></p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="70" data-purecounter-duration="2" class="purecounter"></span>
                    <p><strong data-translation-key="ab21">Countries served</strong></p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-clock"></i>
                    <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="4" class="purecounter"></span>
                    <p><strong data-translation-key="ab22">Years of experience</strong></p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-award"></i>
                    <span data-purecounter-start="0" data-purecounter-end="16030" data-purecounter-duration="4" class="purecounter"></span>
                    <p><strong data-translation-key="ab23">Crypto adoption</strong></p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3 data-translation-key="ab24">Contact To Action</h3>
          <p data-translation-key="ab25">Can contact us through telegram and email</p>
          <a class="cta-btn" href="contact.php" data-translation-key="ab26">Contact Us</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

  </main><!-- End #main -->


   <!-- ======= Clients Section ======= -->
   <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">
      <div class="section-title">
      <h2 data-translation-key="ab27">Partner</h2>
    </div>
        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>BIO MPC</h3>
              <p>
                <strong><span data-translation-key="foo7"></span></strong> +1 5589 55488 55<br>
                <strong><span data-translation-key="foo8"></span></strong> info@example.com<br>
              </p>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4 data-translation-key="foo1">Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php" data-translation-key="home">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#about" data-translation-key="aboutUs">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" data-translation-key="services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="tnc.php" data-translation-key="foo2">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="privacy.php" data-translation-key="foo3">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4 data-translation-key="foo6">Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#" data-translation-key="pak">Package</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="security.php" data-translation-key="sec">Security</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" data-translation-key="foo3">Widthdraw</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" data-translation-key="mar">Market</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4 data-translation-key="foo5">Server Status</h4>
            
            <!-- Europe - West Server -->
            <div class="server-status">
              <div class="green-dot"></div>
              <div class="server-info">Europe - West</div>
            </div>
        
            <!-- USA - West Server -->
            <div class="server-status pt-2">
              <div class="green-dot"></div>
              <div class="server-info">USA - West</div>
            </div>
        
            <!-- Asia - East Server -->
            <div class="server-status pt-2">
              <div class="green-dot"></div>
              <div class="server-info">Asia - East</div>
            </div>
        
            <!-- South America - South Server -->
            <div class="server-status pt-2">
              <div class="green-dot"></div>
              <div class="server-info">South America - South</div>
            </div>
        
            <!-- Africa - North Server -->
            <div class="server-status pt-2">
              <div class="green-dot"></div>
              <div class="server-info">Africa - North</div>
            </div>
        </div>
        

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Bio Mining Pool Crypto </span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/lang.js"></script>

</body>

</html>