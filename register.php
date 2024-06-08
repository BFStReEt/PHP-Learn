<?php
// register.php
require 'config.php';
session_start();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Kiểm tra username trùng không
    $sql_check = "SELECT COUNT(*) FROM users WHERE username = ?";
    if ($stmt_check = $conn->prepare($sql_check)) {
        $stmt_check->bind_param("s", $username);
        $stmt_check->execute();
        $stmt_check->bind_result($count);
        $stmt_check->fetch();
        $stmt_check->close();

        if ($count > 0) {
            echo "Tài khoản này đã có người dùng";
        } else {
            $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);

            // Kiểm tra nếu chuẩn bị câu lệnh SQL không thành công
            if (!$stmt) {
                echo "Lỗi chuẩn bị câu lệnh SQL: " . $conn->error;
            } else {
                $stmt->bind_param("ss", $username, $password);

                if ($stmt->execute()) {
                    $_SESSION['username'] = $username;
                    echo "Đăng ký thành công! Bạn có thể <a href='login.php'>đăng nhập</a>.";
                } else {
                    echo "Lỗi: " . $stmt->error;
                }

                $stmt->close();
            }
        }
    } else {
        echo "Lỗi chuẩn bị câu lệnh kiểm tra: " . $conn->error;
    }

    $conn->close();
    //Kiếm form và mở rộng phần đăng ký phải có họ tên người dùng
}
?>

<!DOCTYPE html>
<html>

<body>
    <h2>Đăng ký</h2>
    <form method="post">
        Tên đăng nhập: <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>" required><br>
        Mật khẩu: <input type="password" name="password" required><br>
        <button type="submit" name="submit">Đăng ký</button>
    </form>
</body>

</html>