<?php
/* HW 13 */
//2.
$data = $_POST;

function formValidate($data) {
    $firstName = $data['firstName'];
    $lastName = $data['lastName'];
    $email = $data['email'];
    $password = $data['password'];

    if (strlen($firstName) < 3 || strlen($firstName) > 24 || strlen($lastName) < 3 || strlen($lastName) > 24) {
        echo 'error' . '<br>';

        return false;
    }
    if (strlen($email) > 255) {
        echo 'error' . '<br>';

        return false;
    }
    if (strlen($password) < 6 || strlen($password) > 24) {
        echo 'error' . '<br>';

        return false;
    }

    return true;
}

if (formValidate($data) === true) {
    header( 'Location: /success.php', true, 303 );
}

//3.
$file = $_FILES['photo'];
$fileName = $file['name'];
$today = date('Y-m-d-H-i-s');
$folderName = 0;
for ($i = 0; $i < count($fileName); $i++) {
    $folderName += 1;
    $fileExt = explode('.', $fileName[$i]);
    $fileExt = array_pop($fileExt);
    echo '<br>';
    move_uploaded_file($file['tmp_name'][$i], "images/{$folderName}/" . "{$today}.{$fileExt}");
    // хотел, чтобы папки сами генерились, но не победил SELinux ;(
}