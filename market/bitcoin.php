<?php
include("../config/connection.php");
include("../config/login.php");

session_start();

$user_data = check_login($con);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bitcoin Mining</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="./styles.css">
</head>
<body>

<header>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #444444;">
    <a class="navbar-brand" href="#" style="color: white;">Bio <span style="color: #ffa100;">MPC</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="../index.php" data-translation-key="home" style="color: white;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-translation-key="wallet" style="color: white;">Wallet</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./market.html" data-translation-key="mar" style="color: white;">Market</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../logout.php" data-translation-key="loge" style="color: white;">Logout</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
            Language
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="languageDropdown">
            <a class="dropdown-item" href="#" onclick="changeLanguage('en')">English</a>
            <a class="dropdown-item" href="#" onclick="changeLanguage('zh')">中文</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</header>

<div class="container mt-5">
    <div class="row">
    <div class="col-md-3">
    <div class="wallet-section rounded">
        <h4 class="text-center mb-4">Bitcoin Information</h4>
        <p><strong>Last Price:</strong> $<span id="lastPrice">50,959.21</span></p>
        <p><strong>24 Hours Change:</strong> +<span id="percentageChange">0.55%</span></p>
        <p><strong>Market Cap:</strong> $<span id="marketCap">500.32B</span></p>
        <p><strong>Bitcoins Left to Be Mined:</strong> <span id="bitcoinsLeftToMine">680756.255</span></p>
        <!-- Stop Mining button -->
        <button class="btn btn-success btn-block mt-3" onclick="confirmStopMining()">Stop Mining</button>
    </div>
</div>


      <div class="col-md-6 offset-md-3">
        <div class="mining-container rounded">
          <div id="miningSection" class="text-center center-container">
            <img src="./bitcoin.webp" class="img-fluid" alt="bitcoin logo" width="150px">
            <div class="btn-container">
              <button class="btn btn-primary custom-primary btn-lg btn-block">Start Mining</button>
            </div>
            <p id="miningStatus" class="mt-3 lead" style="color:black">Mining Status: Idle</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="wallet-section rounded">
            <h4 class="text-center mb-4">Wallet Information</h4>
            <p><strong>Username:</strong> <?php echo $user_data['user_name']; ?></p>
            <p><strong>Mining Amount:</strong> $<?php echo $user_data['mine_amount']; ?></p>
            <p><strong>Account Balance:</strong> $<?php echo $user_data['acc_balance']; ?></p>
            <p><strong>VIP Level:</strong> <?php echo $user_data['vip_level']; ?></p>
            <button class="btn btn-success btn-block mt-3"><a href="#" style="color:white; text-decoration:none;">Withdrawal</a></button>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-md-12">
        <div class="mining-records rounded">
          <h4 class="text-center mb-4">Mining Records</h4>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Time</th>
                  <th>Amount</th>
                </tr>
              </thead>
              <tbody id="miningRecordsList">
                <!-- Display mining records here dynamically -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Include Bootstrap JS and other scripts -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="../assets/js/lang.js"></script>



<!-- Add this script section at the end of your HTML body -->
<script>


    function stopMining() {
        // Add logic to stop mining here
        alert("Mining stopped!");
   
    }

  document.addEventListener("DOMContentLoaded", function () {
    // Function to start mining with auto rate
    function startMining() {
      var miningRecordsData = JSON.parse(localStorage.getItem("miningRecords")) || [];

      var miningInterval = setInterval(function () {
        // Simulate mining rate (adjust as needed)
        var miningRate = 0.07;
        var currentTime = new Date().toISOString().replace("T", " ").substr(0, 19);
        var minedAmount = miningRate * miningRecordsData.length;
        miningRecordsData.push({ id: miningRecordsData.length + 1, time: currentTime, amount: minedAmount });

        // Store mining records in localStorage
        localStorage.setItem("miningRecords", JSON.stringify(miningRecordsData));

        // Display mining records dynamically
        displayMiningRecords(miningRecordsData);
      }, 1000); // Update every second

      // Attach the mining interval to stop it later
      document.miningInterval = miningInterval;
    }

    // Function to stop mining
    function stopMining() {
      clearInterval(document.miningInterval);
      alert("Mining stopped!");
    }

    // Display mining records dynamically
    function displayMiningRecords(records) {
      var miningRecordsList = document.getElementById("miningRecordsList");

      // Clear existing records
      miningRecordsList.innerHTML = "";

      // Iterate through mining records data and create table rows
      for (var i = 0; i < records.length; i++) {
        var record = records[i];

        var row = document.createElement("tr");
        row.innerHTML = "<td>" + record.id + "</td>" +
          "<td>" + record.time + "</td>" +
          "<td>" + record.amount.toFixed(4) + "</td>";

        miningRecordsList.appendChild(row);
      }
    }

    // Attach click event listener to the Start Mining button
    var startMiningBtn = document.querySelector(".custom-primary");
    startMiningBtn.addEventListener("click", function () {
      startMining();
    });

    // Attach click event listener to the Stop Mining button
    var stopMiningBtn = document.querySelector(".btn-success");
    stopMiningBtn.addEventListener("click", function () {
      stopMining();
    });

    // Load and display mining records on page load
    var storedMiningRecords = JSON.parse(localStorage.getItem("miningRecords")) || [];
    displayMiningRecords(storedMiningRecords);
  });
</script>






    
</body>
</html>
