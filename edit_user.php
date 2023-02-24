<?php
session_start();
require_once('config/db_connect.inc.php');
require_once('config/constant.inc.php');
require_once('config/cookies.inc.php');

if (isset($_SESSION['user'])) {
    if (isset($_GET['idt']) && $_GET['idt'] != '') {
        $id = trim(htmlentities($_GET['idt']));
        if ((int) $id) {
            $result = mysqli_query($con, "select * from users where id = '$id'");
            if (mysqli_num_rows($result) > 0) {
                $user = mysqli_fetch_assoc($result);
            } else {
                $_SESSION['message'] = "User not Found";
                header('location:users.php');
            }
        }
    } else {
        header('location:users.php');
    }

    if (isset($_POST['update'])) {
        $name = trim(htmlentities($_POST['name']));
        $email = trim(htmlentities(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)));

        // image file handle
        if (!empty($_FILES['avatar']['name'])) {
            $avatar = $_FILES['avatar'];
            $avatar_name_arr = explode(".", $avatar['name']);
            $avatar_extension = strtolower(end($avatar_name_arr));
            $avatar_size = $avatar['size'];
            $allowed_extension = ["png", "jpg", "jpeg"];
        }

        $user_error = [];
        // name Error
        if (strlen($name) < 4 || strlen($name) > 30) {
            $user_error['name_error'] = "Name character must be greater then 4 and less then 30!";
        }

        // email error
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $user_error['email_error'] = "Required valid user email!";
        }

        // avatar error
        if (!empty($_FILES['avatar']['name'])) {
            if (!in_array($avatar_extension, $allowed_extension)) {
                $user_error['avatar_error'] = "Avatar extension type must be 'jpg' or 'jpeg' or 'png'!";
            } elseif ($avatar_size > 1000000) {
                $user_error['avatar_error'] = "Avatar file size must be less then 1 MB!";
            } else {
                // upload image
                $avatar_name = time() . "_" . uniqid() . "_" . $avatar['name'];
                // remove previous image
                unlink(USER_IMAGE_SERVER_PATH . $user['avatar']);
                // update new image
                $file_upload = move_uploaded_file($avatar['tmp_name'], USER_IMAGE_SERVER_PATH . $avatar_name);
                if ($file_upload) {
                    // insert data to the database
                    $user_query = "update users set name = '$name', email = '$email', avatar = '$avatar_name' where id = '$id'";
                    $result = mysqli_query($con, $user_query);
                    if ($result) {
                        // if successfully insert data
                        $_SESSION['message'] = "User update successfully!";
                        header('location:users.php');
                    } else {
                        $_SESSION['message'] = "Try sometimes later!";
                        mysqli_error($con);
                    }
                }
            }
        } else {
            $user_query = "update users set name = '$name', email = '$email' where id = '$id'";
            $result = mysqli_query($con, $user_query);
            if ($result) {
                // if successfully insert data
                $_SESSION['message'] = "User update successfully!";
                header('location:users.php');
            } else {
                $_SESSION['message'] = "Try sometimes later!";
                mysqli_error($con);
            }
        }
    }

    require_once('view/edit_user.view.php');
} else {
    header('location:login.php');
}
