<?php
include("config/conn.php");

function check_login($con) {
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $query = "SELECT * FROM users WHERE user_id = '$user_id'";
        $result = mysqli_query($con, $query);

        if (!$result) {
            die("Error in user query: " . mysqli_error($con));
        }

        if (mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);

            // Fetch VIP level information
            $vip_id = $user_data['vip_id'];
            $vip_query = "SELECT * FROM vip_levels WHERE vip_id = '$vip_id'";
            $vip_result = mysqli_query($con, $vip_query);

            if (!$vip_result) {
                die("Error in VIP query: " . mysqli_error($con));
            }

            if (mysqli_num_rows($vip_result) > 0) {
                $vip_data = mysqli_fetch_assoc($vip_result);
                $user_data['vip_level'] = $vip_data['level_name'];  // Change to level_name
            } else {
                $user_data['vip_level'] = 'Unknown';
            }

            return $user_data;
        }
    }

    header("Location: ../login.php");
    die;
}

// Function to start mining
function startMining($userId, $conn) {
    date_default_timezone_set('Asia/Shanghai');

    // Retrieve user's VIP level and rate
    $getUserInfoQuery = "SELECT u.mine_amount, v.level_name, v.rates
                         FROM users u
                         LEFT JOIN vip_levels v ON u.vip_id = v.vip_id
                         WHERE u.user_id = $userId";

    $userInfoResult = $conn->query($getUserInfoQuery);

    if ($userInfoResult && $userInfoResult->num_rows > 0) {
        $userInfo = $userInfoResult->fetch_assoc();

        // Calculate duration_hours based on VIP level
        $durationHours = getMiningDuration($userInfo['level_name']);

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
}

// Function to get mining duration based on VIP level
function getMiningDuration($levelName) {
    switch ($levelName) {
        case 'Bronze':
            return 8;
        case 'Silver':
            return 6;
        case 'Gold':
            return 2;
        case 'Platinum':
            return 1;
        default:
            return 8; // Default to 8 hours for unknown levels
    }
}
?>
