<?php
// register.php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
        echo "Đăng ký thành công! Bạn có thể <a href='login.php'>đăng nhập</a>.";
    } else {
        echo "Lỗi: " . $stmt->error;
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
        <button type="submit">Đăng ký</button>
    </form>
</body>

</html>