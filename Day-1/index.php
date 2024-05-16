<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $nameempty = "";
    $name = "";
    //Đây là phương thức khi ấn submit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST['name'])) {
            $nameempty = "Hong được để trống bé ơi !";
        } else {
            $name = $_POST['name'];
            if (!preg_match("/^[a-zA-Z]*$/", $name)) {
                $nameempty = 'Không được nhập ký tự đặc biệt';
            } else {
                echo $name;
            }
        }
    }

    ?>
    <form action="index.php" method="post">
        Tên: <input type="text" name="name">
        <span class="error">
            <?php echo $nameempty; ?>
        </span>
        <br>
        <input type="submit" name="submit">
    </form>
</body>

</html>