<?php
session_start();

include("./config/conn.php");
include("./config/function.php");

$user_data = check_login($con);

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['miningPackage']) && !empty($_POST['miningPackage'])) {
        $selectedPackage = (float)$_POST['miningPackage'];

        if ($selectedPackage <= $user_data['acc_balance']) {
            $newBalance = $user_data['acc_balance'] - $selectedPackage;

            $updateQuery = "UPDATE users SET acc_balance = $newBalance WHERE user_id = " . $user_data['user_id'];
            $updateResult = mysqli_query($con, $updateQuery);

            if ($updateResult) {
                // Update user data in the session
                $_SESSION['user']['acc_balance'] = $newBalance;

                // Display success message
                $successMessage = "Mining package of $$selectedPackage successfully purchased!";
            } else {
                $errorMessage = "Error updating user balance: " . mysqli_error($con);
            }
        } else {
            $errorMessage = "Insufficient balance. Please select a lower mining package or recharge your account.";
        }
    } else {
        $errorMessage = "Invalid or empty mining package value.";
    }
}

// Fetch user data again to get the latest information after potential update
$user_data = check_login($con);

// Fetch the latest 10 mining logs
$miningLogsQuery = "SELECT start_time, vip_levels.level_name, vip_levels.rates, mining_logs.mining_amount
FROM mining_logs
INNER JOIN vip_levels ON mining_logs.user_id = vip_levels.vip_id
ORDER BY start_time DESC
LIMIT 10";

$miningLogsResult = mysqli_query($con, $miningLogsQuery);

// Fetch user data with the latest VIP level
$query = "SELECT users.*, vip_levels.level_name
          FROM users
          LEFT JOIN vip_levels ON users.vip_id = vip_levels.vip_id
          WHERE user_id = " . $user_data['user_id'];

$result = mysqli_query($con, $query);

