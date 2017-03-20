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
<form action="sender.php" method="POST" enctype="multipart/form-data">
    <input type="password" name="password">
    <input type="email" name="email">
    <input type="checkbox" name="remember">
    <input type="submit">
    <select name="countries" id="">
        <option value="UA">Ukraine</option>
        <option value="US">USA</option>
        <option value="GE">Nemciya</option>
    </select>
    <input type="file" name="files">
</form>
</body>
</html>