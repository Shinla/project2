<?php 
session_start();

	include("./config/conn.php");
  include("./config/function.php");

	$user_data = check_login($con);

?>
  
  
  
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Bio MP | Home</title>
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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/wallet.css" rel="stylesheet">

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
            <li><a class="nav-link scrollto active" href="index.php" data-translation-key="home">Home</a></li>
            <li><a class="nav-link scrollto" href="index.php#about" data-translation-key="aboutUs">About</a></li>
            <li><a class="nav-link scrollto" href="index.php#services" data-translation-key="services">Services</a></li>
            <li><a href="market.php" data-translation-key="mar">Derivatives</a></li>
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
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title text-center mb-4">Crypto Wallet</h1>

                    <!-- Wallet Balance -->
                    <div class="balance-container mb-4">
                        <h5>Wallet Balance</h5>
                        <p class="balance">$50,000</p>
                        <button class="btn btn-primary">Refresh Balance</button>
                    </div>

                    <!-- Transaction History -->
                    <div class="history-container mb-4">
                        <h5>Transaction History</h5>
                        <ul class="list-group">
                            <li class="list-group-item">Received 0.5 BTC from John Doe</li>
                            <li class="list-group-item">Sent 0.2 BTC to Jane Smith</li>
                            <!-- Add more transaction items as needed -->
                        </ul>
                    </div>

                    <!-- Send/Receive Form -->
                    <form class="send-receive-form">
                        <div class="mb-3">
                            <label for="amount" class="form-label">Amount (BTC)</label>
                            <input type="text" class="form-control" id="amount" placeholder="Enter amount">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Recipient Address</label>
                            <input type="text" class="form-control" id="address" placeholder="Enter recipient address">
                        </div>
                        <button type="submit" class="btn btn-success">Send</button>
                        <button type="button" class="btn btn-info">Receive</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script> <!-- Create a separate JS file for your scripts -->

</body>
</html>
