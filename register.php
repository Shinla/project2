<?php
session_start();

include("./config/connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // something was posted
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($email) && !empty($password) && !is_numeric($user_name)) {
        // save to database
        $user_id = random_num(20);
        $query = "INSERT INTO users (user_id, user_name, email, password) VALUES ('$user_id', '$user_name', '$email', '$password')";

        mysqli_query($con, $query);

        header("Location: login.php");
        die;
    } else {
        $error_message = "Please enter valid information!";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
  <title>Bio MPC | Register</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <!-- Bootstrap CSS v5.2.1 -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <script>
        function validateForm() {
            var username = document.getElementById("form3Example1c").value;
            var email = document.getElementById("form3Example3c").value;
            var password = document.getElementById("form3Example4c").value;

            if (username === "" || email === "" || password === "") {
                showAlert("Please fill in all fields");
                return false;
            }

            return true;
        }

        function showAlert(message) {
            var alertDiv = document.createElement("div");
            alertDiv.className = "alert alert-danger alert-dismissible fade show";
            alertDiv.role = "alert";
            alertDiv.innerHTML = "<strong>Error:</strong> " + message +
                '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';

            document.getElementById("alert-container").appendChild(alertDiv);
        }
    </script>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #444444;">
    <div class="container">
      <!-- Logo -->
      <a class="navbar-brand" href="#" style="color: #fff;">Bio <span style="color:#ffc451">MPC</span></a>
      <!-- Toggler Button for Mobile -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Navigation Links -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto"> <!-- Align to the right -->
          <li class="nav-item"><a class="nav-link" href="#" onclick="changeLanguage('en')" style="color: #fff;">English</a></li>
          <li class="nav-item"><a class="nav-link" href="#" onclick="changeLanguage('zh')" style="color: #fff;">中文</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-2">
                            <div class="row justify-content-center">
                                <p class="text-center h1 fw-bold mb-4 mx-1 mx-md-3 mt-3" data-translation-key="log11">Sign up</p>
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                    <div id="alert-container"></div> <!-- Container for alerts -->

                                    <form class="mx-1 mx-md-4" method="post" onsubmit="return validateForm()">
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example1c"><i class="bi bi-person-circle"></i> <span data-translation-key="log2"> </span></label>
                                                <input type="text" id="form3Example1c" class="form-control form-control-lg py-3" name="user_name" autocomplete="off" style="border-radius:25px ;" />
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example3c"><i class="bi bi-envelope-at-fill"></i> <span data-translation-key="log8"></label>
                                                <input type="email" id="form3Example3c" class="form-control form-control-lg py-3" name="email" autocomplete="off" style="border-radius:25px ;" />
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example4c"><i class="bi bi-chat-left-dots-fill"></i> <span data-translation-key="log5"> </span></label>
                                                <input type="password" id="form3Example4c" class="form-control form-control-lg py-3" name="password" autocomplete="off" style="border-radius:25px ;" />
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <input type="submit" data-translation-key="log10" name="register" class="btn btn-warning btn-lg text-light my-2 py-3" style="width:100%; border-radius: 30px; font-weight:600;" />
                                        </div>
                                    </form>
                                    <p align="center"> <span data-translation-key="log10"></span> <a href="login.php" class="text-warning" style="font-weight:600; text-decoration:none;"> <span data-translation-key="log1"></a></p>
                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                    <img src="assets/signup.png" class="img-fluid" alt="Sample image" height="300px" width="500px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <!-- Bootstrap JavaScript Libraries -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


<script src="assets/js/lang.js"></script>
</body>

</html>