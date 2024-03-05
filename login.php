<?php
session_start();

include("./config/conn.php");
include("./config/function.php");

$error_message = "";
$success_message = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (isset($_POST['register'])) {
        // Registration Logic
        $email = $_POST['email'];

        // Check for duplicate username
        $check_username_query = "SELECT * FROM users WHERE user_name = '$user_name'";
        $check_username_result = mysqli_query($con, $check_username_query);

        // Check for duplicate email
        $check_email_query = "SELECT * FROM users WHERE email = '$email'";
        $check_email_result = mysqli_query($con, $check_email_query);

        if (mysqli_num_rows($check_username_result) > 0) {
            $error_message = "Username already exists. Please choose another username.";
        } elseif (mysqli_num_rows($check_email_result) > 0) {
            $error_message = "Email already exists. Please use another email address.";
        } else {
            // Omitting user_id from the insert query to allow auto-increment
            $query = "INSERT INTO users (user_name, email, password) VALUES ('$user_name', '$email', '$password')";

            if (mysqli_query($con, $query)) {
                $success_message = "Registration successful!";
            } else {
                $error_message = "Error: " . mysqli_error($con);
            }
        }
    } elseif (isset($_POST['login'])) {
        // Login Logic
        $query = "SELECT * FROM users WHERE user_name = '$user_name'";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);

            // Verify password
            if ($user_data['password'] === $password) {
                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: index.php");
                die;
            } else {
                $error_message = "Wrong username or password!";
            }
        } else {
            $error_message = "Wrong username or password!";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap">
    <title>Welcome to Bio MP</title>

    
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form method="post" action="">
                <?php if ($error_message !== "" || $success_message !== "") : ?>
                <div class="alert <?= $error_message !== "" ? 'alert-danger' : 'alert-success' ?>" role="alert">
                    <?= $error_message !== "" ? $error_message : $success_message ?>
                </div>
                <?php endif; ?>
                <h3 data-translation-key="lo1">Create Account</h3>
                <div class="corporate-images">
                    <img src="assets/img/clients/bina.png" alt="Binance Logo">
                    <img src="assets/img/clients/by.png" alt="Bybit Logo">
                </div>
                <input type="text" placeholder="Username" name="user_name"
                    value="<?= isset($user_name) ? $user_name : '' ?>">
                <input type="email" placeholder="Email" name="email" value="<?= isset($email) ? $email : '' ?>">
                <input type="password" placeholder="Password" name="password">
                <!-- Use Bootstrap classes for styling -->
                <div class="form-group checkbox-container">
                    <div class="form-row">
                        <div class="col-12">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="termsCheckbox" name="termsCheckbox"
                                    required>
                                <label class="form-check-label" for="termsCheckbox">
                                    <span data-translation-key="lo2"></span><a href="tnc.php"> <span data-translation-key="lo9"></span></a>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <button name="register" data-translation-key="log11" class="btn btn-primary">Sign Up</button>
            </form>
        </div>


        <div class="form-container sign-in">
            <form method="post" action="">
                <?php if ($error_message !== "") : ?>
                <div class="alert alert-danger" role="alert">
                    <?= $error_message ?>
                </div>
                <?php endif; ?>
                <div class="language-switch">
                    <button onclick="changeLanguage('en')">English</button>
                    <button onclick="changeLanguage('zh')">中文</button>
                </div>
                <p data-translation-key="lo7">Partner</p>
                <div class="corporate-images">
                    <img src="assets/img/clients/bina.png" alt="Binance Logo">
                    <img src="assets/img/clients/by.png" alt="Bybit Logo">
                </div>
                <input type="text" placeholder="Username" name="user_name">
                <input type="password" placeholder="Password" name="password">


                <button name="login" data-translation-key="signIn"  class="btn btn-primary">Sign In</button>
            </form>
        </div>

        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1 data-translation-key="lo5"></h1>
                    <p data-translation-key="lo6"></p>
                    <button class="hidden" id="login" data-translation-key="signIn">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1 data-translation-key="lo3"></h1>
                    <p data-translation-key="lo4"></p>
                    <button class="hidden" id="register" data-translation-key="log11">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="./assets/js/login.js"></script>
    <script src="./assets/js/lang.js"></script>

</body>

</html>