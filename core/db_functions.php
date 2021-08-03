<?php

function register_user($title, $first_name, $last_name, $email, $password) 
{
    global $db;
    $role = 'user';
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = $db->prepare("INSERT INTO users (title, first_name, last_name, email, password, role)
                                    VALUES (?, ?, ?, ?, ?, ?)");
    $sql->bind_param("ssssss", $title, $first_name, $last_name, $email, $password_hash, $role);
    $sql->execute();

    // dd($sql);
    if ($sql->errno == 0){
        $_SESSION['id'] = $sql->insert_id;
        header("Location: user/home.php");
    } else {
        header("Location: error.php");
    }
}

function isLogged() 
{
    if (isset($_SESSION['id'])) {
        return true;
    } else {
        return false;
    }
}