<form action="index.php" method="post">
    <input type="submit" name="submit" value="Send">
</form>

<?php

session_start();
//unset($_SESSION["name"]) // xóa session tên name;
session_destroy(); // xóa hết session;

?>