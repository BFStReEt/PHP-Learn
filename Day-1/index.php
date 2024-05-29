<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test email</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
$file = fopen("file.txt","r") or die ("error"); // Mở file
$emailerror = "";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
if(empty(fgets($file))){
    $emailerror = "Email does not empty";
}
else{
    if(filter_var(fgets($file),FILTER_VALIDATE_EMAIL)){
        echo fgets($file);
    }
    else{
        $emailerror = "Email khong dung dinh dang !";
        echo fgets($file);
    }
}

}

fclose($file); // Đóng file

?>
<form action="index.php" method="post">
    Email: <input type="text" name="email">
    <br>
    <span class="error">
        <?php echo $emailerror ?>
        <?php echo fgets($file) ?>
    </span>
    <input type="submit" value="Gửi">
</form>

</html>