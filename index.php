<?php
$title = "Lifebook";
require "core/init.php";

$categories = getCategories();
$all_public_posts = getAllPublicPosts();

require "views/index.view.php";