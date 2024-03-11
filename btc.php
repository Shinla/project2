<?php
include("./config/functions.php");



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["startMiningBtn"])) {
    $selectedPackage = $_POST["miningPackage"];
    $accountBalance = $user_data['acc_balance'];

    if ($accountBalance >= $selectedPackage) {
        $miningAmount = $selectedPackage;
        $newBalance = $accountBalance - $miningAmount;

        $updateQuery = "UPDATE users SET acc_balance = $newBalance WHERE user_id = " . $user_data['user_id'];
        $updateResult = mysqli_query($con, $updateQuery);

        if ($updateResult) {
            $miningRecordQuery = "SELECT id, mining_amount, start_time FROM mining_logs WHERE user_id = " . $user_data['user_id'] . " ORDER BY id DESC LIMIT 1";
            $miningRecordResult = mysqli_query($con, $miningRecordQuery);

            if ($miningRecordResult && mysqli_num_rows($miningRecordResult) > 0) {
                $miningRecord = mysqli_fetch_assoc($miningRecordResult);
                echo json_encode(['success' => true, 'message' => 'Mining started successfully!', 'miningRecord' => $miningRecord]);
                exit();
            } else {
                echo json_encode(['success' => false, 'message' => 'Error fetching mining record']);
                exit();
            }
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Insufficient balance']);
        exit();
    }
}

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bio MP | Wallet</title>

        <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./assets/css/bit.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    </head>

    <body>



    <header class="header" data-header>
        <div class="container">

        <a href="#" class="logo">
            <img src="./assets/images/logo.svg" width="32" height="32" alt="Cryptex logo">
            Bio MP
        </a>

        <nav class="navbar" data-navbar>
            <ul class="navbar-list">
                <li class="navbar-item">
                <a href="index.php" data-translation-key="home" class="navbar-link active"
                    data-nav-link>Home</a>
            </li>

            <li class="navbar-item">
                <a href="index.php#about" data-translation-key="aboutUs" class="navbar-link" data-nav-link>About</a>
            </li>

            <li class="navbar-item">
                <a href="index.php#secure" data-translation-key="sec" class="navbar-link" data-nav-link>Safety</a>
            </li>

            <li class="navbar-item">
                <a href="index.php#market" data-translation-key="mar" class="navbar-link" data-nav-link>Markets</a>
            </li>

            <li class="navbar-item">
                <a href="logout.php" data-translation-key="loge" class="navbar-link" data-nav-link>Log Out</a>
            </li>

            <li class="language-switch navbar-item">
                <li class="dropdown">
                    <button class="dropbtn"><strong data-translation-key="Language">Language</strong></button>
                    <ul class="dropdown-content">
                        <a href="#" onclick="changeLanguage('en')">English</a>
                        <a href="#" onclick="changeLanguage('zh')">中文</a>
                    </ul>
                </li>
            </li>

            </ul>
        </nav>

        <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
            <span class="line line-1"></span>
            <span class="line line-2"></span>
            <span class="line line-3"></span>
        </button>

        <a href="wallet.php" class="btn btn-outline" data-translation-key="wallet">Wallet</a>

        </div>
    </header>


        <section class="section announcement" aria-label="announcement" data-section>
            <div class="container">
                <div class="announcement-content">
                    <p class="announcement-text" data-translation-key="ann"></p>
                </div>
            </div>
        </section>

       <!-- ======= Portfolio Details Section ======= -->
       <section id="bitcoin-details" class="bitcoin-details">
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
                            <h3>Bitcoin Information</h3>
                            <ul>
                                <li><strong>Last Price</strong>: $65,994.27</li>
                                <li><strong>24 Hours Change</strong>: -1.86%</li>
                                <li><strong>Market Cap</strong>: $1.42T</li>
                                <li><strong>Supply</strong>: 14.7M</li><br>
                            </ul>
                        </div>
                   
                    </div>
                </div>

            </div>
        </section><!-- End Portfolio Details Section -->  




        <footer class="footer">

            <div class="footer-top" data-section>
                <div class="container">

                    <div class="footer-brand">

                        <a href="#" class="logo">
                            <img src="./assets/images/logo.svg" width="50" height="50" alt="Cryptex logo">
                            Bio MP
                        </a>

                        <h2 class="footer-title" data-translation-key="ab26"> </h2>

                        <a href="https://t.me/biomining" class="footer-contact-link">Telegram</a>

                        <a href="mailto:support@biomp.online" class="footer-contact-link"><span
                                data-translation-key="mail"></span> </a>

                    </div>

                    <ul class="footer-list">

                        <li>
                            <p class="footer-list-title" data-translation-key="in77"></p>
                        </li>

                        <li>
                            <a href="index.php" class="footer-link" data-translation-key="home"></a>
                        </li>

                        <li>
                            <a href="#about" class="footer-link" data-translation-key="aboutUs"></a>
                        </li>

                        <li>
                            <a href="#secure" class="footer-link" data-translation-key="sec"></a>
                        </li>

                        <li>
                            <a href="#market" class="footer-link" data-translation-key="mar"></a>
                        </li>

                        <li>
                            <a href="#package" class="footer-link" data-translation-key="in78"></a>
                        </li>

                    </ul>

                    <ul class="footer-list">

                        <li>
                            <p class="footer-list-title" data-translation-key="in76"></p>
                        </li>

                        <li>
                            <a href="#" class="footer-link" data-translation-key="foo2"></a>
                        </li>

                        <li>
                            <a href="#" class="footer-link" data-translation-key="foo3"></a>
                        </li>

                        <li>
                            <a href="#" class="footer-link" data-translation-key="wallet"></a>
                        </li>

                    </ul>

                    <ul class="footer-list">

                        <li>
                            <p class="footer-list-title" data-translation-key="foo5"></p>
                        </li>

                        <!-- Europe - West Server -->
                        <li class="server-status">
                            <div class="green-dot"></div>
                            <div class="server-info">Europe - West</div>
                        </li>

                        <!-- USA - West Server -->
                        <li class="server-status pt-2">
                            <div class="green-dot"></div>
                            <div class="server-info">USA - West</div>
                        </li>

                        <!-- Asia - East Server -->
                        <li class="server-status pt-2">
                            <div class="green-dot"></div>
                            <div class="server-info">Asia - East</div>
                        </li>

                        <!-- Africa - North Server -->
                        <li class="server-status pt-2">
                            <div class="green-dot"></div>
                            <div class="server-info">Africa - North</div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <p class="copyright">
                        &copy; 2024 All Rights Reserved by Bio Mining Pool</a>
                    </p>
                </div>
            </div>
        </footer>

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



   

        <script src="./assets/js/lang.js" defer></script>
    </body>

    </html>