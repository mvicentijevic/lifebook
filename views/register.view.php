<?php require "views/includes/head.php"; ?>
<?php require "views/includes/navbar.php"; ?>
<div class="container">
    <h1 class="display-4 text-center m-3 p-3">Register</h1>
    <div class="row">
        <div class="col-6 offset-3">
            <form action="register.php" method="POST">
                <select name="title" class="form-control">
                    <option value="mr">Mr</option>
                    <option value="ms">Ms</option>
                </select><br>
                <input type="text" name="first_name" placeholder="first name" class="form-control" value="<?php if (isset($first_name)) echo $first_name; ?>"><br>
                <?php if(isset($first_name_error)) : ?>
                    <p class="text-danger"><?php echo $first_name_error; ?></p>
                <?php endif; ?>
                <input type="text" name="last_name" placeholder="last name" class="form-control" value="<?php if (isset($last_name)) echo $last_name; ?>"><br>
                <?php if(isset($last_name_error)) : ?>
                    <p class="text-danger"><?php echo $last_name_error; ?></p>
                <?php endif; ?>
                <input type="text" name="email" placeholder="email" class="form-control" value="<?php if (isset($email)) echo $email; ?>"><br>
                <?php if(isset($email_error)) : ?>
                    <p class="text-danger"><?php echo $email_error; ?></p>
                <?php endif; ?>
                <input type="password" name="password" placeholder="password" class="form-control"><br>
                <?php if(isset($password_error)) : ?>
                    <p class="text-danger"><?php echo $password_error; ?></p>
                <?php endif; ?>
                <input type="password" name="password_repeat" placeholder="password again" class="form-control"><br>
                <?php if(isset($password_repeat_error)) : ?>
                    <p class="text-danger"><?php echo $password_repeat_error; ?></p>
                <?php endif; ?>
                <button class="btn btn-primary form-control">Register</button>
            </form>
        </div>
    </div>
</div>
<?php require "views/includes/head.php"; ?>
