<?php
$title = "User home";
require "../core/init.php";

// nema pristupa ovoj stranici ako nismo u sesiji
// if (!isset($_SESSION['id'])) {
//     header("Location: /lifebook/index.php");
// }

if (!isLogged()) {
    header("Location: /lifebook/index.php");
}

$user = getUser($_SESSION['id']);

require "./views/home.view.php";