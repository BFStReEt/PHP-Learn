<?php
$name = "hoang$%#%# nam";
$locchuoi = filter_var($name,FILTER_SANITIZE_STRING);

echo $locchuoi
?>