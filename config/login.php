<?php

function check_login($con) {
    if(isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $query = "SELECT * FROM users WHERE user_id = '$user_id'";
        $result = mysqli_query($con, $query);

        if(!$result) {
            die("Error in user query: " . mysqli_error($con));
        }

        if(mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);

            // Fetch VIP level information
            $vip_id = $user_data['vip_id'];
            $vip_query = "SELECT * FROM vip_levels WHERE vip_id = '$vip_id'";
            $vip_result = mysqli_query($con, $vip_query);

            if(!$vip_result) {
                die("Error in VIP query: " . mysqli_error($con));
            }

            if(mysqli_num_rows($vip_result) > 0) {
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
?>
	