
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
    die("Kết nối thất bại " . $con->connect_error);
}
?>