<?php
$file = fopen("file.txt","r") or die ("error"); // Mở file
echo fgets($file); //Đọc được 1 dòng; 
fclose($file); // Đóng file

?>