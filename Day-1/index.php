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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST['name'])) {
            $nameempty = "Hong được để trống bé ơi !";
        } else {
            echo $_POST['name'];
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