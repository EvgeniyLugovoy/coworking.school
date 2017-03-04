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

    //1.
    $sum = 0;

    for ($i = 0; $i <= 100; $i++) {
        $arr[$i] = $i + 1;
        $sum = $sum + $arr[$i];
    }

    echo $sum . '<br>';

    $sum = array_sum($arr);
    $length = count($arr);

    echo $sum / $length . '<hr>';

    //2.
    function squareNum($n) {
        return $n * $n;
    }

    $result = squareNum(5);
    echo $result . '<hr>';

    //3.
    function joinVal($first, $second) {
        $arr = [
            'from' => [$first, $second],
            'result' => $first . $second,
            'length' => ''
        ];
        $arr['length'] = count($arr['length']);

        return $arr;
    }

    $arr = joinVal('pen', 'apple');
    print_r($arr);
    echo '<hr>';

    //4.
    $result = '';
    $arr = ['a', 'b', 'c', 'd', 'e', 'f', 'g'];

    for ($i = 0; $i < count($arr); $i++) {
        if (($i + 1) % 2 == 0) {
            $result .= $arr[$i];
        }
    }

    echo $result . '<hr>';

    //5.
    $cars = [
        'bwm' =>
            [
                'model' => 'x5',
                'year' => '2010',
                'color' => 'red',
                'maxSpeed' => '250',
            ],
        'audi' =>
            [
                'model' => 'a2',
                'year' => '2012',
                'color' => 'green',
                'maxSpeed' => '255',
            ],
        'chevrolet' =>
            [
                'model' => 'camaro',
                'year' => '2020',
                'color' => 'grey',
                'maxSpeed' => '210',
            ],
        'subaru' =>
            [
                'model' => 'impreza',
                'year' => '2015',
                'color' => 'bordo',
                'maxSpeed' => '270',
            ],
        'porsche' =>
            [
                'model' => 'panamera',
                'year' => '2017',
                'color' => 'dark blue',
                'maxSpeed' => '310',
            ]
    ];

    echo '<ul>';
    foreach ($cars as $key => $carMake) {
        echo '<li>' . $key . ' ' . $carMake['model'] . ' - ' . $carMake['year'];
    }
    echo '</ul><hr>';


    /*
     * HomeWork 11
     */
    echo '<br><hr>';
    //1.
    function arrShuffle($length) {
        for ($i = 0; $i < $length; $i++) {
            $arr[$i] = mt_rand(1, 100);
        }

        return $arr;
    }

    $arr = arrShuffle(10);
    print_r($arr);
    echo '<hr>';

    //2.
    function returnSomeElem($assocArr) {
        $key = array_keys($assocArr);
        shuffle($key);
        $assocArr = array_combine($key, $assocArr);
        $length = count($assocArr);
        $assocArr = array_slice($assocArr, $length - 3);

        return $assocArr;
    }

    $assocArr = returnSomeElem($cars);

    print_r($assocArr);
    echo '<hr>';

    //3.
function factorial($n) {

    return $n == 0 ? 1 : $n * factorial($n - 1);
}
$res = factorial(5);
echo $res;

    //4.

?>
</body>
</html>