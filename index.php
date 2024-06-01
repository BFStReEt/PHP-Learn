<?php
$ip = "127.0.0.1";

if(!filter_var($ip,FILTER_VALIDATE_IP) == false){
    echo "Day la IP hop le !";
}
else{
    echo "Khong la IP hop le !";
}


?>