<?php

require_once 'connect.php';

$values = $_POST;
$name = $_POST['name'];
$price = $_POST['price'];
$qty = $_POST['qty'];
$categoryId = $_POST['category_id'];
function validateVals($values, $con) {
    $price = +$values['price'];
    $qty = +$values['qty'];
    echo gettype($price);
    echo gettype($qty);
    foreach ($values as $value) {
        if ($value == '') {
            return false;
        }
    }
    if (strlen($values['name']) >= 100) {
        return false;
    }

    $price = (float)$values['price'];
    $qty = (int)$values['qty'];
    if ($values['price'] < 0 || $values['qty'] < 0 || !is_float($price) || !is_int($qty)) {
        return false;
    }
    $sql = "SELECT COUNT(id) FROM category";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $result = $row['COUNT(id)'];
    if ($values['category_id'] > $result) {
        return false;
    }

    return true;
}

$sql = "INSERT INTO products(name, price, count, category_id) VALUES ('$name', $price, $qty, $categoryId)";

$result = mysqli_query($con, $sql);

if (validateVals($values, $con) === true) {
    if (!$result) {
        echo mysqli_error($con);
    } else {
        header("Location: index.php");
    }
} else {
    echo 'Опаньки! Что-то пошло не так' . '<br><a href="index.php">Вернуться назад</a>';
}