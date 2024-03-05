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

    <title>Bio MP | Bitcoin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

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
    <link href="assets/css/mining.css" rel="stylesheet">

    <style>
    /* Add your custom CSS styles here */
    #startMiningBtn,
    #stopMiningBtn {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-bottom: 10px;
    }

    #miningPackage {
        padding: 8px;
        border-radius: 5px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        color: white;
        /* Set text color for the table */
    }

    table,
    th,
    td {
        border: 1px solid #ddd;
    }

    th,
    td {
        padding: 10px;
        text-align: left;
        background-color: rgba(255, 255, 255, 0.1);
        /* Light background color for table cells */
    }

    th {
        background-color: #4CAF50;
        color: white;
    }

    .success-alert {
        background-color: #4CAF50;
        color: white;
        text-align: center;
        padding: 10px;
        border-radius: 5px;
        margin-top: 10px;
    }

    .portfolio-details {
        background-image: url('assets/img/log.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        color: white;
        /* Set text color for the reverse side */

    }

    /* Add your custom CSS styles here */
    .btn-buy {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        background-color: #4CAF50;
        /* Green color, you can change it to your preferred color */
        color: #ffffff;
        /* White text color */
        border-radius: 5px;
        transition: background-color 0.3s ease;
        /* Add a smooth transition effect */
    }

    .btn-buy:hover {
        background-color: #45a049;
        /* Darker green color on hover */
    }
    </style>


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top" style="background-color:black;">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <span>Bio MP</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="index.php" data-translation-key="home">Home</a></li>
                    <li><a class="nav-link scrollto" href="index.php#about" data-translation-key="aboutUs">About</a>
                    </li>
                    <li><a class="nav-link scrollto" href="index.php#services"
                            data-translation-key="services">Services</a></li>
                    <li><a href="market.php" data-translation-key="mar">Derivatives</a></li>
                    <li class="dropdown">
                        <a href="#"><span data-translation-key="Language">Language</span><i
                                class="bi bi-chevron-down"></i></a>
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

        <br><br><br>

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details reverse-side">
            <div class="container">

                <div class="row gy-4">
                    <div class="col-lg-8">
                        <button id="startMiningBtn" class="btn-buy">Start Mining</button>
                        <div>
                            <label for="miningPackage">Select Mining Package:</label>
                            <select id="miningPackage">
                                <option value="300">Bronze - $300</option>
                                <option value="1000">Silver - $1000</option>
                                <option value="1500">Gold - $1500</option>
                                <option value="5000">Platinum - $5000</option>
                            </select>
                        </div>
                        <div>
                        <?php displayMiningTable($con); ?>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Bitcoin Information</h3>
                            <ul>
                                <li><strong>Last Price</strong>: $61,849.97</li>
                                <li><strong>24 Hours Change</strong>: +0.41%</li>
                                <li><strong>Market Cap</strong>: $1.22T</li>
                                <li><strong>Supply</strong>: 14.7M</li><br>
                                <button id="stopMiningBtn" class="btn-buy">Stop Mining</button>
                            </ul>
                        </div>
                        <br>
                        <div class="portfolio-info">
                            <h3>User information</h3>
                            <ul>
                                <li><strong>Username</strong>: <?php echo $user_data['user_name']; ?></li>
                                <li><strong>VIP Level:</strong> <?php echo $user_data['level_name']; ?></li>
                                <li><strong>Mining Amount</strong>: <?php echo $user_data['mine_amount']; ?></li>
                                <li><strong>Account Balance</strong>: <?php echo $user_data['acc_balance']; ?></li>
                                <a href="wallet.php" class="btn-buy" data-translation-key="width">Buy Now</a>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Portfolio Details Section -->





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


    <script>
document.addEventListener('DOMContentLoaded', function() {
    var miningInterval;

    // Function to display success message
    function displaySuccessMessage(message) {
        var successAlert = document.getElementById('successAlert');
        successAlert.innerHTML = message;
        successAlert.style.display = 'block';
        setTimeout(function() {
            successAlert.style.display = 'none';
        }, 10000); // Hide after 10 seconds
    }

    // Function to update Bitcoin information
    function updateBitcoinInfo() {
        document.querySelector('.portfolio-info h3').textContent = 'Bitcoin Information';
        var bitcoinInfoList = document.querySelectorAll('.portfolio-info ul li');
        bitcoinInfoList[0].innerHTML = `<strong>Last Price</strong>: $61,849.97`;
        bitcoinInfoList[1].innerHTML = `<strong>24 Hours Change</strong>: +0.41%`;
        bitcoinInfoList[2].innerHTML = `<strong>Market Cap</strong>: $1.22T`;
        bitcoinInfoList[3].innerHTML = `<strong>Supply</strong>: 14.7M`;
    }

    // Function to start mining
    function startMining(package) {
        console.log('Mining started with package: $' + package);

        // Generate a random ID within the specified range
        var miningId = Math.floor(Math.random() * (999999 - 10000 + 1)) + 10000;

        // Get the current time in the user's locale
        var startTime = new Date().toLocaleString();

        // Parse the package value as a number
        package = parseFloat(package);

        // Lookup the rate based on the selected package
        var rate;
        switch (package) {
            case 300:
                rate = 0.0070;
                break;
            case 1000:
                rate = 0.0112;
                break;
            case 1500:
                rate = 0.0157;
                break;
            case 5000:
                rate = 0.0300;
                break;
            default:
                rate = 0.0070;
        }

        // Display success message
        displaySuccessMessage('Mining successfully started!');

        // Start the auto-stop interval (e.g., stop mining after 5 minutes)
        miningInterval = setInterval(function() {
            stopMining();
        }, 300000); // 300000 milliseconds = 5 minutes

        // Update Bitcoin information
        updateBitcoinInfo();
    }

    // Function to stop mining
    function stopMining() {
        console.log('Mining stopped');

        // Clear the auto-stop interval
        clearInterval(miningInterval);

        // Display success message
        displaySuccessMessage('Mining successfully stopped!');
    }

    // Function to check account balance and start mining
    document.getElementById('startMiningBtn').addEventListener('click', function() {
        var selectedPackage = document.getElementById('miningPackage').value;
        var accountBalance = <?php echo $user_data['acc_balance']; ?>;

        // Check if the account balance is sufficient for the selected mining package
        if (accountBalance > 0 && accountBalance >= selectedPackage) {
            // Call the function to start mining
            startMining(selectedPackage);
        } else {
            // Display an alert for insufficient balance
            alert('Insufficient balance. Please contact customer service or recharge your account for mining.');
        }
    });

    // Function to stop mining (can be called manually or by other events)
    document.getElementById('stopMiningBtn').addEventListener('click', function() {
        stopMining();
    });
});

    </script>






</body>

</html>