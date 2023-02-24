<?php
require_once('view/layouts/header.view.php');
?>

<section class="index_section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="index_card">
                    <div class="card" style="width:100%">
                        <div class="card-header">
                            <h4><?= $row['name'] ?></h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td style="width: 15%;">Image</td>
                                        <td style="width: 5%;">:</td>
                                        <td>
                                            <img src="<?= USER_IMAGE_SITE_PATH . $row['avatar'] ?>" width="100" alt="">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 15%;">Name</td>
                                        <td style="width: 5%;">:</td>
                                        <td><?= $row['name'] ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 15%;">Email</td>
                                        <td style="width: 5%;">:</td>
                                        <td><?= $row['email'] ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 15%;">Status</td>
                                        <td style="width: 5%;">:</td>
                                        <td>
                                            <span class="badge <?= ($row['status'] == 1) ? "bg-success" : " bg-dark" ?>">
                                                <?= ($row['status'] == 1) ? "Active" : "Deactive" ?>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 15%;">Joined Date</td>
                                        <td style="width: 5%;">:</td>
                                        <td><?= $row['created_at'] ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <a href="users.php" class="btn btn-primary">Back</a>
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
