<?php
$con = mysqli_connect('localhost', 'root', 'alraune12', 'test');

if (mysqli_connect_errno()) {
    echo 'Failed: ' . mysqli_connect_error();
    die;
}