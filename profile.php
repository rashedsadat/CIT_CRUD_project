<?php
session_start();
require_once('config/db_connect.inc.php');
require_once('config/constant.inc.php');
require_once('config/cookies.inc.php');

if (isset($_SESSION['user'])) {
    $row = $_SESSION['user'];

    require_once('view/profile.view.php');

    unset($_SESSION['message']);
} else {
    header('location:login.php');
}
