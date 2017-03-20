<?php
require_once '../db/connect.php';

session_start();
if (isset($_SESSION['authenticated'])) {
    unset($_SESSION['authenticated']);
}

header('Location: index.php');