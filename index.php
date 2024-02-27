<?php 
session_start();

	include("./config/connection.php");
	include("functions.php");

	$user_data = check_login($con);

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


</head>

<body>
 <!-- ======= Header ======= -->
<header id="header" class="fixed-top header-inner-pages">
  <div class="container d-flex align-items-center justify-content-lg-between">

    <h1 class="logo me-auto me-lg-0"><a href="index.php" style="text-decoration:none">Bio <span style="color:#ffc451">MPC</span></a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="index.php#hero" data-translation-key="home">Home</a></li>
          <li><a class="nav-link scrollto" href="about.php" data-translation-key="aboutUs">About</a></li>
          <li class="dropdown"><a href="#"><span data-translation-key="services">Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul class='dropdown-menu'>
              <li><a href="./market/market.html" data-translation-key="mar">Market Dashboard</a></li>
              <li><a href="security.php" data-translation-key="sec">Security</a></li>
              <li><a href="#" data-translation-key="pak">Package</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="exchange.php" data-translation-key="exchange">Exchange currencies rate</a></li>
          <li class="dropdown">
            <a href="#"><span data-translation-key="Language">Language</span><i class="bi bi-chevron-down"></i></a>
            <ul class="dropdown-menu dropdown-menu-left">
              <li><a href="#" onclick="changeLanguage('en')">English</a></li>
              <li><a href="#" onclick="changeLanguage('zh')">中文</a></li>
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
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-8 col-lg-8">
          <h1>BIO<span style="color:#ffc451"> Mining Pool Crypto</span></h1>
          <h2>Simplify Success in Crypto. Your Trusted Partner for Mining Excellence.</h2>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line"></i>
            <h3><a href="">Regulatory Compliance</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line"></i>
            <h3><a href="">Long-Term Sustainability</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-calendar-todo-line"></i>
            <h3><a href="">Innovative Technologies</a></h3>
          </div>
        </div>
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">



























  

  

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>BIO MPC</h3>
              <p>
                <strong><span data-translation-key="foo7"></span></strong>: +1 5589 55488 55<br>
                <strong><span data-translation-key="foo8"></span></strong>: info@example.com<br>
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
              <li><i class="bx bx-chevron-right"></i> <a href="#" data-translation-key="width">Widthdraw</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" data-translation-key="mar">Market</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" data-translation-key="faq">FAQ</a></li>
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
  
    <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/lang.js"></script>

</body>

</html>