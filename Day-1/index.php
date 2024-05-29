<?php
$file = fopen("file.txt","r") or die ("error"); // Mở file
while(!feof($file)){
    echo fgets($file) . "<br>";
}
fclose($file); // Đóng file

?>