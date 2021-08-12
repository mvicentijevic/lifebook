<?php

require "core/init.php";

$post_id = $_GET['post_id'];

if (userVoteUp($post_id)) {
    header("Location: single_post.php?id=".$post_id);
} else {
    header("Location: error.php");
}

