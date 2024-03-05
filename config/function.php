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



function displayMiningTable($con) {
    // Fetch the latest 10 mining logs
    $miningLogsQuery = "SELECT start_time, vip_levels.level_name, vip_levels.rates, mining_logs.mining_amount
    FROM mining_logs
    INNER JOIN vip_levels ON mining_logs.user_id = vip_levels.vip_id
    ORDER BY start_time DESC
    LIMIT 10";

    $miningLogsResult = mysqli_query($con, $miningLogsQuery);

    if ($miningLogsResult) {
        echo '<table border="1">
                <thead>
                    <tr>
                        <th>Start Time</th>
                        <th>VIP Level</th>
                        <th>Rate</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>';
        
        while ($row = mysqli_fetch_assoc($miningLogsResult)) {
            echo '<tr>';
            echo '<td>' . $row['start_time'] . '</td>';
            echo '<td>' . $row['level_name'] . '</td>';
            echo '<td>' . $row['rates'] . '</td>';
            echo '<td>' . $row['mining_amount'] . '</td>';
            echo '</tr>';
        }

        echo '</tbody></table>';
    } else {
        echo 'Error fetching mining logs: ' . mysqli_error($con);
    }
}

?>
