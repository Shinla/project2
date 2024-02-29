<?php
include("config/conn.php");
include("config/mining.php");

session_start();

// Check if the user is logged in
$user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bio MP | Bitcoin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <span>Bio MP</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero" data-translation-key="home">Home</a></li>
          <li><a class="nav-link scrollto" href="#about" data-translation-key="aboutUs">About</a></li>
          <li><a class="nav-link scrollto" href="#services" data-translation-key="services">Services</a></li>
          <li><a href="#" data-translation-key="mar">Derivatives</a></li>
          <li class="dropdown">
            <a href="#"><span data-translation-key="Language">Language</span><i class="bi bi-chevron-down"></i></a>
            <ul class="dropdown-menu dropdown-menu-left">
              <li><a href="#" onclick="changeLanguage('en')">English</a></li>
              <li><a href="#" onclick="changeLanguage('zh')">中文</a></li>
            </ul>
          </li>
          <li><a class="" href="wallet.php" data-translation-key="wallet">Wallet</a></li>
          <li><a class="nav-link" href="logout.php" data-translation-key="loge"> Log Out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html"- data-translation-key="home">Home</a></li>
          <li><a href="index.html"- data-translation-key="mar">Derivatives</a></li>
          <li>Bitcoin</li>
        </ol>
        <h2>Bitcoin</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-8">
              <button id="startMiningBtn">Start Mining</button>
              <div>
                  <label for="miningPackage">Select Mining Package:</label>
                  <select id="miningPackage">
                      <option value="300">Bronze - $300</option>
                      <option value="1000">Silver - $1000</option>
                      <option value="1500">Gold - $1500</option>
                      <option value="5000">Platinum - $5000</option>
                  </select>
              </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Bitcoin Information</h3>
              <ul>
                <li><strong>Last Price</strong>: Web design</li>
                <li><strong>24 Hours Change</strong>: ASU Company</li>
                <li><strong>Market Cap</strong>: 01 March, 2020</li>
                <li><strong>Bitcoins Left to Be Mined</strong>: 01 March, 2020</li>
                <button id="stopMiningBtn">Stop Mining</button>
              </ul>
            </div>
            <br>
            <div class="portfolio-info">
              <h3>User information</h3>
              <ul>
                <li><strong>Username</strong>: <?php echo $user_data['user_name']; ?></li>
                <li><strong>VIP Level</strong>: <?php echo $user_data['vip_level']; ?></li>
                <li><strong>Mining Amount</strong>: <?php echo $user_data['mine_amount']; ?></li>
                <li><strong>Account Balance</strong>: <?php echo $user_data['acc_balance']; ?></li>
                <div class="text-center text-lg-start">
                  <a href="deposit.php" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                    <span data-translation-key="foo4">Get Started</span>
                  </a>
                </div>
              </ul>
            </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

    <section>
      <p id="miningResult"></p>
    </section>



  </main><!-- End #main -->

     <!-- ======= Footer ======= -->
     <footer id="footer" class="footer">

      <div class="footer-top">
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
              <a href="index.html" class="logo d-flex align-items-center">
                <span>Bio MP</span>
              </a>
              <p data-translation-key="in75">Empowering Tomorrow's Crypto Landscape with Sustainable Innovation. Redefining Prosperity, Responsibly.</p>
            </div>

            <div class="col-lg-2 col-6 footer-links">
              <h4 data-translation-key="in76">Useful Links</h4>
              <ul>
                <li><i class="bi bi-chevron-right"></i> <a href="index.html" data-translation-key="home">Home</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#about" data-translation-key="aboutUs">About us</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#services" data-translation-key="services">Services</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="tnc.php" data-translation-key="foo2">Terms of service</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="pp.php" data-translation-key="foo3">Privacy policy</a></li>
              </ul>
            </div>

            <div class="col-lg-2 col-6 footer-links">
              <h4 data-translation-key="in77">Our Services</h4>
              <ul>
                <li><i class="bi bi-chevron-right"></i> <a href="market.php" data-translation-key="mar">Derivatives</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="security.php" data-translation-key="sec">Security</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#pricing" data-translation-key="in78">Package</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#faq" data-translation-key="faq">FAQ</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#features" data-translation-key="in8">Features</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
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
          &copy; Copyright <strong><span>Bio Mining Pool</span></strong>. All Rights Reserved
        </div>
      </div>
    </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script>
    $(document).ready(function() {
      $("#startMiningBtn").click(function() {
          // Assuming you have a user ID available (replace with actual user ID)
          var userId = 1;

          $.ajax({
              url: "mining.php",
              method: "POST",
              data: { userId: userId },
              success: function(response) {
                  $("#miningResult").text(response);
                  $("#startMiningBtn").hide();
                  $("#stopMiningBtn").show();

                  // After 8 hours, show the timestamp again
                  setTimeout(function() {
                      $("#miningResult").text("Mining started at: " + response);
                      $("#startMiningBtn").show();
                      $("#stopMiningBtn").hide();
                  }, 8 * 60 * 60 * 1000); // 8 hours in milliseconds
              },
              error: function(xhr, status, error) {
                  console.error("Error starting mining: " + error);
              }
          });
      });

      $("#stopMiningBtn").click(function() {
          // Handle stopping mining (you might want to implement this part)
          $("#miningResult").text("Mining stopped.");
          $("#startMiningBtn").show();
          $("#stopMiningBtn").hide();
      });
  });
  </script>

  
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