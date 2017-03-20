<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
</head>
<body>
<form action="registration.php" method="post">
    <input type="text" name="login" placeholder="login">
    <input type="password" name="password" placeholder="******">
    <input type="submit" value="Submit">
</form>
</body>
</html>

<?php
require_once '../db/connect.php';

    if (!empty($_POST['login']) && !empty($_POST['password'])) {
        $login = $_POST['login'];
        $password = md5($_POST['password']);

        $sql = "INSERT INTO users(login, password) VALUE ('$login', '$password')";

        $result = mysqli_query($con, $sql);

        if (!$result) {
            die(mysqli_connect_error());
        } else {
            header("Location: login.php");
        }
    }


