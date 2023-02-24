<?php
session_start();
require_once('config/db_connect.inc.php');
require_once('config/constant.inc.php');

if (isset($_SESSION['user'])) {
    header('location:users.php');
}

require_once('view/index.view.php');
