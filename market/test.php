<?php

function startMining($userId) {
    // Set the timezone to 'Asia/Shanghai'
    date_default_timezone_set('Asia/Shanghai');

    $conn = new mysqli("localhost", "root", "", "log");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve user's VIP level and rate
    $getUserInfoQuery = "SELECT u.mine_amount, v.level_name, v.rates
                         FROM users u
                         LEFT JOIN vip_levels v ON u.vip_id = v.vip_id
                         WHERE u.user_id = $userId";

    $userInfoResult = $conn->query($getUserInfoQuery);

    if ($userInfoResult && $userInfoResult->num_rows > 0) {
        $userInfo = $userInfoResult->fetch_assoc();

        // Calculate duration_hours based on VIP level
        switch ($userInfo['level_name']) {
            case 'Bronze':
                $durationHours = 8;
                break;
            case 'Silver':
                $durationHours = 6;
                break;
            case 'Gold':
                $durationHours = 2;
                break;
            case 'Platinum':
                $durationHours = 1;
                break;
            default:
                $durationHours = 8; // Default to 8 hours for unknown levels
        }

        // Calculate the end time (based on current time and duration)
        $endTime = date("Y-m-d H:i:s", strtotime("+$durationHours hours"));

        // Insert into mining_logs table
        $insertMiningLogQuery = "INSERT INTO mining_logs (user_id, start_time, end_time, duration_hours)
                                VALUES ('$userId', NOW(), '$endTime', $durationHours)";

        $result = $conn->query($insertMiningLogQuery);

        if ($result) {
            echo "Mining will end at: " . date("Y-m-d H:i:s", strtotime($endTime));
        } else {
            echo "Error inserting mining log: " . $conn->error;
        }
    } else {
        echo "Error retrieving user information.";
    }

    $conn->close();
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["userId"])) {
    $userId = $_POST["userId"];
    startMining($userId);
} else {
    echo "Invalid request";
}
?>
