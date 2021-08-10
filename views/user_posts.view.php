<?php require "views/includes/head.php"; ?>
<?php require "views/includes/navbar.php"; ?>
    <div class="container">
        <div class="row">
            <h1 class="display-4 text-center"><?php echo $all_public_posts[0]['first_name']. " ".$all_public_posts[0]['last_name'];?>'s posts</h1>
            <div class="col-4">
                <ul class="list-group">
                    <a href="index.php" class="list-group-item">Back</a>
                </ul>
            </div>
            <div class="col-8">
                <?php foreach($all_public_posts as $post) :?>
                    <div class="card mb-3">
                        <div class="card-body">
                            <img src="uploads/<?php echo $post['image']; ?>"  class="img-fluid">
                            <span class="float-end p-2"><i class="far fa-clock"></i> <?php echo date("d.m.Y.",strtotime($post['created_at'])); ?></span>
                            <a href="" class="btn btn-sm btn-warning m-2"><?php echo $post['first_name']. " ".$post['last_name'];?></a>
                            <h3 class="text-center"><?php echo $post['title']; ?></h3>
                            <p class="text-center"><?php echo substr($post['body'], 0, 200); ?>...</p>
                            <a href="single_post.php?id=<?php echo $post['id']; ?>" class="btn btn-info form-control">Read more</a>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php if (count($all_public_posts) == 0) : ?>
                    <h1 class="display-4">No posts in this category</h1>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php require "views/includes/bottom.php"; ?>
