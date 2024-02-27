<?php
include("./config/connection.php");
include("functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Your Website</title>
</head>
<body>

<div class="container mt-5">
    <?php
    // Check if user_data is set
    if (isset($user_data)) {
        echo '<h1>Welcome, ' . $user_data['user_name'] . '!</h1>';
        // You can also add other user details if needed
    } else {
        echo '<p>Error: User data not available.</p>';
    }
    ?>

    <div id="vipLevelDisplay">
        <p>Your VIP Level: <span id="vipLevel">Loading...</span></p>
    </div>

    <div id="miningPercentageDisplay">
        <p>Mining Percentage: <span id="miningPercentage">Loading...</span></p>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="script.js"></script>

</body>
</html>
