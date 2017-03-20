<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<form action="login.php" method="post">
    <input type="text" name="login" placeholder="login">
    <input type="password" name="password" placeholder="******">
    <input type="submit" value="Submit">
</form>
</body>
</html>

<?php
require_once '../db/connect.php';

$user = $_POST;

if (!empty($user['login']) && !empty($user['password'])) {
    $login = $user['login'];
    $password = md5($user['password']);

    $sql = "SELECT DISTINCT * FROM users WHERE login = '$login'";

    $result = mysqli_query($con, $sql);
    if ($result) {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if (mysqli_num_rows($result) == 0) {
            echo 'User not found ';
        }
        if ($row['password'] != $password) {
            echo 'Password doesn\'t match!';
        } else {
            session_start();
            $_SESSION['authenticated'] = true;
            header('Location: index.php');
        }
    }
}