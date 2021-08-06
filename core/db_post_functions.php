<?php

function getCategories() {
    global $db;
    $sql = $db->prepare("SELECT * FROM categories");
    $sql->execute();

    if ($sql->errno == 0) {
        $result = $sql->get_result();
        $cat = $result->fetch_all(MYSQLI_ASSOC);
        return $cat;
    } else {
        header("Location: errors.php");
    }
}