<?php require "./views/includes/head.php"; ?>
<?php require "./views/includes/navbar.php"; ?>

    <div class="container">
        <div class="row">
            <h2 class="display-4 text-center">Change your password</h2>
            <div class="col-4">
                <?php include "./views/includes/sidebar.php"; ?>
            </div>
            <div class="col-8">
                <form action="user/change_password.php" method="POST">
                    <input type="password" name="password" placeholder="old password" class="form-control"><br>
                    <?php if(isset($password_error)) : ?>
                        <p class="text-danger"><?php echo $password_error; ?></p>
                    <?php endif; ?>
                    <input type="password" name="new_password" placeholder="new password" class="form-control"><br>
                    <?php if(isset($new_password_error)) : ?>
                        <p class="text-danger"><?php echo $new_password_error; ?></p>
                    <?php endif; ?>
                    <input type="password" name="new_password_repeat" placeholder="new password repeat" class="form-control"><br>
                    <?php if(isset($new_password_repeat_error)) : ?>
                        <p class="text-danger"><?php echo $new_password_repeat_error; ?></p>
                    <?php endif; ?>
                    <?php if(isset($password_not_match)) : ?>
                        <p class="text-danger"><?php echo $password_not_match; ?></p>
                    <?php endif; ?>
                    <?php if(isset($success)) : ?>
                        <p class="text-success"><?php echo $success; ?></p>
                    <?php endif; ?>
                    <button class="btn btn-primary">Change</button>
                </form>
            </div>
        </div>
    </div>

<?php require "./views/includes/bottom.php"; ?>