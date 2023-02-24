<?php
require_once('view/layouts/header.view.php');
?>

<section class="index_section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="index_card">
                    <div class="card" style="width:100%">
                        <div class="card-header">
                            <h2>Change Password</h2>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="current_password">Current Password</label>
                                    <input type="password" name="current_password" id="current_password" class="form-control <?php echo (isset($user_error['current_password_error'])) ? "is-invalid" : "" ?>">
                                    <!-- current password error -->
                                    <?php echo (isset($user_error['current_password_error'])) ? "<span class='text-danger'>" . $user_error['current_password_error'] . "</span>" : "" ?>
                                </div>
                                <div class="form-group">
                                    <label for="new_password">New Password</label>
                                    <input type="password" name="new_password" id="new_password" class="form-control <?php echo (isset($user_error['new_password_error'])) ? "is-invalid" : "" ?>">
                                    <!-- new password error -->
                                    <?php echo (isset($user_error['new_password_error'])) ? "<span class='text-danger'>" . $user_error['new_password_error'] . "</span>" : "" ?>
                                </div>
                                <div class="form-group">
                                    <label for="confirm_new_password">Confirm New Password</label>
                                    <input type="password" name="confirm_new_password" id="confirm_new_password" class="form-control <?php echo (isset($user_error['new_confirm_password_error'])) ? "is-invalid" : "" ?>">
                                    <!-- confirm new password error -->
                                    <?php echo (isset($user_error['new_confirm_password_error'])) ? "<span class='text-danger'>" . $user_error['new_confirm_password_error'] . "</span>" : "" ?>
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" name="change_password" class="btn btn-success">Update</button>
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
