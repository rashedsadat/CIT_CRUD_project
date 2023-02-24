<?php

if (!isset($_COOKIE['CRUD_CIT'])) {
    header('location:logout.php');
}

// generate random string to set cookie value
$bytes = random_bytes(20);
$cookie_value = bin2hex($bytes);

setcookie('CRUD_CIT', $cookie_value, time() + 10, '/');
