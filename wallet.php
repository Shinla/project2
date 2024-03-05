<?php 
session_start();

include("./config/conn.php");
include("./config/function.php");

$user_data = check_login($con);

// Assuming 'vip_levels' is the name of your VIP levels table
$query = "SELECT users.*, vip_levels.level_name
          FROM users
          LEFT JOIN vip_levels ON users.vip_id = vip_levels.vip_id
          WHERE user_id = " . $user_data['user_id'];

$result = mysqli_query($con, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $user_data = $row;
} else {
    // Handle the error, e.g., display an error message or redirect to an error page
    die("Error fetching user data: " . mysqli_error($con));
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Bio MP | Security</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

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
    <link rel="stylesheet" href="assets/css/wallet.css">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-inner-pages">
        <div class="container d-flex align-items-center justify-content-lg-between">

            <h1 class="logo me-auto me-lg-0"><a href="index.php" style="color:#ffd584;">Bio MP</a></h1>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto " href="index.php" data-translation-key="home">Home</a></li>
                    <li><a class="nav-link scrollto" href="index.php#about" data-translation-key="aboutUs">About</a>
                    </li>
                    <li class="dropdown"><a href="#"><span data-translation-key="services">Services</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="market.php" data-translation-key="mar">Market</a></li>
                            <li><a href="index.php#pricing" data-translation-key="pak">Package</a></li>
                            <li><a href="wallet.php" data-translation-key="wallet">Wallet</a></li>
                        </ul>
                    </li>
                    <li><a href="security.php" data-translation-key="sec">Security</a></li>
                    <li class="dropdown">
                        <a href="#"><span data-translation-key="Language"></span><i class="bi bi-chevron-down"></i></a>
                        <ul class="dropdown-menu-left">
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

    <section class="wallet">
        <div class="wallet-container">
            <div class="wallet-sidebar">
                <button class="wallet-btn" onclick="openDepositModal()">Deposit</button>
                <button class="wallet-btn" onclick="openWithdrawModal()">Withdraw</button>
            </div>
            <div class="wallet-content">
                <!-- Deposit Modal -->
                <div class="modal" id="depositModal">
                    <div class="modal-content">
                        <span class="close" onclick="closeDepositModal()">&times;</span>
                        <p><strong>Deposit to the following address:</strong></p>
                        <p class="text-success">USDT Address: <strong>TFJemwreJhKqnMi84YTV1DgJPk984jKzBf</strong></p>
                        <p>Contact support and transfer to the provided USDT address.</p>
                    </div>
                </div>

               <!-- Withdraw Modal -->
              <div class="modal" id="withdrawModal">
                  <div class="modal-content">
                      <span class="close" onclick="closeWithdrawModal()">&times;</span>
                      <form id="withdrawForm">
                          <label for="withdrawAmount">Withdraw Amount (USD):</label>
                          <input type="number" id="withdrawAmount" name="withdrawAmount" placeholder="Enter amount" required>
                          <label for="withdrawalAddress">Withdrawal Address:</label>
                          <input type="text" id="withdrawalAddress" name="withdrawalAddress" placeholder="Enter withdrawal address" required>
                          <label for="username">Username:</label>
                          <input type="text" id="username" name="username" placeholder="Enter username" required>
                          <label for="exchangePartner">Exchange Partner:</label>
                          <input type="text" id="exchangePartner" name="exchangePartner" placeholder="Enter exchange partner" required>
                          <button type="button" onclick="withdrawFunds()">Withdraw</button>
                      </form>
                  </div>
              </div>

                <!-- Wallet Information -->
                <div class="wallet-info">
                    <h2>Wallet Information</h2>
                    <p><strong>Username</strong>: <?php echo $user_data['user_name']; ?></p>
                    <p><strong>Mining Amount</strong>: <?php echo $user_data['mine_amount']; ?></p>
                    <p><strong>Account Balance</strong>: <?php echo $user_data['acc_balance']; ?></p>
                    <p><strong>VIP Level:</strong> <?php echo $user_data['level_name']; ?></p>
                </div>
            </div>
        </div>
    </section>



    </main><!-- End #main -->

   



    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3 style="color: #ffc451;">BIO MP</h3>
                            <p>
                                <strong><a href="https://t.me/biomining" target="_blank"><span data-translation-key="foo7"></span> </a></strong><br>
                                <strong><span data-translation-key="foo8"></span></strong>: support@biomp.online<br>
                            </p><br>
                            <strong data-translation-key="in75"></strong>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4 data-translation-key="foo1">Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.php"
                                    data-translation-key="home">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.php#about"
                                    data-translation-key="aboutUs">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.php#services"
                                    data-translation-key="services">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="tnc.php" data-translation-key="foo2">Terms
                                    of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="privacy.php"
                                    data-translation-key="foo3">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4 data-translation-key="foo6">Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.php#counts"
                                    data-translation-key="in8">Features</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.php#pricing"
                                    data-translation-key="in78">Package</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="security.php"
                                    data-translation-key="sec">Security</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#faq" data-translation-key="faq">FAQ</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="market.php"
                                    data-translation-key="mar">Derivatives</a></li>
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
                &copy; Copyright <strong><span>Bio Mining Pool</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/lang.js"></script>
    <script src="assets/js/wallet.js"></script>

</body>

</html>