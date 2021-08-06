<?php require "./views/includes/head.php"; ?>
<?php require "./views/includes/navbar.php"; ?>

    <div class="container">
        <div class="row">
            <h2 class="display-4 text-center">Change your email</h2>
            <div class="col-4">
                <?php include "./views/includes/sidebar.php"; ?>
            </div>
            <div class="col-8">
                <form action="user/change_email.php" method="POST">
                    <input type="text" name="email" placeholder="new email" class="form-control"><br>
                    <?php if(isset($email_error)) : ?>
                        <p class="text-danger"><?php echo $email_error; ?></p>
                    <?php endif; ?>
                    <?php if(isset($wrong)) : ?>
                        <p class="text-danger"><?php echo $wrong; ?></p>
                    <?php endif; ?>
                    <button class="btn btn-primary">Change</button>
                </form>
            </div>
        </div>
    </div>

<?php require "./views/includes/bottom.php"; ?>