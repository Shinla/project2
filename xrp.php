<?php
session_start();

include("./config/conn.php");
include("./config/function.php");

$user_data = check_login($con);

// Fetch user data including VIP level name
$query = "SELECT users.*, vip_levels.level_name
          FROM users
          LEFT JOIN vip_levels ON users.vip_id = vip_levels.vip_id
          WHERE user_id = " . $user_data['user_id'];

$result = mysqli_query($con, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $user_data = $row;
} else {
    die("Error fetching user data: " . mysqli_error($con));
}

// Handle start mining button click
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["startMiningBtn"])) {
    $selectedPackage = $_POST["miningPackage"];
    $accountBalance = $user_data['acc_balance'];

    // Check if the account balance is sufficient for the selected mining package
    if ($accountBalance >= $selectedPackage) {
        // Calculate mining amount
        $miningAmount = $selectedPackage;

        // Deduct the mining amount from the account balance
        $newBalance = $accountBalance - $miningAmount;

        // Update the user's account balance in the database
        $updateQuery = "UPDATE users SET acc_balance = $newBalance WHERE user_id = " . $user_data['user_id'];
        $updateResult = mysqli_query($con, $updateQuery);

        $miningRecordQuery = "SELECT id, mining_amount, start_time FROM mining_logs WHERE user_id = " . $user_data['user_id'] . " ORDER BY id DESC LIMIT 1";
        $miningRecordResult = mysqli_query($con, $miningRecordQuery);

        if ($miningRecordResult && mysqli_num_rows($miningRecordResult) > 0) {
            $miningRecord = mysqli_fetch_assoc($miningRecordResult);

            // Display a success message along with the mining record
            echo json_encode(['success' => true, 'message' => 'Mining started successfully!', 'miningRecord' => $miningRecord]);
        } else {
            // Handle database error
            echo json_encode(['success' => false, 'message' => 'Error fetching mining record']);
        }
    } else {
        // Display an alert for insufficient balance
        echo json_encode(['success' => false, 'message' => 'Insufficient balance']);
    }

    // Ensure the script stops execution after handling the request
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Bio MP </title>
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
                        <button id="startMiningBtn" type="submit" name="startMiningBtn" class="btn-buy">Start
                            Mining</button>

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
                            <h3>Mining Records</h3>
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Amount</th>
                                        <th>Start Time Hour</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Table body will be dynamically populated -->
                                </tbody>
                            </table>

                        </div>
                    </div>

                    <div id="successAlert"></div>


                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>XRP Information</h3>
                            <ul>
                                <li><strong>Last Price</strong>: $0.603</li>
                                <li><strong>24 Hours Change</strong>: -6.21%</li>
                                <li><strong>Market Cap</strong>: $35.29B</li>
                                <li><strong>Supply</strong>: 38.7M</li><br>
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
    <footer id="footer" class="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <span>Bio MP</span>
                        </a>
                        <p data-translation-key="in75">Empowering Tomorrow's Crypto Landscape with Sustainable
                            Innovation. Redefining Prosperity, Responsibly.</p>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4 data-translation-key="in76">Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="index.php"
                                    data-translation-key="home">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="index.php#about"
                                    data-translation-key="aboutUs">About us</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="index.php#services"
                                    data-translation-key="services">Services</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="tnc.php" data-translation-key="foo2">Terms
                                    of service</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="privacy.php"
                                    data-translation-key="foo3">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4 data-translation-key="in77">Our Services</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="market.php"
                                    data-translation-key="mar">Derivatives</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="security.php"
                                    data-translation-key="sec">Security</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="index.php#pricing"
                                    data-translation-key="in78">Package</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="index.php#faq"
                                    data-translation-key="faq">FAQ</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="index.php#features"
                                    data-translation-key="in8">Features</a></li>
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
   document.addEventListener('DOMContentLoaded', function () {
    // Load and display mining records from localStorage on page load
    loadAndDisplayMiningRecords();

    // Function to start mining and update mining data
    function startMiningAndDeduct(selectedPackage) {
        // Ask for confirmation before starting mining
        var confirmMining = confirm("Are you sure you want to start mining?");

        if (!confirmMining) {
            // User canceled the mining operation
            return;
        }

        // Get the current timestamp in seconds
        var currentTime = Math.floor(new Date().getTime() / 1000);

        // Send an asynchronous request to the same PHP file
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "", true); // Use POST method and an empty URL to refer to the same file

        // Set the Content-Type header for POST requests
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onload = function () {
            if (xhr.status === 200) {
                // Handle the response, e.g., display a success message
                var response = JSON.parse(xhr.responseText);

                if (response.success) {
                    alert(response.message);

                    // Display mining record with the current time and selected package amount
                    var miningRecord = {
                        id: response.miningRecord.id,
                        start_time: currentTime,
                        amount: selectedPackage
                    };

                    displayMiningRecord(miningRecord);

                    // Save the mining record to localStorage
                    saveMiningRecord(miningRecord);

                } else {
                    alert(response.message);
                }
            } else {
                // Handle the error, e.g., display an error message
                alert("Error starting mining: " + xhr.statusText);
            }
        };

        // Send the selected package and current time as POST parameters
        xhr.send("startMiningBtn=true&miningPackage=" + selectedPackage + "&currentTime=" + currentTime);
    }

    document.getElementById('startMiningBtn').addEventListener('click', function (event) {
        var selectedPackage = document.getElementById('miningPackage').value;
        // Call the function to start mining and deduct balance
        startMiningAndDeduct(selectedPackage);
    });

    function saveMiningRecord(miningRecord) {
        // Load existing mining records from localStorage
        var miningRecords = JSON.parse(localStorage.getItem('miningRecords')) || [];

        // Add the new mining record
        miningRecords.push(miningRecord);

        // Save updated mining records to localStorage
        localStorage.setItem('miningRecords', JSON.stringify(miningRecords));
    }

    function loadAndDisplayMiningRecords() {
        // Load mining records from localStorage
        var miningRecords = JSON.parse(localStorage.getItem('miningRecords')) || [];

        // Display mining records in the table
        miningRecords.forEach(function (record) {
            displayMiningRecord(record);
        });
    }

    function displayMiningRecord(miningRecord) {
        var table = document.querySelector('table tbody');

        // Create a new table row
        var newRow = table.insertRow();

        // Create cells and add data to the new row
        var cell1 = newRow.insertCell(0);
        var cell2 = newRow.insertCell(1);
        var cell3 = newRow.insertCell(2);

        // Display the mining record data in the table cells
        cell1.textContent = miningRecord.id;
        cell2.textContent = miningRecord.amount; // Display the selected package amount
        cell3.textContent = formatTimestamp(miningRecord.start_time);
    }

    function formatTimestamp(timestamp) {
        var date = new Date(timestamp * 1000);

        // Check if the date is valid
        if (!isNaN(date.getTime())) {
            return date.toLocaleString(); // Format the timestamp
        } else {
            console.error('Invalid timestamp:', timestamp);
            return 'Mining';
        }
    }
});

    </script>








</body>

</html>