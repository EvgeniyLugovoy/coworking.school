<?php

session_start();
//unset($_SESSION['count']);

if (isset($_SESSION['authenticated'])) {
    $links = [
        'logout' => 'logout.php'
    ];
} else {
    $links = [
        'login' => 'login.php',
        'registration' => 'registration.php'
    ];
}