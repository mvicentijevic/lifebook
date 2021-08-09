<?php
$title = "User delete";
require "../core/init.php";


if (!isLogged()) {
    header("Location: /lifebook/index.php");
}

$user = getUser($_SESSION['id']);
$categories = getCategories();
$posts = getAllPostsFromUser($user['id']);
$id = $_GET['id'];
$post = getSinglePost($id);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $errors = [];

    if (!isset($_POST['title']) || empty($_POST['title'])) {
        $title_error = "Title is required";
        array_push($errors, $title_error);
    } else {
        $title = $_POST['title'];
    }
    if (!isset($_POST['body']) || empty($_POST['body'])) {
        $body_error = "Body is required";
        array_push($errors, $body_error);
    } else {
        $body = $_POST['body'];
    }

    if (count($errors) == 0) {
        if (editPost($title, $body, $_POST['category'], $_POST['public'], $user['id'], $id)) {
            header("Location: all_posts.php");
        } else {
            header("Location: /lifebook/error.php");
        }
    }
}

require "./views/edit_post.view.php";