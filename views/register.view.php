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
                <input type="text" name="first_name" placeholder="first name" class="form-control"><br>
                <input type="text" name="last_name" placeholder="last name" class="form-control"><br>
                <input type="text" name="email" placeholder="email" class="form-control"><br>
                <input type="password" name="password" placeholder="password" class="form-control"><br>
                <input type="password" name="password_repeat" placeholder="password again" class="form-control"><br>
                <button class="btn btn-primary form-control">Register</button>
            </form>
        </div>
    </div>
</div>
<?php require "views/includes/head.php"; ?>
