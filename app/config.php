<?php
require_once __DIR__ . '/../vendor/autoload.php'; //DIR trả về đường dẫn thư mục hiện tại

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
//Tạo ra một đối tượng dotenv, biến createImmutable giúp các biến môi trường không thể bị thay đổi sau khi chúng tải
$dotenv->load();
// Tải các biến môi trường và lưu chúng vào các biến môi trường của PHP, cho phép truy cập thông qua 'getenv()' hoặc '$_ENV'

$host = $_ENV['DB_HOST'];
$db = $_ENV['DB_DATABASE'];
$user = $_ENV['DB_USERNAME'];
$pass = $_ENV['DB_PASSWORD'];

$conn = new mysqli($host, $user, $pass,$db);

if ($conn->connect_error) {
    die("Kết nối thất bại " . $conn->connect_error);
}
?>