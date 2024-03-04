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

    <title>Bio MP | Derivatives</title>
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
    <link href="assets/css/market.css" rel="stylesheet">


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


    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="index.php" data-translation-key="home">Home</a></li>
                <li data-translation-key="mar"></li>
            </ol>

        </div>
    </section><!-- End Breadcrumbs -->


    <section class="trending" aria-label="crypto trend">
        <div class="trending-container">
            <h2 class="trend-title"><strong>Trending Cryptocurrencies</strong></h2>
            <ul class="box-container">
                <!-- Box 1 -->
                <li class="trend-card" id="bitcoinCard">
                    <div class="card-title-wrapper">
                        <img src="./assets/img/market/coin-1.svg" width="24" height="24" alt="bitcoin logo">
                        <a href="#" class="card-title">Bitcoin <span class="span">BTC/USD</span></a>
                    </div>
                    <data class="card-value" value="46168.95">USD 56,623.54</data>
                    <div class="card-analytics">
                        <data class="current-price" value="36641.20">23,641.20</data>
                        <div class="badge green">+0.79%</div>
                    </div>
                </li>

                <!-- Box 2 (Copy the structure for the next boxes) -->
                <li class="trend-card" id="ethereumCard">
                    <div class="card-title-wrapper">
                        <img src="./assets/img/market/coin-2.svg" width="24" height="24" alt="ethereum logo">
                        <a href="#" class="card-title">Ethereum <span class="span">ETH/USD</span></a>
                    </div>
                    <data class="card-value" value="3480.04">USD 2,954.88</data>
                    <div class="card-analytics">
                        <data class="current-price" value="36641.20">46,641.20</data>
                        <div class="badge green">+10.55%</div>
                    </div>
                </li>

                <!-- Box 3 -->
                <li class="trend-card" id="tetherCard">
                    <div class="card-title-wrapper">
                        <img src="./assets/img/market/coin-3.svg" width="24" height="24" alt="bitcoin logo">
                        <a href="#" class="card-title">Tether <span class="span">USDT/USD</span></a>
                    </div>
                    <data class="card-value" value="1.00">USD 1.00</data>
                    <div class="card-analytics">
                        <data class="current-price" value="36641.20">36,121.20</data>
                        <div class="badge green">+0.01%</div>
                    </div>
                </li>

                <!-- Box 4 -->
                <li class="trend-card" id="bnbCard">
                    <div class="card-title-wrapper">
                        <img src="./assets/img/market/coin-4.svg" width="24" height="24" alt="bitcoin logo">
                        <a href="#" class="card-title">BNB <span class="span">BNB/USD</span></a>
                    </div>
                    <data class="card-value" value="443.56">USD 443.56</data>
                    <div class="card-analytics">
                        <data class="current-price" value="36641.20">36,641.20</data>
                        <div class="badge green">+1.24%</div>
                    </div>

                </li>
            </ul>
        </div>
    </section>


    <section class="current-market">
        <div class="container">
            <h2 class="h2 section-title" style="color:white;">Current Market</h2>

            <table class="market-table">
                <thead class="table-head">
                    <tr class="table-row table-title">
                        <th class="table-heading" scope="col">Mine Now</th>
                        <th class="table-heading" scope="col">Cryptocurrency</th>
                        <th class="table-heading" scope="col">Current Price</th>
                        <th class="table-heading" scope="col">Market Cap</th>
                        <th class="table-heading" scope="col">24% Change</th>
                        <th class="table-heading" scope="col">Supply</th>
                    </tr>
                </thead>
                <tbody class="table-body">
                    <tr class="table-row">
                        <td class="table-data">
                            <a href="bitcoin.php" class="btn btn-mine" style="color:#4154f1;">Mining</a>
                            <img src="./assets/img/market/coin-1.svg" width="20" height="20" alt="Bitcoin logo"
                                class="img">
                        </td>
                        <td class="table-data">
                            <span class="coin-name" style="text-decoration:none;">Bitcoin | BTC</span>
                        </td>
                        <td class="table-data">$61,849.97</td>
                        <td class="table-data">$1.22T</td>
                        <td class="table-data green" style="color:white;">+0.41%</td>
                        <td class="table-data">14.7M</td>
                    </tr>

                    <tr class="table-row">
                        <td class="table-data">
                            <a href="eth.php" class="btn btn-mine" style="color:#4154f1;">Mining</a>
                            <img src="./assets/img/market/coin-2.svg" width="20" height="20" alt="Bitcoin logo"
                                class="img">
                        </td>
                        <td class="table-data">
                            <span class="coin-name">Ethereum | ETH</span>
                        </td>
                        <td class="table-data">$3,436.88</td>
                        <td class="table-data">$412.89B</td>
                        <td class="table-data green" style="color:white;">+0.50%</td>
                        <td class="table-data">60.07M</td>
                    </tr>

                    <tr class="table-row">
                        <td class="table-data">
                            <a href="bitcoin.php" class="btn btn-mine" style="color:#4154f1;">Mining</a>
                            <img src="./assets/img/market/coin-3.svg" width="20" height="20" alt="Bitcoin logo"
                                class="img">
                        </td>
                        <td class="table-data">
                            <span class="coin-name">Tether | USDT/USD</span>
                        </td>
                        <td class="table-data">$1.00</td>
                        <td class="table-data">$99.24B</td>
                        <td class="table-data green" style="color:white;">+0.5%</td>
                        <td class="table-data">33.7M</td>
                    </tr>

                    <tr class="table-row">
                        <td class="table-data">
                            <a href="bitcoin.php" class="btn btn-mine" style="color:#4154f1;">Mining</a>
                            <img src="./assets/img/market/coin-4.svg" width="20" height="20" alt="Bitcoin logo"
                                class="img">
                        </td>
                        <td class="table-data">
                            <span class="coin-name">BNB | BNB/USD</span>
                        </td>
                        <td class="table-data">$416.06</td>
                        <td class="table-data">$64.01B</td>
                        <td class="table-data green" style="color:white;">+1.25%</td>
                        <td class="table-data">23.1M</td>
                    </tr>

                    <tr class="table-row">
                        <td class="table-data">
                            <a href="bitcoin.php" class="btn btn-mine" style="color:#4154f1;">Mining</a>
                            <img src="./assets/img/market/coin-5.svg" width="20" height="20" alt="Bitcoin logo"
                                class="img">
                        </td>
                        <td class="table-data">
                            <span class="coin-name">Solana | SOL</span>
                        </td>
                        <td class="table-data">$128.35</td>
                        <td class="table-data">$56.84B</td>
                        <td class="table-data red" style="color:white;">-0.92%</td>
                        <td class="table-data">21.1M</td>
                    </tr>

                    <tr class="table-row">
                        <td class="table-data">
                            <a href="bitcoin.php" class="btn btn-mine" style="color:#4154f1;">Mining</a>
                            <img src="./assets/img/market/coin-6.svg" width="20" height="20" alt="Bitcoin logo"
                                class="img">
                        </td>
                        <td class="table-data">
                            <span class="coin-name">XRP</span>
                        </td>
                        <td class="table-data">$0.62731909</td>
                        <td class="table-data">$34.29B</td>
                        <td class="table-data red" style="color:white;">-3.14%</td>
                        <td class="table-data">38.7M</td>
                    </tr>

                    <tr class="table-row">
                        <td class="table-data">
                            <a href="bitcoin.php" class="btn btn-mine" style="color:#4154f1;">Mining</a>
                            <img src="./assets/img/market/coin-7.svg" width="20" height="20" alt="Bitcoin logo"
                                class="img">
                        </td>
                        <td class="table-data">
                            <span class="coin-name">Cardano | ADA</span>
                        </td>
                        <td class="table-data">$0.73240862</td>
                        <td class="table-data">$25.78B</td>
                        <td class="table-data red" style="color:white;">-1.51%</td>
                        <td class="table-data">30M</td>
                    </tr>

                    <tr class="table-row">
                        <td class="table-data">
                            <a href="bitcoin.php" class="btn btn-mine" style="color:#4154f1;">Mining</a>
                            <img src="./assets/img/market/coin-8.svg" width="20" height="20" alt="Bitcoin logo"
                                class="img">
                        </td>
                        <td class="table-data">
                            <span class="coin-name">Avalanche | AVAX</span>
                        </td>
                        <td class="table-data">$42.86</td>
                        <td class="table-data">$16B</td>
                        <td class="table-data green" style="color:white;">+4.55%</td>
                        <td class="table-data">24M</td>
                    </tr>

                    <tr class="table-row">
                        <td class="table-data">
                            <a href="bitcoin.php" class="btn btn-mine" style="color:#4154f1;">Mining</a>
                            <img src="./assets/img/market/coin-9.webp" width="20" height="20" alt="Bitcoin logo"
                                class="img">
                        </td>
                        <td class="table-data">
                            <span class="coin-name">COTI</span>
                        </td>
                        <td class="table-data">$0.2094</td>
                        <td class="table-data">$31M</td>
                        <td class="table-data green" style="color:white;">+0.58%</td>
                        <td class="table-data">5M</td>
                    </tr>

                    <tr class="table-row">
                        <td class="table-data">
                            <a href="bitcoin.php" class="btn btn-mine" style="color:#4154f1;">Mining</a>
                            <img src="./assets/img/market/coin-10.png" width="20" height="20" alt="Bitcoin logo"
                                class="img">
                        </td>
                        <td class="table-data">
                            <span class="coin-name">NEAR</span>
                        </td>
                        <td class="table-data">$4.25</td>
                        <td class="table-data">$44.62B</td>
                        <td class="table-data green" style="color:white;">+2.15%</td>
                        <td class="table-data">70.7M</td>
                    </tr>

                    <tr class="table-row">
                        <td class="table-data">
                            <a href="bitcoin.php" class="btn btn-mine" style="color:#4154f1;">Mining</a>
                            <img src="./assets/img/market/coin-11.png" width="20" height="20" alt="Bitcoin logo"
                                class="img">
                        </td>
                        <td class="table-data">
                            <span class="coin-name">Cosmos | ATOM</span>
                        </td>
                        <td class="table-data">$11.89</td>
                        <td class="table-data">$46B</td>
                        <td class="table-data red" style="color:white;">-1.74%</td>
                        <td class="table-data">19.3M</td>
                    </tr>

                    <tr class="table-row">
                        <td class="table-data">
                            <a href="bitcoin.php" class="btn btn-mine" style="color:#4154f1;">Mining</a>
                            <img src="./assets/img/market/coin-12.webp" width="20" height="20" alt="Bitcoin logo"
                                class="img">
                        </td>
                        <td class="table-data">
                            <span class="coin-name">1000PEPE | TetherUS </span>
                        </td>
                        <td class="table-data">$0.0054800</td>
                        <td class="table-data">$243.256B</td>
                        <td class="table-data green" style="color:white;">+12.55%</td>
                        <td class="table-data">15.5M</td>
                    </tr>

                    <tr class="table-row">
                        <td class="table-data">
                            <a href="bitcoin.php" class="btn btn-mine" style="color:#4154f1;">Mining</a>
                            <img src="./assets/img/market/coin-16.png" width="20" height="20" alt="Bitcoin logo"
                                class="img">
                        </td>
                        <td class="table-data">
                            <span class="coin-name">Altimmune Inc | ALT</span>
                        </td>
                        <td class="table-data">$2.19</td>
                        <td class="table-data">$713.52M</td>
                        <td class="table-data green" style="color:white;">+0.10%</td>
                        <td class="table-data">25.7M</td>
                    </tr>

                    <tr class="table-row">
                        <td class="table-data">
                            <a href="bitcoin.php" class="btn btn-mine" style="color:#4154f1;">Mining</a>
                            <img src="./assets/img/market/coin-14.webp" width="20" height="20" alt="Bitcoin logo"
                                class="img">
                        </td>
                        <td class="table-data">
                            <span class="coin-name">ONDO | USDT</span>
                        </td>
                        <td class="table-data">$0.5143</td>
                        <td class="table-data">$71.42B</td>
                        <td class="table-data green" style="color:white;">+4.55%</td>
                        <td class="table-data">50.7M</td>
                    </tr>

                    <tr class="table-row">
                        <td class="table-data">
                            <a href="bitcoin.php" class="btn btn-mine" style="color:#4154f1;">Mining</a>
                            <img src="./assets/img/market/coin-13.png" width="20" height="20" alt="Bitcoin logo"
                                class="img">
                        </td>
                        <td class="table-data">
                            <span class="coin-name">SQT | USDT</span>
                        </td>
                        <td class="table-data">$0.013398</td>
                        <td class="table-data">$263.45K</td>
                        <td class="table-data red" style="color:white;">-3.30%</td>
                        <td class="table-data">10.2M</td>
                    </tr>
                </tbody>
            </table>
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
                            <h3 style="color: #ffc451;">BIO MP</h3>
                            <p>
                                <strong><span data-translation-key="foo7"></span></strong> +1 5589 55488 55<br>
                                <strong><span data-translation-key="foo8"></span></strong> info@example.com<br>
                            </p><br>
                            <strong data-translation-key="in75"></strong>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4 data-translation-key="foo1">Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.php" data-translation-key="home">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.php#about" data-translation-key="aboutUs">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.php#services" data-translation-key="services">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="tnc.php" data-translation-key="foo2">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="privacy.php" data-translation-key="foo3">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4 data-translation-key="foo6">Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.php#counts" data-translation-key="in8">Features</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.php#pricing" data-translation-key="in78">Package</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="security.php" data-translation-key="sec">Security</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.php#faq" data-translation-key="faq">FAQ</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="market.php" data-translation-key="mar">Derivatives</a></li>
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


    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/lang.js"></script>

</body>

</html>