<?php
$file = fopen("newfile.txt","w") or die("Error");

fwrite($file,"Hello ban nho");
fclose($file);
?>