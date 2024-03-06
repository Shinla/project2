<?php
include("./config/conn.php");

// Get user_id and new_balance from the POST request
$user_id = $_POST['user_id'];
$new_balance = $_POST['new_balance'];

// Update the user's account balance in the database
$update_query = "UPDATE users SET acc_balance = $new_balance WHERE user_id = $user_id";
$result = mysqli_query($con, $update_query);

// Return a response (can be extended based on your needs)
if ($result) {
    echo "Account balance updated successfully";
} else {
    echo "Error updating account balance: " . mysqli_error($con);
}
?>
