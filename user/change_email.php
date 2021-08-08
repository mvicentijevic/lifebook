<?php

$title = "Change email";
require "../core/init.php";

if (!isLogged()) {
    header("Location: /lifebook/index.php");
}

$user = getUser($_SESSION['id']);
$posts = getAllPostsFromUser($user['id']);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $errors = [];
    if (!isset($_POST['email']) || empty($_POST['email'])) {
        $email_error = "Email is required";
        array_push($errors, $email_error);
    } else {
        $email = $_POST['email'];
    }

    if (count($errors) == 0) {
        if (change_email($email, $user['id'])) {
            header("Location: account.php");
        } else {
            $wrong = "Something went wrong";
        }
    }
}

require "./views/change_email.view.php";