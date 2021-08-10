<?php
$title = "Lifebook";
require "core/init.php";

$categories = getCategories();

$post = getSinglePost($_GET['id']);
// get likes 
// get comments


require "views/single_post.view.php";