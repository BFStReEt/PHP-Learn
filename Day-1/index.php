<form action="index.php" method="post">
    Tên:<input type="text" name="name">
    <input type="submit">
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    echo $name;
    if($name == "Nguyễn Anh Tới"){
        echo " sinh năm 2000 github";
    }
    else if($name == "Hùng"){
        echo " chúng ta của hiện tại";
    }
    else{
        echo " hiện không tồn tại tên này";
    }
}
?>