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
                            <h2>All Users</h2>
                            <?php
                            if (isset($_SESSION['message'])) {
                            ?>
                                <div class="alert alert-success">
                                    <span><?= $_SESSION['message'] ?></span>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Sr.</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Joined</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sr = 1;
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) { ?>
                                            <tr>
                                                <td style="width: 5%;"><?= $sr++ ?></td>
                                                <td style="width: 10%;">
                                                    <img src="<?= USER_IMAGE_SITE_PATH . $row['avatar'] ?>" alt="" width="50">
                                                </td>
                                                <td style="width: 20%;"><?= $row['name'] ?></td>
                                                <td style="width: 20%;"><?= $row['email'] ?></td>
                                                <td style="width: 10%;">
                                                    <span class="badge <?= ($row['status'] == 1) ? "bg-success" : " bg-dark" ?>">
                                                        <?= ($row['status'] == 1) ? "Active" : "Deactive" ?>
                                                    </span>
                                                </td>
                                                <td><?= $row['created_at'] ?></td>
                                                <td>
                                                    <!-- view -->
                                                    <a href="single_user.php?vie=<?= $row['id'] ?>" class="btn btn-info">View</a>
                                                    <!-- edit -->
                                                    <a href="edit_user.php?idt=<?= $row['id'] ?>" class="btn btn-warning">Edit</a>
                                                    <!-- delete -->
                                                    <a href="delete.php?did=<?= $row['id'] ?>" class="btn btn-danger">Delete</a>
                                                    <!-- status -->
                                                    <a href="change_status.php?status=<?= $row['id'] ?>" class="btn <?= ($row['status'] == 1) ? "btn-dark" : " btn-success" ?>">
                                                        <?= ($row['status'] == 1) ? "Deactive" : "Active" ?>
                                                    </a>
                                                </td>
                                            </tr>
                                    <?php }
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <?php
                            $sql_result = mysqli_query($con, "select * from users");
                            $total_record = mysqli_num_rows($sql_result);
                            $total_page = ceil($total_record / $num_per_page);
                            $pre_page = $page - 1;
                            $next_page = $page + 1;
                            ?>
                            <nav aria-label="...">
                                <ul class="pagination">
                                    <!-- previous button -->
                                    <li class="page-item">
                                        <a class="page-link <?= ($pre_page == 0) ? 'disabled' : ''; ?>" href="users.php?page=<?= $pre_page ?>" tabindex="-1" aria-disabled="true">Previous</a>
                                    </li>

                                    <!-- current page -->
                                    <li class="page-item"><a class="page-link" href="users.php?page=<?= $page ?>"><?= $page; ?></a></li>

                                    <!-- next button -->
                                    <li class="page-item">
                                        <a class="page-link <?= ($next_page >  $total_page) ? 'disabled' : ''; ?>" href="users.php?page=<?= $next_page ?>">Next</a>
                                    </li>
                                </ul>
                            </nav>
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
