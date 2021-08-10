<?php require "views/includes/head.php"; ?>
<?php require "views/includes/navbar.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <ul class="list-group">
                    <a href="index.php" class="list-group-item">Back</a>
                </ul>
            </div>
            <div class="col-8">

                <div class="card mb-3">
                    <div class="card-body">
                        <img src="uploads/<?php echo $post['image']; ?>"  class="img-fluid">
                        <span class="float-end p-2"><i class="far fa-clock"></i> <?php echo date("d.m.Y.",strtotime($post['created_at'])); ?></span>
                        <a href="user_posts.php?id=<?php echo $post['user_id'] ?>" class="btn btn-sm btn-warning m-2"><?php echo $post['first_name']. " ".$post['last_name'];?></a>
                        <h3 class="text-center"><?php echo $post['title']; ?></h3>
                        <p class="text-center"><?php echo $post['body']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require "views/includes/bottom.php"; ?>
