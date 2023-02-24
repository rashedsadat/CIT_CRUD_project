<?php
session_start();
require_once('config/db_connect.inc.php');
require_once('config/constant.inc.php');

if (isset($_SESSION['user'])) {
    header('location:users.php');
}

if (isset($_POST['login'])) {
    $email = trim(htmlentities($_POST['email']));
    $password = htmlentities($_POST['password']);

    $user_error = array();
    // email error
    if (empty($email)) {
        $user_error['email_error'] = "Required email";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $user_error['email_error'] = "Required valid email";
    }

    // password error
    if (empty($password)) {
        $user_error['password_error'] = "Required user password!";
    }

    $result = mysqli_query($con, "select * from users where email = '$email'");
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user;

            // generate random string to set cookie value
            $bytes = random_bytes(20);
            $cookie_value = bin2hex($bytes);
            setcookie('CRUD_CIT', $cookie_value, time() + 10, '/');

            header('location: users.php');
        } else {
            $user_error['password_error'] = "Password not matched!";
        }
    } else {
        $user_error['email_error'] = "Email not found";
    }
}

require_once('view/login.view.php');

unset($_SESSION['message_type']);
unset($_SESSION['message']);