if ($result) {
    $user_data = mysqli_fetch_assoc($result);
} else {
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
    <link href="./assets/css/style.css" rel="stylesheet">
    <link href="./assets/css/mining.css" rel="stylesheet">


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

        <br><br>

        <section id="portfolio-details" class="portfolio-details reverse-side">
            <div class="container">

                <div class="row gy-4">
                    <div class="col-lg-12">
                        <!-- Simplified form -->
                        <form method="POST" action="">
                            <label for="miningPackage">Select Mining Package:</label>
                            <select id="miningPackage" name="miningPackage">
                                <option value="300">Bronze - $300</option>
                                <option value="1000">Silver - $1000</option>
                                <option value="1500">Gold - $1500</option>
                                <option value="5000">Platinum - $5000</option>
                            </select>
                            <button type="submit" class="btn-buy">Start Mining</button>
                        </form>
                    </div>
                </div>

                <!-- Enhanced alert messages -->
                <?php if (isset($successMessage)) { ?>
                <div class="success-alert">
                    <?php echo $successMessage; ?>
                </div>
                <?php } ?>

                <?php if (isset($errorMessage)) { ?>
                <div class="error-alert">
                    <?php echo $errorMessage; ?>
                </div>
                <?php } ?>

                <!-- Enhanced insufficient balance alert -->
                <?php if (isset($errorMessage)) { ?>
                <div class="insufficient-balance-alert">
                    <?php echo $errorMessage; ?>
                </div>
                <?php } ?>

                <div id="alertContainer"></div>

                <!-- Display mining records table -->
                <section id="mining-records">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2>Mining Records</h2>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Start Time</th>
                                            <th>VIP Level</th>
                                            <th>Rate</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if ($miningLogsResult) {
                                            while ($row = mysqli_fetch_assoc($miningLogsResult)) {
                                                echo '<tr>';
                                                echo '<td>' . $row['start_time'] . '</td>';
                                                echo '<td>' . $row['level_name'] . '</td>';
                                                echo '<td>' . $row['rates'] . '</td>';
                                                echo '<td>' . $row['mining_amount'] . '</td>';
                                                echo '</tr>';
                                            }
                                        } else {
                                            echo '<tr><td colspan="4">Error fetching mining logs: ' . mysqli_error($con) . '</td></tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="row">
                    <!-- Bitcoin Information -->
                    <div class="col-lg-6">
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
                    </div>

                    <!-- User Information -->
                    <div class="col-lg-6">
                        <div class="portfolio-info">
                            <h3>User Information</h3>
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
                            <li><i class="bx bx-chevron-right"></i> <a href="index.php#faq"
                                    data-translation-key="faq">FAQ</a></li>
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

    function displayAlert(message, alertType) {
    var alertContainer = document.getElementById('alertContainer');
    var alertElement = document.createElement('div');
    alertElement.className = 'alert alert-dismissible fade show ' + alertType;
    alertElement.innerHTML = `
        <strong>${message}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    `;

    // Append the new alert
    alertContainer.appendChild(alertElement);
}

    // Function to update Bitcoin information
    function updateBitcoinInfo() {
        var bitcoinInfoList = document.querySelectorAll('.portfolio-info ul li');
        bitcoinInfoList[0].innerHTML = `<strong>Last Price</strong>: $61,849.97`;
        bitcoinInfoList[1].innerHTML = `<strong>24 Hours Change</strong>: +0.41%`;
        bitcoinInfoList[2].innerHTML = `<strong>Market Cap</strong>: $1.22T`;
        bitcoinInfoList[3].innerHTML = `<strong>Supply</strong>: 14.7M`;
    }

    // Function to start mining
    function startMining(package, userBalance) {
        // Parse the package value as a number
        package = parseFloat(package);

        if (package <= userBalance) {
            // Generate a random ID within the specified range
            var miningId = Math.floor(Math.random() * (999999 - 10000 + 1)) + 10000;

            // Get the current time in the user's locale
            var startTime = new Date().toLocaleString();

            // Create a mining record object
            var miningRecord = {
                id: miningId,
                package: package,
                startTime: startTime,
                status: 'Mining',
            };

            // Get existing mining records from local storage
            var existingRecords = JSON.parse(localStorage.getItem('miningRecords')) || [];

            // Add the new mining record to the existing records
            existingRecords.push(miningRecord);

            // Save the updated records to local storage
            localStorage.setItem('miningRecords', JSON.stringify(existingRecords));

            // Display success message
            displayAlert('Mining successfully started!', 'alert-success');

            // Start the auto-stop interval (e.g., stop mining after 5 minutes)
            miningInterval = setInterval(function() {
                stopMining(miningRecord);
            }, 300000); // 300000 milliseconds = 5 minutes

            // Update Bitcoin information
            updateBitcoinInfo();
        } else {
            // Display an alert for insufficient balance
            displayAlert(
                'Insufficient balance. Please select a lower mining package or recharge your account.',
                'alert-danger');
        }
    }

    // Function to stop mining
    function stopMining(miningRecord) {
        // Clear the auto-stop interval
        clearInterval(miningInterval);

        // Update the status of the mining record to 'Stopped'
        miningRecord.status = 'Stopped';

        // Get existing mining records from local storage
        var existingRecords = JSON.parse(localStorage.getItem('miningRecords')) || [];

        // Save the updated records to local storage
        localStorage.setItem('miningRecords', JSON.stringify(existingRecords));

        // Display success message
        displayAlert('Mining successfully stopped!', 'alert-success');
    }

    // Function to check account balance and start mining
    document.getElementById('startMiningBtn').addEventListener('click', function() {
        var selectedPackage = document.getElementById('miningPackage').value;
        var accountBalance = <?php echo $user_data['acc_balance']; ?>;

        // Call the function to start mining
        startMining(selectedPackage, accountBalance);
    });

    // Function to stop mining (can be called manually or by other events)
    document.getElementById('stopMiningBtn').addEventListener('click', function() {
        // Get the latest mining record from local storage
        var latestRecord = JSON.parse(localStorage.getItem('miningRecords')).pop();

        // Call the function to stop mining
        stopMining(latestRecord);
    });

    // Display mining records on page load
    displayMiningRecords();
});

</script>





</body>

</html>