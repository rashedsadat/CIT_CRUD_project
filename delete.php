<?php
session_start();
require_once('config/db_connect.inc.php');
require_once('config/constant.inc.php');
require_once('config/cookies.inc.php');

if (isset($_SESSION['user'])) {
    if (isset($_GET['did']) && $_GET['did'] != '') {
        $id = trim(htmlentities($_GET['did']));
        if ((int) $id) {
            $result = mysqli_query($con, "select * from users where id = '$id'");
            if (mysqli_num_rows($result) > 0) {
                $user = mysqli_fetch_assoc($result);
                unlink(USER_IMAGE_SERVER_PATH . $user['avatar']);
                $delete_result = mysqli_query($con, "delete from users where id = '$id'");
                if ($delete_result) {
                    $_SESSION['message'] = "User delete successfully!";
                    header('location:users.php');
                } else {
                    $_SESSION['message'] = "Please try again sometimes later!";
                    header('location:users.php');
                }
            } else {
                $_SESSION['message'] = "User not Found";
                header('location:users.php');
            }
        }
    } else {
        header('location:users.php');
    }
} else {
    header('location:login.php');
}
