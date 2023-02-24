<?php
require_once('view/layouts/header.view.php');
?>

<section class="index_section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <?php
                if (isset($message_type)) {
                    if (!($message_type == '')) {
                ?>
                        <div class="alert <?= $message_type == 'error' ? "alert-danger" : "alert-success"; ?>">
                            <span><?= $message; ?></span>
                        </div>
                <?php
                    }
                }
                ?>
                <div class="index_card">
                    <div class="card" style="width:100%">
                        <div class="card-header">
                            <h2>User Registration</h2>
                        </div>
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name">User Name</label>
                                    <input type="text" name="name" id="name" class="form-control <?php echo (isset($user_error['name_error'])) ? "is-invalid" : "" ?>">
                                    <!-- name error -->
                                    <?php echo (isset($user_error['name_error'])) ? "<span class='text-danger'>" . $user_error['name_error'] . "</span>" : "" ?>
                                </div>
                                <div class="form-group">
                                    <label for="email">User Email</label>
                                    <input type="email" name="email" id="email" class="form-control <?php echo (isset($user_error['email_error'])) ? "is-invalid" : "" ?>">
                                    <!-- email error -->
                                    <?php echo (isset($user_error['email_error'])) ? "<span class='text-danger'>" . $user_error['email_error'] . "</span>" : "" ?>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control <?php echo (isset($user_error['password_error'])) ? "is-invalid" : "" ?>">
                                    <!-- password error -->
                                    <?php echo (isset($user_error['password_error'])) ? "<span class='text-danger'>" . $user_error['password_error'] . "</span>" : "" ?>
                                </div>
                                <div class="form-group">
                                    <label for="confirm_password">Confirm Password</label>
                                    <input type="password" name="confirm_password" id="confirm_password" class="form-control <?php echo (isset($user_error['confirm_password_error'])) ? "is-invalid" : "" ?>">
                                    <!-- confirm password error -->
                                    <?php echo (isset($user_error['confirm_password_error'])) ? "<span class='text-danger'>" . $user_error['confirm_password_error'] . "</span>" : "" ?>
                                </div>
                                <div class="form-group">
                                    <label for="avatar">User Image</label>
                                    <input type="file" name="avatar" id="avatar" class="form-control <?php echo (isset($user_error['avatar_error'])) ? "is-invalid" : "" ?>">
                                    <!-- avatar error -->
                                    <?php echo (isset($user_error['avatar_error'])) ? "<span class='text-danger'>" . $user_error['avatar_error'] . "</span>" : "" ?>
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" name="registration" class="btn btn-success">Confirm</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once('view/layouts/footer.view.php');
?>
