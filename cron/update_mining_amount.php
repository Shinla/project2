<?php
include("../config/conn.php");

date_default_timezone_set("Asia/Kuala_Lumpur");
$logMessage = "\nSTART CRON TIME:" . date('Y-m-d H:is');

#user
$user_query = "SELECT * FROM users;";
$user_result = mysqli_query($con, $user_query);

if(!$user_result) {
	$message = "Error in user query: " . mysqli_error($con);
	$logMessage .= "\n" . $message;
	die($message);
}

if(mysqli_num_rows($user_result) <= 0) {
	$message = "No user result found";
	$logMessage .= "\n" . $message;
	die($message);
}

$user_data = mysqli_fetch_assoc($user_result);

if($user_data) {
	$userInfo = array();
	do {
		$user = array(
					'user_id' => $user_data['user_id'],
					'user_name' => $user_data['user_name'],
					'acc_balance' => $user_data['acc_balance'],
					'mine_amount' => $user_data['mine_amount'],
					'latest_mining_time' => $user_data['latest_mining_time'],
				);
		array_push($userInfo, $user);
	} while($user_data = mysqli_fetch_assoc($user_result));
}


#vip
$vip_query = "SELECT * FROM vip_levels;";
$vip_query_result = mysqli_query($con, $vip_query);

if(!$vip_query_result) {
	$message = "Error in VIP query: " . mysqli_error($con);
	$logMessage .= "\n" . $message;
	die($message);
}

if(mysqli_num_rows($vip_query_result) <= 0) {
	$message = "No VIP result found";
	$logMessage .= "\n" . $message;
	die($message);
}

$vip_data = mysqli_fetch_assoc($vip_query_result);

if($vip_data) {
	$vipInfo = array();
	do {
		$vip = array(
					'amount' => $vip_data['amount'],
					'rates' => $vip_data['rates'],
					'hour' => $vip_data['hour'],
				);
		array_push($vipInfo, $vip);
	} while($vip_data = mysqli_fetch_assoc($vip_query_result));
}

#mining amount
$mining_query = "SELECT * FROM mining;";
$mining_result = mysqli_query($con, $mining_query);

if(!$mining_result) {
	$message = "Error in mining query: " . mysqli_error($con);
	$logMessage .= "\n" . $message;
	die($message);
}

if(mysqli_num_rows($mining_result) <= 0) {
	$message = "No mining result found";
	$logMessage .= "\n" . $message;
	die($message);
}

$mining_data = mysqli_fetch_assoc($mining_result);

if($mining_data) {
	$mining_balance = $mining_data['amount'];
}

#print_r($userInfo);
#print_r($vipInfo);
#echo date('Y-m-d H:i:s', strtotime("now"));

#check each user vip level & mining
$user_update_datas = $mining_insert_datas = array();
foreach($userInfo as $user) {
	$acc_balance = $user['acc_balance'];
	
	#if not entitle vip level, continue
	foreach($vipInfo as $vip_data) {
		if($acc_balance >= $vip_data['amount']) {
			$rates = $vip_data['rates'];
			$hour = $vip_data['hour'];
		}
	}
	if(!isset($rates) || !isset($hour) || $hour == 0) {
		$logMessage .= "\nUser:" . $user['user_name'] . " not entitled for any VIP level";
		continue;
	}
	
	#calculation for mining time
	$latest_mining_time  = $user['latest_mining_time'];
	$update_mining_time = strtotime($latest_mining_time  . " +" . $hour . " hour");
	$update_date = date('Y-m-d H:i:s', $update_mining_time + 1);
	$now = strtotime("now");
	$date_now = date('Y-m-d H:i:s', $now);
	
	#echo $update_date;
	
	#if not yet the update mining time, continue
	if($now < $update_mining_time) {
		continue;
	}
	
	#calculation for mining amount
	$mining_amount = sprintf('%.2f', ($mining_balance * $rates));
	
	#echo $mining_balance;
	#echo $rates;
	#echo $mining_amount;
	
	#put datas into $user_update_datas to update later
	$user_update_data = array(
							'user_id' => $user['user_id'],
							'mine_amount' => sprintf('%.2f', (floatval($user['mine_amount']) + $mining_amount)),
							'latest_mining_time ' => $update_date,
						);
	array_push($user_update_datas, $user_update_data);
	
	#put datas into $mining_insert_data to insert later
	$mining_insert_data = array(
							'user_id' => $user['user_id'],
							'start_time' => $latest_mining_time ,
							'end_time' => $update_date,
							'mining_amount' => $mining_amount,
							'duration_hours' => $hour,
						);
	array_push($mining_insert_datas, $mining_insert_data);
	
} //foreach($user_data as $user) {


#update user datas
if(!empty($user_update_datas)) {
	$logMessage .= "\nStart update user data";
	
	$user_update_query = "UPDATE users SET mine_amount = ?, latest_mining_time  = ? WHERE user_id = ?;";

	$user_update_statement = mysqli_prepare($con, $user_update_query);
	
	mysqli_stmt_bind_param($user_update_statement, "dsi", $mine_amount, $latest_mining_time , $user_id);
	
	foreach($user_update_datas as $count => $user_update_data) {
		$mine_amount = $user_update_data['mine_amount'];
		$latest_mining_time  = $user_update_data['latest_mining_time '];
		$user_id = $user_update_data['user_id'];
		
		mysqli_stmt_execute($user_update_statement);
	}
	
	$logMessage .= "\nEnd update user data";
	$logMessage .= "\n" . $count . " user(s) data updated";
} else {
	$logMessage .= "\nNo user data to update";
}
	
	
#mining insert datas
if(!empty($mining_insert_datas)) {
	$logMessage .= "\nStart insert mining log";
	
	$mining_query = "INSERT INTO mining_logs (user_id, start_time, end_time, mining_amount, duration_hours) VALUES (?,?,?,?,?);";
	
	$mining_statement = mysqli_prepare($con, $mining_query);
	
	mysqli_stmt_bind_param($mining_statement, "issdi", $user_id, $start_time, $end_time, $mining_amount, $duration_hours);
	
	foreach($mining_insert_datas as $count => $mining_insert_data) {
		$user_id = $mining_insert_data['user_id'];
		$start_time = $mining_insert_data['start_time'];
		$end_time = $mining_insert_data['end_time'];
		$mining_amount = $mining_insert_data['mining_amount'];
		$duration_hours = $mining_insert_data['duration_hours'];
		
		mysqli_stmt_execute($mining_statement);
	}
	$logMessage .= "\nEnd insert mining log";
	$logMessage .= "\n" . $count . "mining log(s) inserted";
} else {
	$logMessage .= "\nNo mining log to insert";
}
$logMessage .= "\nEND CRON TIME:" . date('Y-m-d H:is');


#save log
$logFilePath = '/var/cron-log/update_mining_amount.log';

$logFile = fopen($logFilePath, 'a');

if ($logFile) {
	fwrite($logFile, $logMessage);
	fclose($logFile);
} else {
	echo 'Error opening or creating the log file.';
}

#end of function

?>
