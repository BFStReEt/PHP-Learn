<?php
require("config.php");
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username,password) VALUES (?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $usernamem, $password);
}
?>

<form action="register.php" method="post">
    Tên đăng nhập: <input type="text" name="username" require><br>
    Mật khẩu: <input type="password" name="password" require><br>
    <button type="submit">Đăng ký</button>
</form>