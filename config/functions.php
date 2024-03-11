<?php

session_start();

function signup($data)
{
    $errors = array();

    // Validate
    if (!preg_match('/^[a-zA-Z]+$/', $data['username'])) {
        $errors[] = "Please enter a valid username";
    }

    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email";
    }

    if (strlen(trim($data['password'])) < 4) {
        $errors[] = "Password must be at least 4 chars long";
    }

    if ($data['password'] != $data['password2']) {
        $errors[] = "Passwords must match";
    }

    // Check if email already exists
    $check = database_run("select * from users where email = :email limit 1", ['email' => $data['email']]);
    if (is_array($check)) {
        $errors[] = "That email already exists";
    }

    // Check if username already exists
    $checkUsername = database_run("select * from users where username = :username limit 1", ['username' => $data['username']]);
    if (is_array($checkUsername)) {
        $errors[] = "That username already exists";
    }

    // Save
    if (count($errors) == 0) {
        $arr['username'] = $data['username'];
        $arr['email'] = $data['email'];
        $arr['password'] = $data['password']; // No hashing for demonstration purposes
        $arr['date'] = date("Y-m-d H:i:s");

        $query = "insert into users (username, email, password, date) values (:username, :email, :password, :date)";

        database_run($query, $arr);
    }

    return $errors;
}

function login($data)
{
    $errors = array();

    // Validate
    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email";
    }

    if (strlen(trim($data['password'])) < 4) {
        $errors[] = "Password must be at least 4 chars long";
    }

    if (empty($data['email']) || empty($data['password'])) {
        $errors[] = "Please enter your details";
    }

    // Check
    if (count($errors) == 0) {
        $arr['email'] = $data['email'];

        $query = "select * from users where email = :email limit 1";

        $row = database_run($query, $arr);

        if (is_array($row)) {
            $row = $row[0];

            if ($data['password'] === $row->password) {
                $_SESSION['USER'] = $row;
                $_SESSION['LOGGED_IN'] = true;
            } else {
                $errors[] = "Wrong email or password";
            }
        } else {
            $errors[] = "Wrong email or password";
        }
    }

    return $errors;
}

function database_run($query, $vars = array())
{
    $string = "mysql:host=localhost;dbname=login";
    $con = new PDO($string, 'root', '');

    if (!$con) {
        return false;
    }

    $stm = $con->prepare($query);
    $check = $stm->execute($vars);

    if ($check) {

        $data = $stm->fetchAll(PDO::FETCH_OBJ);

        if (count($data) > 0) {
            return $data;
        }
    }

    return false;
}

// Inside your functions.php file
function check_login($con, $redirect = true)
{
    // Ensure $con is defined and accessible in this function
    if (!$con) {
        // Handle the case where $con is not defined (e.g., return an error or redirect)
        // For demonstration purposes, you can return false or handle it based on your logic.
        return false;
    }

    if (isset($_SESSION['USER']) && isset($_SESSION['LOGGED_IN'])) {
        return true;
    }

    if ($redirect) {
        header("Location: login.php");
        die;
    } else {
        return false;
    }
}


function check_verified()
{
    if (isset($_SESSION['USER']) && isset($_SESSION['USER']->user_id)) {
        $user_id = $_SESSION['USER']->user_id;
        $query = "SELECT * FROM users WHERE user_id = :user_id LIMIT 1";
        $vars = array('user_id' => $user_id);

        $row = database_run($query, $vars);

        if (is_array($row)) {
            $row = $row[0];

            // Check if email is verified
            if ($row->email == $row->email_verified) {
                return true;
            }
        }
    }

    return false;
}


