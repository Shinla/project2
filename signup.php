<?php  

include("./config/functions.php");

$errors = array();

if($_SERVER['REQUEST_METHOD'] == "POST")
{

	$errors = signup($_POST);

	if(count($errors) == 0)
	{
		header("Location: login.php");
		die;
	}
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Yinka Enoch Adedokun">
    <title>Register</title>
    <link rel="stylesheet" href="./assets/css/login.css">

</head>

<body>

    <div class="container-fluid">
        <div class="row main-content text-center">
            <div class="col-md-12 col-xs-12 col-sm-12 login_form">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <h2 data-translation-key="lo1">Create Account</h2>
                    </div>
                    <?php if (isset($errors) && count($errors) > 0): ?>
                    <div class="error-container">
                        <?php foreach ($errors as $error): ?>
                        <?php if ($error === "Please enter a valid username"): ?>
                        <span data-translation-key="validUsername"></span><br><br>
                        <?php elseif ($error === "Please enter a valid email"): ?>
                        <span data-translation-key="validEmail"></span><br><br>
                        <?php elseif ($error === "Password must be at least 4 chars long"): ?>
                        <span data-translation-key="passwordLength"></span><br><br>
                        <?php elseif ($error === "Passwords must match"): ?>
                        <span data-translation-key="passwordsMatch"></span><br><br>
                        <?php elseif ($error === "That email already exists"): ?>
                        <span data-translation-key="emailExists"></span><br><br>
                        <?php elseif ($error === "That username already exists"): ?>
                        <span data-translation-key="usernameExists"></span><br><br>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>


                    <p style="color:#fff; font-size:23px;"><strong><span data-translation-key="lo7"></span></strong></p>
                    <div class="corporate-images">
                        <img src="./assets/images/client/binance.webp" alt="Binance Logo">
                        <img src="./assets/images/client/by.png" alt="Bybit Logo">
                    </div>
                    <!-- Sign Up Form -->
                    <div class="row">
                        <form method="post" class="form-group">
                            <input type="text" name="username" id="username" class="form__input" placeholder="Username">
                            <input type="email" name="email" id="email" class="form__input" placeholder="Email">
                            <input type="password" name="password" id="password" class="form__input"
                                placeholder="Password">
                            <input type="password" name="password2" id="password2" class="form__input"
                                placeholder="Retype Password">

                            <input type="checkbox" class="form-check-input" id="termsCheckbox" name="termsCheckbox"
                                required>
                            <label class="form-check-label" for="termsCheckbox">
                                <span data-translation-key="lo2" style="color:#fff"></span>
                                <a href="tnc.php" style="text-decoration:none;">
                                    <span data-translation-key="lo9" style="color:#fff"></span>
                                </a>
                            </label>
                            <div id="checkboxAlert" class="alert">Please accept the terms and conditions.</div>
<br>
                            <input type="submit" data-translation-key="Signup" class="btn">
                        </form>
                    </div>
                    <!-- Don't have an account? -->
                    <div class="row justify-content-center">
                        <p style="color:#fff"><span data-translation-key="log10"></span> <a href="login.php" class="reg"
                                data-translation-key="signIn" style="color:#fff">Login Here</a></p>
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
    <script src="./assets/js/login.js"></script>
</body>

</html>