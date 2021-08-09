<?php require "./views/includes/head.php"; ?>
<?php require "./views/includes/navbar.php"; ?>

    <div class="container">
        <div class="row">
            <h2 class="display-4 text-center">Edit post</h2>
            <div class="col-4">
                <?php include "./views/includes/sidebar.php"; ?>
            </div>
            <div class="col-8">
                <div class="row">
                    <div class="col-8">
                        <form action="user/edit_post.php?id=<?php echo $post['id']; ?>" method="POST" enctype="multipart/form-data">
                            <input type="text" name="title" value="<?php echo $post['title']; ?>" class="form-control"><br>
                            <?php if(isset($title_error)) : ?>
                                <p class="text-danger"><?php echo $title_error; ?></p>
                            <?php endif; ?>
                            <img src="uploads/<?php echo $post['image'] ?>" class="img-fluid">
                            <textarea name="body" class="form-control" cols="30" rows="10"><?php echo $post['body']; ?></textarea><br>
                            <?php if(isset($body_error)) : ?>
                                <p class="text-danger"><?php echo $body_error; ?></p>
                            <?php endif; ?>

                            <select name="category" class="form-control">
                                <?php foreach($categories as $cat) :?>
                                    <option value="<?php echo $cat['id']; ?>" <?php echo ($post['category_id'] == $cat['id']) ? 'selected' : '' ?>><?php echo $cat['name']; ?></option>
                                <?php endforeach; ?>
                            </select><br>
                            <select name="public" class="form-control">
                                <option value="1" <?php echo ($post['public'] == 1) ? 'selected' : '' ?>>Public</option>
                                <option value="0" <?php echo ($post['public'] == 0) ? 'selected' : '' ?>>Private</option>
                            </select><br>
                            <button type="submit" class="btn btn-info form-control">Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require "./views/includes/bottom.php"; ?>