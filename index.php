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
                'maxSpeed' => '250'
            ],
        'audi' =>
            [
                'model' => 'a2',
                'year' => '2012',
                'color' => 'green',
                'maxSpeed' => '255'
            ],
        'chevrolet' =>
            [
                'model' => 'camaro',
                'year' => '2020',
                'color' => 'grey',
                'maxSpeed' => '210'
            ],
        'subaru' =>
            [
                'model' => 'impreza',
                'year' => '2015',
                'color' => 'bordo',
                'maxSpeed' => '270'
            ],
        'porsche' =>
            [
                'model' => 'panamera',
                'year' => '2017',
                'color' => 'dark blue',
                'maxSpeed' => '310'
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
    function getSomeElem($assocArr) {
        shuffle($assocArr);
        $length = count($assocArr);
        $assocArr = array_slice($assocArr, $length - 3);

        return $assocArr;
    }

    $assocArr = getSomeElem($cars);

    print_r($assocArr);
    echo '<hr>';

    //3.
    function factorial($n) {

        return $n == 0 ? 1 : $n * factorial($n - 1);
    }
    $res = factorial(5);
    echo $res . '<hr>';

    //4.
    $cars = [
        'bwm' =>
            [
                'model' => 'x5',
                'year' => '2010',
                'color' => 'red',
                'maxSpeed' => '250'
            ],
        'audi' =>
            [
                'model' => 'a2',
                'year' => '2012',
                'color' => 'green',
                'maxSpeed' => '255'
            ],
        'chevrolet' =>
            [
                'chevrolet' =>
                    [
                        'model' => 'camaro',
                        'year' => '2020',
                        'color' => 'grey',
                        'maxSpeed' => '210'
                    ],
                'chevrolet' =>
                    [
                        'model' => 'camaro',
                        'year' => '2020',
                        'color' => 'grey',
                        'chevrolet' =>
                            [
                                'model' => 'camaro',
                                'year' => '2020',
                                'color' => 'grey',
                                'maxSpeed' => '210'
                            ],
                        'chevrolet' =>
                            [
                                'model' => 'camaro',
                                'year' => '2020',
                                'color' => 'grey',
                                'maxSpeed' => '210'
                            ],
                        'chevrolet' =>
                            [
                                'model' => 'camaro',
                                'year' => '2020',
                                'color' => 'grey',
                                'maxSpeed' => '210'
                            ],
                        'chevrolet' =>
                            [
                                'model' => 'camaro',
                                'year' => '2020',
                                'color' => 'grey',
                                'maxSpeed' => '210'
                            ],
                    ],
                'year' => '2020',
                'color' => 'grey',
                'maxSpeed' => '210'
            ],
        'subaru' =>
            [
                'model' => 'impreza',
                'year' => '2015',
                'color' => 'bordo',
                'maxSpeed' => '270'
            ],
        'porsche' =>
            [
                'model' => 'panamera',
                'chevrolet' =>
                    [
                        'model' => 'camaro',
                        'year' => '2020',
                        'color' => 'grey',
                        'maxSpeed' => '210'
                    ],
                'chevrolet' =>
                    [
                        'model' => 'camaro',
                        'chevrolet' =>
                            [
                                'chevrolet' =>
                                    [
                                        'model' => 'camaro',
                                        'year' => '2020',
                                        'chevrolet' =>
                                            [
                                                'model' => 'camaro',
                                                'year' => '2020',
                                                'color' => 'grey',
                                                'maxSpeed' => '210'
                                            ],
                                        'maxSpeed' => '210'
                                    ],
                                'year' => '2020',
                                'color' => 'grey',
                                'maxSpeed' => '210'
                            ],
                        'chevrolet' =>
                            [
                                'model' => 'camaro',
                                'year' => '2020',
                                'color' => 'grey',
                                'maxSpeed' => '210'
                            ],
                        'color' => 'grey',
                        'maxSpeed' => '210'
                    ],
                'chevrolet' =>
                    [
                        'model' => 'camaro',
                        'year' => '2020',
                        'color' => 'grey',
                        'maxSpeed' => '210'
                    ],
                'color' => 'dark blue',
                'maxSpeed' => '310'
            ]
    ];
    echo '<ul>';
    function getArrElem($cars) {
        foreach ($cars as $key => $value) {
            if (is_array($value)) {
                echo '<li>' . $key . '<ul>';
                getArrElem($value);
                echo '</ul></li>';
            } else {
                echo '<li>' . $value . '</li>';
            }
        }
    }
    echo '</ul><br><hr>';

    print_r(getArrElem($cars));

    //5.
    echo '<p>';
    function recurFunc($n) {
        if ($n != 0) {
            echo $n - recurFunc($n - 1);
        }
    }

    echo recurFunc(5) . '</p>';
    /*HW 12*/
    //1.
    for ($i = 0; $i < 10; $i++) {
        $mainArr[] = '';
    }

    function getRandomLetters($arrLength) {
        $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        for ($i = 0; $i < $arrLength; $i++) {
            $arr[$i] = "";
            for ($j = 0; $j < mt_rand(1, strlen($letters) - 1); $j++) {
                $arr[$i] .= $letters[mt_rand(0, strlen($letters) - 1)];
            }
        }

        return $arr;
    }
    $mainArr = getRandomLetters(count($mainArr));
    print_r($mainArr);

    //2.
    function divideAndRule($arr) {
        /*$temp = '';

        for ($i = 0; $i < count($arr); $i++) {
            $temp .=$arr[$i] . '<span style="color:red">&&</span>';
        }*/

        return $result = implode('&&', $arr);
    }

    echo '<br>';
    print_r(divideAndRule($mainArr));

    //3.
    function getStrlen($str) {
        return strlen($str);
    }

    echo '<br>' . getStrlen('Returns a string containing a string representation of all the array elements in the same order, with the glue string between each element.');

    //4.
    function linkageFunc($arrLength) {
        $arr = getRandomLetters($arrLength);
        echo '<br>';
        print_r($arr);
        $str = divideAndRule($arr);
        echo '<br>';
        echo $str;
        $strlen = getStrlen($str);
        echo '<br>';
        echo $strlen;
    }

    linkageFunc(count($mainArr));

    //5.
    function getLastWord($str) {
        return strrchr($str, ' ');
    }

    echo '<br>' . getLastWord('Once upon a time I travelled with Gendlaf');

    //6.
    function getArr($str) {
        $arr = explode(' ', $str);
        foreach ($arr as &$value) {
            if ($value != end($arr)) {
                $value .= '+';
            }
        }
        $arr = implode($arr);

        return $arr;
    }

    echo '<br>' . getArr('Once upon a time I travelled with Gendlaf');

?>

<form action="register.php" method="post" enctype="multipart/form-data">
    <input type="text" name="firstName" placeholder="firstName">
    <input type="text" name="lastName" placeholder="lastName">
    <input type="text" name="email" placeholder="email">
    <input type="password" name="password" placeholder="password">
    <select name="country" id="">
        <option value="AU">Australia </option>
        <option value="JP">Japan</option>
        <option value="SP">Spain</option>
        <option value="UA">Ukraine</option>
    </select>
    <input type="radio" name="gender" value="male">male
    <input type="radio" name="gender" value="female">female
    <input type="submit" value="Submit">
    <input type="file" name="photo[]">
    <input type="file" name="photo[]">
    <input type="file" name="photo[]">
</form>
</body>
</html>