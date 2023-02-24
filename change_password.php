<?php
session_start();
require_once('config/db_connect.inc.php');
require_once('config/constant.inc.php');
require_once('config/cookies.inc.php');

if (isset($_SESSION['user'])) {
    if (isset($_POST['change_password'])) {
        $user_error = [];
        $current_password = htmlentities($_POST['current_password']);

        // password error
        if (empty($current_password)) {
            $user_error['current_password_error'] = "Required user password!";
        }

        if (password_verify($current_password, $_SESSION['user']['password'])) {
            if (empty($_POST['new_password'])) {
                $user_error['new_password_error'] = "Password required!";
            }
            if (empty($_POST['confirm_new_password'])) {
                $user_error['new_confirm_password_error'] = "Confirm password required!";
            }

            if ($_POST['new_password'] == $_POST['confirm_new_password']) {
                $new_password = htmlentities($_POST['new_password']);
                $hash_password = password_hash($new_password, PASSWORD_BCRYPT);

                $id = $_SESSION['user']['id'];
                $result = mysqli_query($con, "update users set password = '$hash_password' where id = '$id'");
                if ($result) {
                    $_SESSION['user']['password'] = $hash_password;
                    $_SESSION['message'] = "Password change successfully!";
                    header('location:profile.php');
                }
            } else {
                $user_error['new_password_error'] = "Password not matched!";
                $user_error['new_confirm_password_error'] = "Password not matched!";
            }
        } else {
            $user_error['current_password_error'] = "Need Currect password!";
        }
    }

    require_once('view/change_password.view.php');
} else {
    header('location:login.php');
}
