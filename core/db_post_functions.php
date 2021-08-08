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

function savePost($title, $body, $image, $user_id, $cat_id, $public) {
    global $db;
    $sql = $db->prepare("INSERT INTO posts (title, body, image, user_id, category_id, public)
                        VALUES (?, ?, ?, ?, ?, ?)");
    $sql->bind_param("sssiii", $title, $body, $image, $user_id, $cat_id, $public);
    $sql->execute();

    if ($sql->errno == 0) {
        return true;
    } else {
        return false;
    }
}

function getAllPostsFromUser($id) {
    global $db;
    $sql = $db->prepare("SELECT * FROM posts WHERE user_id=? ORDER BY created_at DESC");
    $sql->bind_param("i", $id);
    $sql->execute();

    if ($sql->errno == 0) {
        $result = $sql->get_result();
        $posts = $result->fetch_all(MYSQLI_ASSOC);

        return $posts;
    } else {
        return false;
    }
}