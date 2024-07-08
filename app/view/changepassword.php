<?php
require __DIR__ . '/../config.php';
session_start();
$error_message = '';
$success_message = '';
if (isset($_POST['submit'])) {
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $repassword = password_hash($_POST['repassword'], PASSWORD_DEFAULT);
    //Kiểm tra password có trùng với password đã nhập không ?
    if ($_POST['password'] != $_POST['repassword']) {
        $error_message = "Passwords don't match !";
    } else {
        $_SESSION['otp_email'] = $email;
        $sql = "INSERT INTO users (password) VALUES ? WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $email, $name, $password);
        if ($stmt->execute()) {
            $success_message = "Đăng ký thành công, nhấn xác nhận qua trang đăng nhập";
        } else {
            $error_message = $stmt->error;
        }
        $stmt->close();
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
    <title>Chaneg Password</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/../PHP-Learn/public/style.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <section class="container forms">
        <div class="form signup">
            <div class="form-content">
                <header>Change Password</header>
                <form action="changepassword.php" method="post">
                    <div class="field input-field">
                        <input type="text" name="password" placeholder="Enter new password" class="input" required>
                    </div>

                    <div class="field input-field">
                        <input type="text" name="repassword" placeholder="Confirm password" class="input" required>
                    </div>

                    <?php
                    if (isset($error_message)) {
                        echo "<p style='color:red;'>$error_message</p>";
                    }
                    ?>

                    <div class="field button-field">
                        <button type="submit" name="submit">Submit</button>
                    </div>
                </form>
                <div class="form-link">
                    <span>Don't have an account? <a href='signup.php'>Signup</a></span>
                </div>
            </div>

        </div>
    </section>
    <!-- JavaScript -->
    <script src="js/script.js"></script>
</body>
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

</html>