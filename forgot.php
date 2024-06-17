<?php
session_start();
require 'config.php';
$error_message = '';
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $sql = "SELECT COUNT(*) FROM users WHERE email = ?";
        //kiểm tra email tồn tại

        if ($stmt_check = $conn->prepare($sql)) {
            $stmt_check->bind_param("s", $email);
            $stmt_check->execute();
            $stmt_check->bind_result($count);
            $stmt_check->fetch();
            $stmt_check->close();
            if($count > 0){
            }else{
                $error_message = "Tài khoản này không tồn tại";
            }

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
    <title>Forgot</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <section class="container forms">
        <div class="form signup">
            <div class="form-content">
                <header>Forgot</header>
                <form action="forgot.php" method="post">
                    <div class="field input-field">
                        <input type="email" name="email" placeholder="Email" class="input" require
                            value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>">
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

</html>