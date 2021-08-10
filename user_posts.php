<?php
$title = "Lifebook";
require "core/init.php";



$all_public_posts = getAllPublicPostsFromUser($_GET['id']);



require "views/user_posts.view.php";