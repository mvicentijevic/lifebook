<?php require "views/includes/head.php"; ?>
<?php require "views/includes/navbar.php"; ?>
<div class="container">
    <h1 class="display-4 text-center m-3 p-3">Login</h1>
    <div class="row">
        <div class="col-6 offset-3">
            <form action="login.php" method="POST">
                <input type="text" name="email" placeholder="email" class="form-control" value="<?php if (isset($email)) echo $email; ?>"><br>
                <?php if(isset($email_error)) : ?>
                    <p class="text-danger"><?php echo $email_error; ?></p>
                <?php endif; ?>
                <input type="password" name="password" placeholder="password" class="form-control"><br>
                <?php if(isset($password_error)) : ?>
                    <p class="text-danger"><?php echo $password_error; ?></p>
                <?php endif; ?>
                <?php if(isset($wrong_email_pass)) : ?>
                    <p class="text-danger"><?php echo $wrong_email_pass; ?></p>
                <?php endif; ?>
                <button class="btn btn-primary form-control">Login</button>
            </form>
        </div>
    </div>
</div>
<?php require "views/includes/bottom.php"; ?>
