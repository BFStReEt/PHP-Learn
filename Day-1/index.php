<?php
$file = fopen("file.txt","r") or die ("error"); // Mở file
echo fread($file,filesize("file.txt")); // Đọc file
echo fgets($file); //Đọc được 1 dòng; 
fclose($file); // Đóng file

?>