<?php
require __DIR__ . '/../config.php';
session_start();

$page_layout = isset($_GET['page_layout']) ? $_GET['page_layout'] : 'login';
switch ($page_layout) {
    case 'login':
        require __DIR__ . 'app/view/login.php';
        break;

    case 'signup':
        require __DIR__ . 'app/view/signup.php';
        break;
    case 'forgot':
        require __DIR__ . 'app/view/forgot.php';
        break;
    case 'changepassword':
        require __DIR__ . 'app/view/changepassword.php'
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example</title>
    <link rel="stylesheet" href="/../PHP-Learn/public/style.css">

</head>

<body>
    <ul>
        <li><a href="index.php?page_layout=login">Login</a></li>
        <li><a href="index.php?page_layout=signup">Singup</a></li>
        <li><a href="index.php?page_layout=forgot">Forgot Password</a></li>
        <li><a href="index.php?page_layout=changepassword">Change Password</a></li>
    </ul>
</body>

</html>