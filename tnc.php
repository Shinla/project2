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

  <title>Bio MPC | Terms of service</title>
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

    <h1 class="logo me-auto me-lg-0"><a href="index.php">Bio MPC</a></h1>

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a class="nav-link scrollto " href="index.php#hero" data-translation-key="home">Home</a></li>
        <li><a class="nav-link scrollto" href="index.php#about" data-translation-key="aboutUs">About</a></li>
        <li class="dropdown"><a href="#"><span data-translation-key="services">Services</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#" data-translation-key="mar">Market</a></li>
            <li><a href="security.php" data-translation-key="sec">Security</a></li>
            <li><a href="#" data-translation-key="pak">Package</a></li>
          </ul>
        </li>
        <li><a class="nav-link scrollto" href="#contact" data-translation-key="contact">Contact</a></li>
        <li class="dropdown">
          <a href="#"><span data-translation-key="Language"></span><i class="bi bi-chevron-down"></i></a>
          <ul class="dropdown-menu-left">
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

  <main id="main">


  <section class="inner-page">
  <div class="container privacy-policy-container">
      <h2 class="mb-4" data-translation-key="tc1">Terms and Conditions for Bio Mining Pool Crypto</h2>
          
      <p data-translation-key="tc2">Last Updated: 01 Feb 2024</p>

      <h4 data-translation-key="tc3">1. Overview</h4>
      <p data-translation-key="tc4">Welcome to Bio Mining Pool Crypto! These Terms and Conditions govern your use of our platform for trading and mining purposes. Please read them carefully before engaging in any activities on our platform.</p>

      <h4 data-translation-key="tc5">2. User Registration</h4>
      <p data-translation-key="tc6">In order to access our trading and mining services, you must complete the registration process. By registering, you agree to provide accurate and up-to-date information.</p>

      <h4 data-translation-key="tc7">3. Trading and Mining Activities</h4>
      <p data-translation-key="tc8">When engaging in trading and mining activities on Bio Mining Pool, you agree to abide by all applicable laws and regulations. Any misuse or unauthorized activities may result in the suspension or termination of your account.</p>

      <h4 data-translation-key="tc9">4. User Responsibilities</h4>
      <p data-translation-key="tc10">You are responsible for maintaining the confidentiality of your account credentials and ensuring the security of your account. Any actions taken under your account will be your responsibility.</p>

      <h4 data-translation-key="tc11">5. Platform Security</h4>
      <p data-translation-key="tc12">We implement security measures to protect the integrity of our platform. However, we cannot guarantee absolute security, and you acknowledge the inherent risks associated with online trading and mining.</p>

      <h4 data-translation-key="tc13">6. Termination of Services</h4>
      <p data-translation-key="tc14">We reserve the right to terminate or suspend your access to our services at any time, with or without cause. In case of termination, you agree to cease all activities on our platform immediately.</p>

      <h4 data-translation-key="tc15">7. Changes to Terms and Conditions</h4>
      <p data-translation-key="tc16">We may update these Terms and Conditions periodically. It is your responsibility to review them regularly for any changes. Continued use of our services after changes implies your acceptance of the updated terms.</p>

      <h4 data-translation-key="tc17">8. Contact Us</h4>
      <p data-translation-key="tc18">If you have questions regarding these Terms and Conditions, you can contact us at <a href="mailto:[contact email]">[contact, live chat, email]</a>.</p>
    </div>
</section>



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
                <strong><span data-translation-key="foo7"></span></strong> +1 5589 55488 55<br>
                <strong><span data-translation-key="foo8"></span></strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
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
              <li><i class="bx bx-chevron-right"></i> <a href="safety.php" data-translation-key="sec">Security</a></li>
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