<?php

require_once 'connect.php';

if (isset($_GET['remove'])) {
    removeProduct($_GET['remove'], $con);
}

function removeProduct($id, $con) {
    $sql = "DELETE FROM products WHERE id = {$id}";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header("Location: index.php");
    } else {
        echo mysqli_error($con);
    }
};