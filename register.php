    <?php
    // register.php
    require 'config.php';
    session_start();
    if(isset($_SESSION['username'])){
        header("location:login.php");
    }
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $sql_check = "SELECT COUNT(*) FROM users WHERE username = ?";
        $stmt_check = $conn->prepare($sql_check);
        $stmt_check->bind_param("s",$username);
        $stmt_check->excute();
        $stmt_check->bind_result($count);

        if(){
            echo "Tài khoản này đã có người dùng";
        }
        else{
            $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $username, $password);
    
            if ($stmt->execute()) {
                $_SESSION['username'] = $username;
                echo "Đăng ký thành công! Bạn có thể <a href='login.php'>đăng nhập</a>.";
            } else {
                echo "Lỗi: " . $stmt->error;
            }
        }

        $stmt->close();
        $conn->close();
    }
    ?>

    <!DOCTYPE html>
    <html>

    <body>
        <h2>Đăng ký</h2>
        <form method="post">
            Tên đăng nhập: <input type="text" name="username" required><br>
            Mật khẩu: <input type="password" name="password" required><br>
            <button type="submit" name="submit">Đăng ký</button>
        </form>
    </body>

    </html>