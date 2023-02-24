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
                            <h2>Edit User</h2>
                        </div>
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name">User Name</label>
                                    <input type="text" name="name" value="<?= $user['name'] ?>" id="name" class="form-control <?php echo (isset($user_error['name_error'])) ? "is-invalid" : "" ?>">
                                    <!-- name error -->
                                    <?php echo (isset($user_error['name_error'])) ? "<span class='text-danger'>" . $user_error['name_error'] . "</span>" : "" ?>
                                </div>
                                <div class="form-group">
                                    <label for="email">User Email</label>
                                    <input type="email" name="email" value="<?= $user['email'] ?>" id="email" class="form-control <?php echo (isset($user_error['email_error'])) ? "is-invalid" : "" ?>">
                                    <!-- email error -->
                                    <?php echo (isset($user_error['email_error'])) ? "<span class='text-danger'>" . $user_error['email_error'] . "</span>" : "" ?>
                                </div>
                                <div class="form-group">
                                    <label for="avatar">User Image</label>
                                    <input type="file" name="avatar" id="avatar" class="form-control <?php echo (isset($user_error['avatar_error'])) ? "is-invalid" : "" ?>">
                                    <!-- avatar error -->
                                    <?php echo (isset($user_error['avatar_error'])) ? "<span class='text-danger'>" . $user_error['avatar_error'] . "</span>" : "" ?>
                                    <?php
                                    if ($user['avatar']) { ?>
                                        <br>
                                        <img src="<?= USER_IMAGE_SITE_PATH . $user['avatar'] ?>" width="100" alt="">
                                    <?php } ?>
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" name="update" class="btn btn-success">Update</button>
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
