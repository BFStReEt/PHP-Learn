<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chaneg Password</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
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
                        <input type="text" name="repassword" placeholder="Confirm 111password" class="input" required>
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