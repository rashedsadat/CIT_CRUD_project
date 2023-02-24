<?php
require_once('view/layouts/header.view.php');
?>

<section class="index_section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <?php
                if (isset($_SESSION['message_type']) && isset($_SESSION['message'])) {
                ?>
                    <div class="alert <?= $_SESSION['message_type'] == "success" ? "alert-success" : "alert-danger"; ?>">
                        <span><?= $_SESSION['message'] ?></span>
                    </div>
                <?php
                }
                ?>
                <div class="index_card">
                    <div class="card" style="width:100%">
                        <div class="card-header">
                            <h2>User Login</h2>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
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
                                <div class="form-group mt-3">
                                    <button type="submit" name="login" class="btn btn-success">Login</button>
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
