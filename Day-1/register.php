<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $name = '';
    $nameerror = '';

    $email = '';
    $emailerror = '';

    $password = '';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($_POST['name'])){
            $nameerror = "Name doesn't empty";
        }

        if(empty($_POST['email'])){
            $emailerror = "Email doesn't empty";
        }
        if(empty($_POST['password'])){
            $password = "Password doesn't empty";
        }

    }
    ?>
    <form action="register.php" method="post">
        <p>Tên đăng nhập</p>
        <input type="text" name="name">
        <span class="error">
            <?php echo $nameerror; ?>
        </span>
        <p>Email</p>
        <input type="text" name="email">
        <span class="error">
            <?php echo $emailerror; ?>
        </span>
        <p>Mật khẩu</p>
        <input type="password" name="password">
        <span class="error">
            <?php echo $password; ?>
        </span>
        <br>
        <br>
        <input type="submit" value="Gửi">
    </form>

</body>

</html>