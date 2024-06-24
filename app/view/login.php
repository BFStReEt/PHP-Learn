<?php
session_start();

require __DIR__ . '/../config.php';

if (isset($_SESSION['email'])) {
    header('Location: admin.php');
    exit();
}

$error_message = '';

if (isset($_POST['dangnhap'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Kiểm tra email và mật khẩu
    $sql = "SELECT email, password, name FROM users WHERE email = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($db_email, $db_password, $db_name);
            $stmt->fetch();
            if (password_verify($password, $db_password)) {
                $_SESSION['email'] = $db_email;
                $_SESSION['name'] = $db_name;
                header('Location: admin.php');
                exit();
            } else {
                $error_message = "Mật khẩu hoặc tài khoản không đúng!";
            }
        } else {
            $error_message = "Mật khẩu hoặc tài khoản không đúng!";
        }
        $stmt->close();
    } else {
        $error_message = "Lỗi kết nối cơ sở dữ liệu!";
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/public/css/style.css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <header>Login</header>
                <form action="login.php" method="post">
                    <div class="field input-field">
                        <input type="email" name="email" placeholder="Email" class="input" required
                            value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>">
                    </div>
                    <div class="field input-field">
                        <input type="password" name="password" placeholder="Password" class="password" required>
                        <i class='bx bx-hide eye-icon'></i>
                    </div>
                    <?php
                    if (!empty($error_message)) {
                        echo "<p style='color:red;'>$error_message</p>";
                    }
                    ?>
                    <div class="form-link">
                        <a href="forgot.php" class="forgot-pass">Forgot password?</a>
                    </div>
                    <div class="field button-field">
                        <button type="submit" name="dangnhap">Login</button>
                    </div>
                </form>
                <div class="form-link">
                    <span>Don't have an account? <a href='signup.php'>Signup</a></span>
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
    <script src="/public/js/script.js"></script>
</body>

</html>