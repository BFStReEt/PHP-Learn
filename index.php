<?php
$email = "ahihi@gmail.com";

if(!filter_var($email,FILTER_VALIDATE_EMAIL) == false){
    echo "Day la email hop le !";
}
else{
    echo "Khong la email hop le !";
}


?>