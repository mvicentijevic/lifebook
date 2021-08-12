<?php
$title = "Lifebook";
require "core/init.php";

$categories = getCategories();

$post = getSinglePost($_GET['id']);
// get likes 
$likes = getLikes($_GET['id']);
// get comments
$comments = getPostComments($_GET['id']);

require "views/single_post.view.php";