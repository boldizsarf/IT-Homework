<?php
error_reporting(-1);
ini_set('display_errors', 'On');
session_start();

$users = simplexml_load_file("../db/users.db");

$username = $_POST['username'];
$passwd = $_POST['passwd'];

$i = intval(null);

foreach ($users->user as $user) {
    if ($username == $user->username) {
        $i++;
        if (password_verify($passwd, $user->password)) {
            $_SESSION['username'] = $username;
            header("Location: /admin");
            exit();
        } else {
            header("Location: /admin/1");
            exit();
        }
    }
}

if ($i < 1 ) {
    header("Location: /admin/2");
    exit();
}