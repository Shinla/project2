<?php

function check_login($con)
{
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];

        $query = "SELECT * FROM users WHERE user_id = '$user_id'";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            return mysqli_fetch_assoc($result);
        }
    }

    // Redirect to login
    header("Location: login.php");
    die;
}

?>
