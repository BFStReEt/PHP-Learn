
<?php
require_once __DIR__ . '/../vendor/autoload.php'; //DIR trả về đường dẫn thư mục hiện tại

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại " . $conn->connect_error);
}
?>