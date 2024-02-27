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

  <title>Bio MPC | Security</title>
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
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/footer.css" rel="stylesheet">
  <style>
    .pro-icon-box {
  display: flex;
  align-items: center; /* Align items vertically in the center */
}

.pro-icon {
  margin-right: 10px; /* Adjust the margin as needed for spacing */
  font-size:2.2rem;
}



  </style>
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


        <section class="inner-page" style="padding:60px !important">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 pt-4">
                        <h2 style="text-align:center; color:#ffc451;" data-translation-key="secu1">Always Safety First:</h2>
                        <p data-translation-key="secu3">At Bio Mining Pool Crypto, the paramount importance of security is ingrained in our ethos. With a team boasting years of expertise in information security, we stand as one of the best-prepared entities globally. Our relentless pursuit of safety is fortified by collaborative efforts with top-tier global security companies, ensuring the protection of your assets 365 days a year.</p>
                    </div>
                </div>
            </div>
        </section>

        

  <!-- ======= Services Section ======= -->
  <section class="services" style="background-color: #444444;; color: #fff;">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2 style="color: #fff  ; font-size:1.2rem"><span data-translation-key="secu4"></span> <span style="color:#fff" data-translation-key="secu5">Secures Funds</span></h2>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"><i class="ri-shield-line"></i></div>
          <h4><a href="#"  data-translation-key="secu6">Secure Storage</a></h4>
          <p  data-translation-key="secu7">Funds are securely stored and distributed to prevent any unauthorised access.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box">
          <div class="icon"><i class="ri-lock-line"></i></div>
          <h4><a href="#" data-translation-key="secu8">Secure Process</a></h4>
          <p  data-translation-key="secu9">Withdrawals are physically monitored 24/7 in real-time by our team for any suspicious activity.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
        <div class="icon-box">
          <div class="icon"><i class='bx bx-buildings'></i></div>
          <h4><a href="#" data-translation-key="secu10">Physical Security</a></h4>
          <p data-translation-key="secu11">Bio MPC data storage is distributed in secure locations around the world with 24/7 surveillance.</p>
        </div>
      </div>

    

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box">
          <div class="icon"><i class="ri-shield-cross-line"></i></div>
          <h4><a href="#" data-translation-key="secu14">Full Reserves</a></h4>
          <p data-translation-key="secu15">All funds are backed by real reserves, and can be withdrawn at any time by users.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
        <div class="icon-box">
          <div class="icon"><i class="ri-virus-line"></i></div>
          <h4><a href="#" data-translation-key="secu16">VAML regulation</a></h4>
          <p data-translation-key="secu17">We work closely with law enforcement agencies around the world to detect and prevent money laundering.</p>
        </div>
      </div>


      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"><i class='bx bx-wallet'></i></div>
          <h4><a href="#" data-translation-key="secu12">Secure Wallets</a></h4>
          <p data-translation-key="secu13">Wallets and private keys are secured using AES-256 encryption.</p>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Services Section -->


<section>
  <div class="container" data-aos="fade-up">
  <div class="section-title">
      <h2 style="color: black; font-size:1.2rem" ><span data-translation-key="secu4"></span> <span style="color:#ffc451" data-translation-key="secu18"> Trains Its Staff</span></h2>
    </div>

    <div class="row">
      <!-- Staff Vetting -->
      <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="100">
      <div class="pro-icon-box">
        <div class="pro-icon"><i class="ri-checkbox-circle-line" style="color:#ffc451"></i></div>
          <p data-translation-key="secu19">Staff are fully vetted before joining our team.</p>
        </div>
      </div>

      <!-- Data Encryption -->
      <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="200">
      <div class="pro-icon-box">
        <div class="pro-icon"><i class="ri-checkbox-circle-line" style="color:#ffc451"></i></div>
          <p data-translation-key="secu20">All staff receive regular cyber security training and awareness.</p>
        </div>
      </div>

      <!-- Cyber Security Training -->
      <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="300">
      <div class="pro-icon-box">
        <div class="pro-icon"><i class="ri-checkbox-circle-line" style="color:#ffc451"></i></div>
          <p data-translation-key="secu21">Employee access is monitored and controlled in real-time</p>
        </div>
      </div>

      <!-- Password Policies -->
      <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="400">
      <div class="pro-icon-box">
        <div class="pro-icon"><i class="ri-checkbox-circle-line" style="color:#ffc451"></i></div>
          <p data-translation-key="secu22">All hard drives and data are encrypted</p>
        </div>
      </div>

      <!-- Employee Access Control -->
      <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="500">
      <div class="pro-icon-box">
        <div class="pro-icon"><i class="ri-checkbox-circle-line" style="color:#ffc451"></i></div>
          <p data-translation-key="secu23">Regular equipment maintenance and inspection</p>
        </div>
      </div>
    </div>

  </div>
</section>


<section style="background-color: #444444; color: #fff;">
  <div class="container" data-aos="fade-up" >
    <div class="section-title">
      <h2 style="color: #fff; font-size:1.2rem"><span data-translation-key="secu4"></span><span style="color:#fff" data-translation-key="secu24"> Protect Data & Privacy</span></h2>
    </div>


    <div class="row">
      <!-- Staff Vetting -->
      <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="100">
      <div class="pro-icon-box">
        <div class="pro-icon"><i class="ri-checkbox-circle-line" style="color:#ffc451"></i></div>
        <p style="color: #fff"><strong data-translation-key="secu25">All data is securely stored, and encrypted both at rest and in transit</strong></p>
      </div>
      </div>

      <!-- Data Encryption -->
      <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="200">
      <div class="pro-icon-box">
      <div class="pro-icon"><i class="ri-checkbox-circle-line" style="color:#ffc451"></i></div>
      <p style="color: #fff"><strong data-translation-key="secu26">We use a variety of security measures to ensure the confidentiality, integrity, availability and privacy of your personal Information and to protect your personal information from loss, theft, unauthorized access, misuse, alteration or destruction.</strong></p>
        </div>
      </div>

      <!-- Cyber Security Training -->
      <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="300">
      <div class="pro-icon-box">
      <div class="pro-icon"><i class="ri-checkbox-circle-line" style="color:#ffc451"></i></div>
      <p style="color: #fff"><strong data-translation-key="secu27">Your privacy is of utmost importance to us, and it is our policy to safeguard and respect the confidentiality of information and the privacy of individuals.</strong></p>
        </div>
      </div>

      <!-- Password Policies -->
      <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="400">
      <div class="pro-icon-box">
      <div class="pro-icon"><i class="ri-checkbox-circle-line" style="color:#ffc451"></i></div>
      <p style="color: #fff"><strong data-translation-key="secu28">To make sure your personal information is secure, we communicate our privacy and security guidelines to all our employees and strictly enforce privacy safeguards within the company. We are also GDPR compliant.</strong></p>
        </div>
      </div>

      </div>

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