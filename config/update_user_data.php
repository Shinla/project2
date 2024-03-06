<?php
// Assuming you have user-related information available in the session

if (isset($_POST['withdrawAmount'])) {
    // Add the necessary includes and session start if not done elsewhere
    // include("./config/conn.php");
    // include("./config/function.php");
    // session_start();

    // Assuming you have user-related information available in the session
    // $user_data = check_login($con);

    $withdrawAmount = $_POST['withdrawAmount'];

    if ($withdrawAmount >= 500 && $withdrawAmount <= $user_data['total_amount']) {
        // Deduct the withdrawal amount from the user's data
        $user_data['mine_amount'] -= $withdrawAmount;
        $user_data['acc_balance'] -= $withdrawAmount;

        // Update the user's total amount in the database
        $update_query = "UPDATE users SET mine_amount = {$user_data['mine_amount']}, acc_balance = {$user_data['acc_balance']} WHERE user_id = {$user_data['user_id']}";
        mysqli_query($con, $update_query);

        // Provide a success message or further logic if needed
        $response = ['success' => true, 'message' => 'Withdrawal successful.'];
        echo json_encode($response);
        exit;
    } else {
        // Return an error message if withdrawal amount is not valid
        $response = ['success' => false, 'message' => 'Error: Withdrawal amount must be between 500 and ' . $user_data['total_amount'] . ' USD.'];
        echo json_encode($response);
        exit;
    }
}
?>
