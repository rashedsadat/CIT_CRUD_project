<?php
session_start();
require_once('config/db_connect.inc.php');
require_once('config/constant.inc.php');
require_once('config/cookies.inc.php');

if (isset($_SESSION['user'])) {
    if (isset($_GET['vie']) && $_GET['vie'] != '') {
        $id = trim(htmlentities($_GET['vie']));
        if ((int) $id) {
            $result = mysqli_query($con, "select * from users where id = '$id'");
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
            } else {
                $_SESSION['message'] = "User not Found";
                header('location:users.php');
            }
        }
    } else {
        header('location:users.php');
    }

    require_once('view/single_user.view.php');
} else {
    header('location:login.php');
}
