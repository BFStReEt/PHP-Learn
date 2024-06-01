<?php
$songuyen = "ahaha";
$chuoi = 0;

$locchuoi = filter_var($chuoi,FILTER_SANITIZE_STRING);
if(filter_var($songuyen,FILTER_VALIDATE_INT) == false){
    echo "Day khong phai la so nguyen";
}
else{
    echo $songuyen . " lai la DG House";
}

if($locchuoi){
    echo "<br>$locchuoi" . " day la chuoi";
}


?>