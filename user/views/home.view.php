<?php require "./views/includes/head.php"; ?>
<?php require "./views/includes/navbar.php"; ?>
<?php if(isset($_GET['success'])) :?>
    <div id="success-id" class="bg-success text-center">
        <p>Login success</p>
    </div>
    <?php endif; ?>


    <script>
        let successMessage = document.querySelector('#success-id');
        if (successMessage) {
            setTimeout(() => {
                successMessage.style.display = "none";
            }, 5000)
        }
    </script>
<?php require "./views/includes/bottom.php"; ?>