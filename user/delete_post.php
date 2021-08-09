<?php
$title = "User delete";
require "../core/init.php";


if (!isLogged()) {
    header("Location: /lifebook/index.php");
}

$user = getUser($_SESSION['id']);
$posts = getAllPostsFromUser($user['id']);

$id = $_GET['id'];
if (deletePost($id)) {
    header("Location: all_posts.php");
} else {
    header("Location: /lifebook/error.php");
}

require "./views/home.view.php";