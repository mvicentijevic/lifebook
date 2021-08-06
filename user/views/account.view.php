<?php require "./views/includes/head.php"; ?>
<?php require "./views/includes/navbar.php"; ?>

    <div class="container">
        <div class="row">
            <h2 class="display-4 text-center"><?php echo $user['first_name'] ?> account</h2>
            <div class="col-4">
                <?php include "./views/includes/sidebar.php"; ?>
            </div>
            <div class="col-8">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item" style="text-transform: uppercase"><?php echo $user['title']; ?> <a href="user/change_title.php" class="btn btn-sm btn-warning float-end">CHANGE</a></li>
                    <li class="list-group-item"><?php echo $user['first_name']. " ".$user['last_name']; ?> </li>
                    <li class="list-group-item"><?php echo $user['email']; ?> <a href="user/change_email.php" class="btn btn-sm btn-warning float-end">CHANGE</a> </li>
                    <li class="list-group-item">Password <a href="" class="btn btn-sm btn-warning float-end">CHANGE</a> </li>
                    <li class="list-group-item">Created at <a href="" class="btn btn-sm btn-secondary float-end"><?php echo $user['created_at']; ?></a> </li>
                    <?php if ($user['updated_at']) : ?>
                        <li class="list-group-item">Updated at <a href="" class="btn btn-sm btn-secondary float-end"><?php echo $user['updated_at']; ?></a> </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>

<?php require "./views/includes/bottom.php"; ?>