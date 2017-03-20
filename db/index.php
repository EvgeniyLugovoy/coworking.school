<?php

require_once 'connect.php';

$sql = "SELECT * FROM products WHERE 1";

$result = mysqli_query($con, $sql);

if ($result) {
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $products[] = $row;
    }
} else {
    echo mysqli_error($con);
}

createTable($products);

function createTable($products) {
    echo '<table>';
    foreach ($products as $product) {
        $link = '<a href="';
        $link .= "delete.php?remove={$product['id']}";
        $link .= '">X</a>';
        echo '<tr>';
        foreach ($product as $key => $value) {
            echo '<td>';
            echo $value;
            echo '</td>';
        }
        echo "<td>{$link}</td>";
        echo '</tr>';
    }
    echo '</table>';
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="create.php" method="post">
    <input type="text" name="name" placeholder="name">
    <input type="text" name="price" placeholder="price">
    <input type="text" name="qty" placeholder="qty">
    <input type="text" name="category_id" placeholder="category">
    <input type="submit" value="Submit">
</form>
</body>
</html>

