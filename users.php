<?php
session_start();
require_once('config/db_connect.inc.php');
require_once('config/constant.inc.php');
require_once('config/cookies.inc.php');

if (isset($_SESSION['user'])) {
    $num_per_page = 5;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }

    $start_from = ($page - 1) * 5;
    $result = mysqli_query($con, "select * from users order by id desc limit $start_from, $num_per_page");

    require_once('view/users.view.php');

    unset($_SESSION['message']);
} else {
    header('location:login.php');
}
