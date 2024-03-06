<?php
session_start();

include("./config/conn.php");
include("./config/function.php");

$user_data = check_login($con);

// Retrieve the updated total amount from the POST request
$updatedTotalAmount = $_POST['updatedTotalAmount'];

// Update the user's table in the database
$updateQuery = "UPDATE users SET total_amount = $updatedTotalAmount WHERE user_id = " . $user_data['user_id'];
$result = mysqli_query($con, $updateQuery);

if ($result) {
    // Successful update
    echo "Success";
} else {
    // Error in the update
    echo "Error: " . mysqli_error($con);
}

mysqli_close($con);
?>
