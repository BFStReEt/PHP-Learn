<form action="index.php" method="post">
    Tên:<input type="text" name="name">
    <input type="submit" value="Gửi" name="btn">
</form>
<?php
if(isset($_POST["btn"])){
    echo "Hello ban nho";
}
?>