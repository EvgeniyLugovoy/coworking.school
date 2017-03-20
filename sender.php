<?php

/*$pass = $_POST['password'];
$email = $_POST['email'];

function validatePass($pass) {
    if (strlen($pass) > 6 || strlen($pass) < 24) {
        echo 'true' . '<br>';
    } else {
        echo 'false' . '<br>';
    }
}

function validateEmail($email) {
    if (strlen($email) < 255) {
        echo 'true' . '<br>';
    } else {
        echo 'false' . '<br>';
    }
}

validateEmail($pass);
validatePass($email);

print_r($_POST['countries']);*/

print_r($_FILES);

$file = $_FILES['files'];
$fileName = $file['name'];
$fileExt = explode('.', $fileName);
$fileExt = array_pop($fileExt);

move_uploaded_file($file['tmp_name'], "images/test.{$fileExt}");