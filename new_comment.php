<?php

require "core/init.php";

$post_id = $_POST['post_id'];
$body = $_POST['body'];

if (userComment($post_id, $body)) {
    header("Location: single_post.php?id=".$post_id);
} else {
    header("Location: error.php");
}

