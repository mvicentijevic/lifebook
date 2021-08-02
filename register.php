<?php

$title = "Register";
require "core/init.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $errors = [];
    if (!isset($_POST['first_name']) || empty($_POST['first_name'])) {
        $first_name_error = "First name is required";
        array_push($errors, $first_name_error);
    } else {
        $first_name = $_POST['first_name'];
    }
}

require "views/register.view.php";