<?php
include("./config/functions.php");

check_login();

function getUserData($user_id)
{
    $user_data = database_run("SELECT u.*, v.level_name FROM users u
                                INNER JOIN vip_levels v ON u.vip_id = v.vip_id
                                WHERE u.user_id = :user_id LIMIT 1", ['user_id' => $user_id]);

    return $user_data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $withdrawAmount = isset($_POST['withdrawAmount']) ? floatval($_POST['withdrawAmount']) : 0;

    $userData = getUserData($_SESSION['USER']->user_id);

    if ($userData) {
        $totalAmount = $userData[0]->total_amount;

        // Check if there are sufficient funds for withdrawal
        if ($withdrawAmount > $totalAmount) {
            echo "insufficient_balance";
            exit();
        }

        // Update the total_amount and check if the withdrawal is successful
        if (deductWithdrawalAmount($_SESSION['USER']->user_id, $withdrawAmount)) {
            echo "success";
            exit();
        } else {
            echo "withdrawal_failed";
            exit();
        }
    } else {
        echo "user_data_not_found";
        exit();
    }
}

$userData = getUserData($_SESSION['USER']->user_id);

if ($userData) {
    $totalAmount = $userData[0]->total_amount;
    $levelName = $userData[0]->level_name;
} else {
    echo "user_data_not_found";
    exit();
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
    <link rel="stylesheet" href="./assets/css/w.css">

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

    <section class="wallet">
        <div class="wallet-container">
            <h2 style="color: black !important;">Wallet Information</h2>
            <p style="color: black !important;"><strong>Username</strong>: <?=$_SESSION['USER']->username?></p>
            <p style="color: black !important;"><strong>Total Amount</strong>: <?=$totalAmount?></p>
            <p style="color: black !important;"><strong>Level Name</strong>: <?=$levelName?></p>
            <br>
            <hr>
            <div class="deposit-container">
                <h3 style="color: black !important;">Deposit</h3>
                <p style="color: black !important;"><strong>Deposit to the following address:</strong></p>
                <p class="text-success"> BTC:
                    <br><strong>bc1pd6f8gtc9cxwnhdeu4u4mga95rtyl2ay9hqxej24p72rw2yv7z88qsqr8p3</strong></p>
                <p class="text-success">TRC20: <br><strong>TBK6N31k1eV69H8MYGmWQQms85eoNMC1xZ</strong></p>
                <p class="text-success">ERC20: <br><strong>0xf0AF6E21c1BA5519f25E8F2A7379D1A06308acDa</strong></p>
                <p class="text-success">SOL: <br><strong>Gc4c8EFYT72zDZW8LAPyJKBkvxRBueaiUCE3TXtZ4a74</strong></p>
                <p style="color: black !important;">If you have any questions, please contact our customer service.
                </p>
            </div><br>
            <hr>
            <div class="withdraw-container">
                <h3 style="color: black !important;">Withdraw</h3><br>
                <form id="withdrawForm" onsubmit="confirmWithdraw(event)" method="POST" action="">
                    <label for="withdrawAmount" style="color: black !important;">Withdraw Amount (USD):</label>
                    <input type="number" id="withdrawAmount" name="withdrawAmount" class="form__input"
                        placeholder="Enter amount" required><br>
                    <label for="withdrawalAddressSelect" style="color: black !important;">Withdrawal Address:</label>
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
                    </select><br><br>
                    <label for="exchangePartner" style="color: black !important;">Exchange Partner:</label><br>
                    <input type="text" id="exchangePartner" name="exchangePartner" class="form__input"
                        placeholder="Enter exchange partner" required><br>
                    <label for="withdrawalAddress" style="color: black !important;">Withdraw Address:</label><br>
                    <input type="text" id="withdrawalAddress" name="withdrawalAddress"
                        placeholder="Enter withdraw address" class="form__input" required><br>
                        <button type="button" class="wallet-btn" onclick="confirmWithdraw()">Withdraw</button>

                </form>
            </div>

        </div>
    </section>





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




    <script src="./assets/js/wallet.js" defer></script>

    <script src="./assets/js/lang.js" defer></script>
</body>

</html>