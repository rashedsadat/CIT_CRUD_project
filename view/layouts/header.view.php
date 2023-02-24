<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIT User</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="z-index: 1;">
        <div class="container">
            <a class="navbar-brand" href="index.php">CIT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <?php
                    if (isset($_SESSION['user'])) { ?>
                        <li class="nav-item ">
                            <div class="dropdown">
                                <h6 class="nav-link" style="color:aliceblue;"><?= $_SESSION['user']['name'] ?></h6>
                                <button class=" dropdown-toggle navbar_dropdown" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="<?php echo USER_IMAGE_SITE_PATH . $_SESSION['user']['avatar'] ?>" alt="">
                                </button>
                                <ul class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton1">
                                    <li>
                                        <a class="dropdown-item navbar_dropdown_menu" href="profile.php">Profile</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item navbar_dropdown_menu" href="logout.php">Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    <?php }
                    if (!isset($_SESSION['user'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registration.php">Registration</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
