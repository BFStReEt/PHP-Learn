<?php
session_start();
require __DIR__ . '/../config.php';
$error_message = '';

if (isset($_POST['submit'])) {
    $entered_otp = $_POST['otp'];
    $current_time = time();
    $otp_validity_duration = 300; // 5 phút = 300 giây

    if (isset($_SESSION['otp']) && isset($_SESSION['otp_time'])) {
        $otp = $_SESSION['otp'];
        $otp_time = $_SESSION['otp_time'];

        if (($current_time - $otp_time) <= $otp_validity_duration) {
            if ($entered_otp == $otp) {
                // Chuyển hướng đến trang đổi mật khẩu hoặc thực hiện hành động đổi mật khẩu
                header("location:changepassword.php");
            } else {
                $error_message = "Mã OTP không chính xác.";
            }
        } else {
            $error_message = "Mã OTP đã hết hạn. Vui lòng yêu cầu mã mới.";
            unset($_SESSION['otp']);
            unset($_SESSION['otp_time']);
        }
    } else {
        $error_message = "Vui lòng yêu cầu mã OTP.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP</title>

    <!-- CSS -->
    <link rel="stylesheet" href="./././style.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <section class="container forms">
        <div class="form signup">
            <div class="form-content">
                <header>Verify OTP</header>
                <form action="verifyOTP.php" method="post">
                    <div class="field input-field">
                        <input type="text" name="otp" placeholder="Enter OTP" class="input" required>
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
    <script src="/public/js/script.js"></script>
</body>

</html>