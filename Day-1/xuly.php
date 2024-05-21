<!DOCTYPE html>
<html lang="en">
//Mất streak một ngày
//Mất streak hai ngày
//Mất streak ba ngày
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $email = "";
    $emailerror = "";
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(empty($_GET['email'])){
        $emailerror = "Email does not empty";
    }
    else{
        $email = $_GET['email'];
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo $email;
        }
        else{
            $emailerror = "Email khong dung dinh dang !";
        }
    }
}
    ?>

    <form action="xuly.php" method="get">
        Email: <input type="text" name="email">
        <br>
        <span class="error">
            <?php echo $emailerror ?>
        </span>
        <input type="submit" value="Gửi">
    </form>
</body>

</html>
