<?php
require "config.php";
session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];


    //Kiểm tra password có trùng với password đã nhập không ?
    if ($password != $repassword) {
        $error_message = "Passwords don't match !";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        //Kiểm tra email tồn tại hay chưa
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <section class="container forms">
        <div class="form signup">
            <div class="form-content">
                <header>Signup</header>
                <form action="register.php" method="post">
                    <div class="field input-field">
                        <input type="email" name="email" placeholder="Email" class="input" required>
                    </div>

                    <div class="field input-field">
                        <input type="text" name="name" placeholder="Name" class="input" required>
                    </div>

                    <div class="field input-field">
                        <input type="password" name="password" placeholder="Create password" class="password" required>
                    </div>

                    <div class="field input-field">
                        <input type="password" name="repassword" placeholder="Confirm password" class="password" required>
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="field button-field">
                        <button type="submit" name="submit">Signup</button>
                    </div>
                </form>

                <div class="form-link">
                    <span>Already have an account? <a href='index.php'>Login</a></span>
                </div>
            </div>

            <div class="line"></div>

            <div class="media-options">
                <a href="#" class="field facebook">
                    <i class='bx bxl-facebook facebook-icon'></i>
                    <span>Login with Facebook</span>
                </a>
            </div>

            <div class="media-options">
                <a href="#" class="field google">
                    <img src="images/google.png" alt="" class="google-img">
                    <span>Login with Google</span>
                </a>
            </div>
        </div>
    </section>
    <!-- JavaScript -->
    <script src="js/script.js"></script>
</body>

</html>