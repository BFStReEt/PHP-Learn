<?php
require __DIR__ . '/../config.php';
session_start();
$error_message = '';
$success_message = '';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $repassword = password_hash($_POST['repassword'], PASSWORD_DEFAULT);

    //Kiểm tra password có trùng với password đã nhập không ?
    if ($_POST['password'] != $_POST['repassword']) {
        $error_message = "Passwords don't match !";
    } else {
        //Kiểm tra email tồn tại hay chưa
        $sql_check = "SELECT COUNT(*) FROM users WHERE email = ?";
        if ($stmt_check = $conn->prepare($sql_check)) {
            $stmt_check->bind_param("s", $email);
            $stmt_check->execute();
            $stmt_check->bind_result($count);
            $stmt_check->fetch();
            $stmt_check->close();

            if ($count > 0) {
                $error_message = "Tài khoản đã có người dùng";
            } else {
                $sql = "INSERT INTO users (email, name, password) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sss", $email, $name, $password);
                if ($stmt->execute()) {
                    $success_message = "Đăng ký thành công, nhấn xác nhận qua trang đăng nhập";
                } else {
                    $error_message = $stmt->error;
                }

                $stmt->close();
            }
        } else {
            $error_message = $conn->error;
        }
        $conn->close();
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
    <link rel="stylesheet" href="/../PHP-Learn/public/style.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <section class="container forms">
        <div class="form signup">
            <div class="form-content">
                <header>Signup</header>
                <form action="signup.php" method="post">
                    <div class="field input-field">
                        <input type="email" name="email" placeholder="Email" class="input" required value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>">
                    </div>
                    <div class="field input-field">
                        <input type="text" name="name" placeholder="Name" class="input" required value="<?php echo isset($name) ? htmlspecialchars($name) : ''; ?>">
                    </div>
                    <div class="field input-field">
                        <input type="password" name="password" placeholder="Create password" class="password" required>
                    </div>
                    <div class="field input-field">
                        <input type="password" name="repassword" placeholder="Confirm password" class="password" required>
                        <i class='bx bx-hide eye-icon'></i>
                    </div>
                    <?php
                    if (isset($error_message)) {
                        echo "<p style='color:red;'>$error_message</p>";
                    }
                    ?>
                    <div class="field button-field">
                        <button type="submit" name="submit">Signup</button>
                    </div>
                </form>
                <div class="form-link">
                    <span>Already have an account? <a href='login.php'>Login</a></span>
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
    <!-- JavaScript phần thông báo đăng ký thành công -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            <?php if (!empty($success_message)) : ?>
                var confirmed = confirm("Đăng ký thành công, nhấn oke để chuyển đến trang đăng nhập");
                if (confirmed) {
                    window.location.href = "login.php";
                }
            <?php endif; ?>
        });
    </script>

    <!-- JavaScript -->
    <script src="/../PHP-Learn/public/js/script.js"></script>
</body>

</html>