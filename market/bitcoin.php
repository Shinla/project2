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
        <button id="stopMiningBtn">Stop Mining</button>    </div>
</div>


      <div class="col-md-6 offset-md-3">
        <div class="mining-container rounded">
          <div id="miningSection" class="text-center center-container">
            <img src="./bitcoin.webp" class="img-fluid" alt="bitcoin logo" width="150px">
            <div class="btn-container">
            <button id="startMiningBtn">Start Mining</button>

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



<script>
      $(document).ready(function() {
        $("#startMiningBtn").click(function() {
            // Assuming you have a user ID available (replace with actual user ID)
            var userId = 1;

            $.ajax({
                url: "test.php",
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






    
</body>
</html>
