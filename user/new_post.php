<?php
$title = "New post";
require "../core/init.php";

if (!isLogged()) {
    header("Location: /lifebook/index.php");
}

$user = getUser($_SESSION['id']);

$categories = getCategories();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $errors = [];
    // dd($_FILES);
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
    if (!isset($_FILES['file']['name']) || empty($_FILES['file']['name'])) {
        $image_error = "Image is required";
        array_push($errors, $image_error);
    }

    if (count($errors) == 0) {
        // first get image name 
        $name = $_FILES['file']['name'];
        // define document image foleder
        $target_dir = $_SERVER['DOCUMENT_ROOT']."/lifebook/uploads/";
        // define unique image name 
        $target_name = time().$name;
        // define full path
        $target_file = $target_dir.$target_name;

        // todo everything
        // get image extension
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // define extensions
        $extensions_arr = ["png", "gif", "jpg", "jpeg"];
        if (in_array($imageFileType, $extensions_arr)) {
            if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
                // save post to database
                if (savePost($title, $body, $target_name, $user['id'], $_POST['category'], $_POST['public'])) {
                    dd("Post saved");
                } else {
                    $ups = "Ups, something went wrong";
                }
            } else {
                $ups = "Ups, something went wrong";
            }
        } else {
            $not_valid_type = "Image is not valid type";
        }


        

    }
}

require "./views/new_post.view.php";