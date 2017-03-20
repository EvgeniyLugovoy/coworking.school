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
    <?php
    $arr = [
            'Home',
            'Photo',
            'Video' => ['Item', 'Item', 'Item'],
            'About us',
            'Contacts' => ['Item', 'Item', 'Item']
    ];
    echo '<ul>';
    foreach ($arr as $key => $item) {
        if (is_array($item)) {
            echo '<li>' . $key;
            echo '<ul>';
                foreach ($item as $subitem) {
                    echo '<li><a href="#">' . $subitem . '</a></li>';
                }
            echo '</ul>';
            echo '</li>';
        } else {
            echo '<li><a href="#">' . $item . '</a></li>';
        }
        echo '</li>';
    }
    echo '</ul>';


    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            $table[$i][$j] = $rand = mt_rand(5, 100);
        }
    }
    echo '<table>';
    for ($i = 0; $i < count($table); $i++) {
        echo '<tr>';
        for ($j = 0; $j < count($table[$i]); $j++) {
            echo '<td>' . $table[$i][$j] . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';

    for ($i = 0; $i < 100; $i++) {
        $arr[mt_rand(3, 220)] = mt_rand(1, 100) . '<br>';
    }
    //sort($arr);
    ksort($arr);
    //print_r($arr);

    function factorial($n) {
        /*if ($n > 0) {
            $n *= factorial($n - 1);
        } else {
            $n = 1;
        }

        return $n;*/

        return $n > 0 ? $n * factorial($n - 1) : 1;
    }

    print_r(factorial(6));
    ?>
</body>
</html>