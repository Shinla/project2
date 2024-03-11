<?php
include("./config/mail.php");
include("./config/functions.php");
check_login();

$errors = array();

if ($_SERVER['REQUEST_METHOD'] == "GET" && !check_verified()) {
    //send email
    $vars['code'] =  rand(10000,99999);

    //save to database
    $vars['expires'] = (time() + (60 * 10));
    $vars['email'] = $_SESSION['USER']->email;

    $query = "insert into verify (code, expires, email) values (:code, :expires, :email)";
    database_run($query, $vars);

    $message = "your code is " . $vars['code'];
    $subject = "Email verification";
    $recipient = $vars['email'];
    send_mail($recipient, $subject, $message);
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!check_verified()) {
        $query = "select * from verify where code = :code && email = :email";
        $vars = array();
        $vars['email'] = $_SESSION['USER']->email;
        $vars['code'] = $_POST['code'];

        $row = database_run($query, $vars);

        if (is_array($row)) {
            $row = $row[0];
            $time = time();

            if ($row->expires > $time) {
                $user_id = $_SESSION['USER']->user_id;
                $query = "update users set email_verified = email where user_id = '$user_id' limit 1"; // Change 'id' to 'user_id'
                database_run($query);
                header("Location: index.php");
                die;
            } else {
                $errors[] = "Code expired";
            }
        } else {
            $errors[] = "Wrong code";
        }
    } else {
        $errors[] = "You're already verified";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="bio mp">
    <title>Bio MP | Verify </title>
    <link rel="stylesheet" href="./assets/css/login.css">
</head>

<body>

    <div class="container-fluid">
        <div class="row main-content text-center">
            <div class="col-md-12 col-xs-12 col-sm-12 login_form">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <h2 data-translation-key="verify"></h2>
                    </div>

                    <?php if (isset($errors) && count($errors) > 0): ?>
                    <div class="error-container">
                        <?php foreach ($errors as $error): ?>
                        <?php if ($error === "Code expired"): ?>
                        <span data-translation-key="codeExpired"></span><br>
                        <?php elseif ($error === "Wrong Code"): ?>
                        <span data-translation-key="wrongCode"></span><br>
                        <?php elseif ($error === "You're already verified"): ?>
                        <span data-translation-key="alreadyVerified"></span><br>
                        <?php else: ?>
                        <!-- If there's an unrecognized error, you can display it here -->
                        <span><?php echo htmlspecialchars($error); ?></span><br>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>



                    <p  style="color:#fff; font-size:23px;"><strong><span data-translation-key="lo7"></span></strong></p>
                    <div class="corporate-images">
                        <img src="./assets/images/client/binance.webp" alt="Binance Logo">
                        <img src="./assets/images/client/by.png" alt="Bybit Logo">
                    </div>
                    <!-- Login Form -->
                    <p class="inform"><strong><span data-translation-key="inform"></strong></span></p>
                    <div class="row">
                        <form method="post" class="form-group">
                            <input type="text" name="code" placeholder="Enter your Code" class="code"><br>

                            <input type="submit" name="Verify" value="Verify" class="btn">
                            <a href="login.php" class="btn" style="text-decoration:none;"><span
                                    data-translation-key="back" ></span></a>
                        </form>
                    </div>

                    <div class="language-switch">
                        <button onclick="changeLanguage('en')">English</button>
                        <button onclick="changeLanguage('zh')">中文</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/js/lang.js"></script>
</body>

</html>