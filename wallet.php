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
            <h2>Wallet Information</h2>
            <p><strong>Username</strong>: <?php echo $user_data['user_name']; ?></p>
            <p><strong>Total Amount</strong>: <?php echo $user_data['total_amount']; ?></p>

            <!-- Deposit and Withdrawal Buttons -->
            <button onclick="openDepositModal()">Deposit</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button onclick="openWithdrawModal()">Withdraw</button>
        </div>

        <!-- Deposit Modal -->
        <div class="modal" id="depositModal">
            <div class="modal-content">
                <span class="close" onclick="closeDepositModal()">&times;</span>
                <p><strong>Deposit to the following address:</strong></p>
                <p class="text-success">BTC: <strong>bc1pd6f8gtc9cxwnhdeu4u4mga95rtyl2ay9hqxej24p72rw2yv7z88qsqr8p3</strong></p>
                <p class="text-success">TRC20: <strong>TBK6N31k1eV69H8MYGmWQQms85eoNMC1xZ</strong></p>
                <p class="text-success">ERC20: <strong>0xf0AF6E21c1BA5519f25E8F2A7379D1A06308acDa</strong></p>
                <p class="text-success">SOL: <strong>Gc4c8EFYT72zDZW8LAPyJKBkvxRBueaiUCE3TXtZ4a74</strong></p>
                <p>If you have any questions, please contact our customer service.</p>
            </div>
        </div>

        <!-- Withdraw Modal -->
        <div class="modal" id="withdrawModal">
            <div class="modal-content">
                <span class="close" onclick="closeWithdrawModal()">&times;</span>
                <form id="withdrawForm">
                    <label for="username">Username: <strong><?php echo $user_data['user_name']; ?></strong></label>
                    <label for="withdrawAmount">Withdraw Amount (USD):</label>
                    <input type="number" id="withdrawAmount" name="withdrawAmount" placeholder="Enter amount" required>
                    <label for="withdrawalAddress">Withdrawal Address:</label>
                    <!-- Updated: Use select option instead of input -->
                    <select id="withdrawalAddressSelect" name="withdrawalAddress" required>
                        <option value="1INCH">1INCH</option>
                        <option value="1SOL">1SOL</option>
                        <option value="3P">3P</option>
                        <option value="5IRE">5IRE</option>
                        <option value="AAVE">AAVE</option>
                        <option value="ACA">ACA</option>
                        <option value="ACH">ACH</option>
                        <option value="ACM">ACM</option>
                        <option value="ACS">ACS</option>
                        <option value="ADA">ADA</option>
                        <option value="AFC">AFC</option>
                        <option value="TRX">TRX</option>
                        <option value="BTC">BTC</option>
                        <option value="USDT">USDT</option>
                        <option value="USDC">USDC</option>
                        <option value="XRP">XRP</option>
                        <option value="ETH">ETH</option>
                        <option value="MNT">MNT</option>
                    </select>

                 
                    <label for="exchangePartner">Exchange Partner:</label>
                  
                    <input type="text" id="exchangePartner" name="exchangePartner" placeholder="Enter exchange partner"
                        required>

                        <label for="exchangePartner">Withdraw Address:</label>
                        <input type="text" id="exchangePartner" name="exchangePartner" placeholder="Enter withdraw address"
                        required>
                    <button type="button" onclick="showWithdrawConfirmation()">Withdraw</button>
                </form>
            </div>
        </div>

        <div class="modal" id="withdrawConfirmationModal">
            <div class="modal-content">
                <span class="close" onclick="closeWithdrawConfirmationModal()">&times;</span>
                <p>Are you sure you want to withdraw funds?</p>
                <button type="button" onclick="withdrawFunds()">Confirm</button>
                <br><br>
                <button type="button" onclick="closeWithdrawConfirmationModal()">Cancel</button>
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
                            <h3 style="color: #ffc451;">BIO MP</h3>
                            <p>
                                <strong><a href="https://t.me/biomining" target="_blank"><span
                                            data-translation-key="foo7"></span> </a></strong><br>
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

    <script>
    function withdrawFunds() {
        // Get the withdrawal amount from the input field
        var withdrawAmount = parseFloat(document.getElementById("withdrawAmount").value);

        // Check if the withdrawal amount is within the specified range
        if (withdrawAmount < 500 || withdrawAmount > 6000) {
            alert("Withdrawal amount must be between $500 and $6000.");
            return;
        }

        // Check if the withdrawal amount is greater than the total amount
        if (withdrawAmount > <?php echo $user_data['total_amount']; ?>) {
            alert("Insufficient funds for withdrawal.");
            return;
        }

        // Update the total amount by subtracting the withdrawal amount
        var updatedTotalAmount = <?php echo $user_data['total_amount']; ?> - withdrawAmount;

        // Make an AJAX request to update the user's table
        $.ajax({
            url: 'update_user.php',
            method: 'POST',
            data: {
                updatedTotalAmount: updatedTotalAmount
            },
            success: function(response) {
                // Handle success response
                if (response === 'Success') {
                    console.log("Withdrawal successful!");
                    alert("Withdrawal successful! Amount will be transferred within 2 hours.");
                } else {
                    console.error("Error updating user data:", response);
                    alert("An error occurred. Please contact support.");
                }
            },
            error: function(error) {
                // Handle error
                console.error("Error updating user data:", error);
                alert("An error occurred. Please contact support.");
            }
        });
    }
    </script>
</body>

</html>