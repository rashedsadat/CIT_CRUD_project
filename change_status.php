<?php
session_start();
require_once('config/db_connect.inc.php');
require_once('config/constant.inc.php');
require_once('config/cookies.inc.php');

if (isset($_SESSION['user'])) {
    if (isset($_GET['status']) && $_GET['status'] != '') {
        $id = trim(htmlentities($_GET['status']));
        if ((int) $id) {
            $result = mysqli_query($con, "select status from users where id = '$id'");
            $user = mysqli_fetch_assoc($result);
            if ($user['status'] == 1) {
                $update_user = mysqli_query($con, "update users set status = 2 where id = '$id'");
                if ($update_user) {
                    $_SESSION['message'] = "Status update successfully";
                    header('location:users.php');
                }
            } elseif ($user['status'] == 2) {
                $update_user = mysqli_query($con, "update users set status = 1 where id = '$id'");
                if ($update_user) {
                    $_SESSION['message'] = "Status update successfully";
                    header('location:users.php');
                }
            }
        }
    } else {
        header('location:users.php');
    }
} else {
    header('location:login.php');
}
