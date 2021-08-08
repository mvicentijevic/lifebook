<?php

require "../core/init.php";

if (!isLogged()) {
    header("Location: /lifebook/index.php");
}

$user = getUser($_SESSION['id']);
$posts = getAllPostsFromUser($user['id']);

if (change_title($user)) {
    header("Location: account.php");
} else {
    header("Location: /lifebook/error.php");
}

require "./views/home.view.php";